<?php

class shopGiftPluginFrontendGiftAction extends shopFrontendAction
{
    public function execute()
    {
        $plugin = wa('shop')->getPlugin('randomGift');
        $settings_ids = $plugin->getSettings('product_ids');
        $ids = explode(',', $settings_ids);
        $ids = array_map('trim', $ids);
        $ids = array_filter($ids);

        $product = null;

        if (!empty($ids)) {
            $random_key = array_rand($ids);
            $random_id = $ids[$random_key];

            $product_model = new shopProductModel();
            $p_data = $product_model->getById($random_id);

            if ($p_data) {
                $product = new shopProduct($p_data);
            }
        }

        $this->view->assign('randomGift', $product);
        $this->getResponse()->setTitle('Ваш подарок!');
    }
}