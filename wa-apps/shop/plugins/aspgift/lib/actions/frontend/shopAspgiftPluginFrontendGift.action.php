<?php

class shopAspgiftPluginFrontendGiftAction extends waViewAction
{
    public function execute()
    {
        $this->setTemplate('FrontendGift.html');
        $this->getResponse()->setTitle('Подарок для вас!');

        $plugin   = wa('shop')->getPlugin('aspgift');
        $ids_str  = (string) $plugin->getSettings('product_ids');
        $ids      = array_values(array_filter(array_unique(array_map('intval', preg_split('/[^\d]+/', $ids_str)))));
        $has_ids  = !empty($ids);

        $gift = null;
        $gift_url = '';
        $gift_price_html = '';
        $spin_url = wa()->getRouteUrl('shop/frontend/gift') . '?spin=1';
        $ok = false;
        $error = null;

        try {
            if (waRequest::method() === 'post') {
                $email = waRequest::post('email', '', waRequest::TYPE_STRING_TRIM);
                $pid   = waRequest::post('pid', 0, waRequest::TYPE_INT);

                $validator = new waEmailValidator();
                if (!$validator->isValid($email)) {
                    $error = 'Укажите корректный e‑mail.';
                } else {
                    $p = new shopProduct($pid);
                    if (!$p['id']) {
                        $error = 'Товар не найден.';
                    } else {
                        $gift = $p;
                        $gift_url = wa()->getRouteUrl('shop/frontend/product', ['product_url' => $p['url']], true);

                        $currency = wa('shop')->getConfig()->getCurrency();
                        $gift_price_html = waCurrency::format('%{s}', (float)$p['price'], $currency);

                        $body = "Здравствуйте!\n\n".
                            "Ваш подарок — товар: \"{$p['name']}\"\n".
                            "Цена: {$gift_price_html}\n".
                            "Ссылка: {$gift_url}\n\n".
                            "Спасибо, что участвуете в акции!";
                        $mail = new waMailMessage('Ваш подарок!', nl2br($body));
                        $mail->setTo($email);

                        if ($mail->send()) {
                            $ok = true;
                        } else {
                            $error = 'Не удалось отправить письмо. Проверьте настройки почты.';
                        }
                    }
                }
            } elseif (waRequest::get('spin', 0, waRequest::TYPE_INT) && $has_ids) {
                $p = new shopProduct($ids[array_rand($ids)]);
                if ($p['id']) {
                    $gift = $p;
                    $gift_url = wa()->getRouteUrl('shop/frontend/product', ['product_url' => $p['url']], true);

                    $currency = wa('shop')->getConfig()->getCurrency();
                    $gift_price_html = waCurrency::format('%{s}', (float)$p['price'], $currency);
                } else {
                    $error = 'Не удалось выбрать товар из списка. Проверьте ID.';
                }
            }
        } catch (Throwable $e) {
            $error = 'Ошибка: '.$e->getMessage();
            waLog::log('ASPGift demo error: '.$e->getMessage()."\n".$e->getTraceAsString(), 'aspgift.log');
        }

        $this->view->assign([
            'gift'            => $gift,
            'gift_url'        => $gift_url,
            'gift_price_html' => $gift_price_html,
            'spin_url'        => $spin_url,
            'has_ids'         => $has_ids,
            'ok'              => $ok,
            'error'           => $error,
        ]);
    }
}