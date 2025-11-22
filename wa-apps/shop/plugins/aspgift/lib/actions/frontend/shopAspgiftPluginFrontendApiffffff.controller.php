<?php

class shopAspgiftPluginFrontendApiController extends waJsonController
{
    public function execute()
    {
        $op = waRequest::request('op', '', waRequest::TYPE_STRING_TRIM);

        if ($op === 'get') {
            return $this->getRandomProduct();
        } elseif ($op === 'send') {
            return $this->sendEmail();
        }

        $this->errors[] = 'Unknown operation';
    }

    private function getRandomProduct()
    {
        $plugin  = wa('shop')->getPlugin('aspgift');
        $ids_str = (string) $plugin->getSettings('product_ids');
        $ids     = array_unique(array_filter(array_map('intval', preg_split('/[^\d]+/', $ids_str))));

        if (!$ids) {
            $this->errors[] = 'Список товаров пуст. Укажите ID в настройках.';
            return;
        }

        $pm = new shopProductModel();
        $product = null;

        for ($i = 0; $i < 5; $i++) {
            $id = $ids[array_rand($ids)];
            if ($row = $pm->getById($id)) {
                $product = new shopProduct($row);
                break;
            }
        }

        if (!$product) {
            $this->errors[] = 'Не удалось выбрать товар из списка.';
            return;
        }

        // Рендер карточки сервером
        $view = wa()->getView();
        $view->assign('gift', $product);
        $tpl  = wa()->getAppPath('plugins/aspgift/templates/actions/frontend/ProductCard.html', 'shop');
        $html = $view->fetch($tpl);

        $this->response = [
            'id'   => (int)$product['id'],
            'html' => $html,
        ];
    }

    private function sendEmail()
    {
        $email = waRequest::post('email', '', waRequest::TYPE_STRING_TRIM);
        $pid   = waRequest::post('pid', 0, waRequest::TYPE_INT);

        $validator = new waEmailValidator();
        if (!$validator->isValid($email)) {
            $this->errors[] = 'Укажите корректный e-mail.';
            return;
        }
        if (!$pid) {
            $this->errors[] = 'Не передан товар.';
            return;
        }

        $pm = new shopProductModel();
        $row = $pm->getById($pid);
        if (!$row) {
            $this->errors[] = 'Товар не найден.';
            return;
        }

        $product   = new shopProduct($row);
        $currency  = wa('shop')->getConfig()->getCurrency();
        $price_str = waCurrency::format('%{s}', $product['price'], $currency);
        $url       = wa()->getRouteUrl('shop/frontend/product', ['product_url' => $product['url']], true);

        $subject = 'Ваш подарок!';
        $text = "Здравствуйте!\n\n".
            "Ваш подарок — товар: \"{$product['name']}\"\n".
            "Цена: {$price_str}\n".
            "Ссылка: {$url}\n\n".
            "Спасибо, что участвуете в акции!";

        $mail = new waMailMessage($subject, nl2br($text));
        $mail->setTo($email);

        if (!$mail->send()) {
            $this->errors[] = 'Не удалось отправить письмо. Проверьте настройки почты.';
            return;
        }

        $this->response = ['ok' => true];
    }
}