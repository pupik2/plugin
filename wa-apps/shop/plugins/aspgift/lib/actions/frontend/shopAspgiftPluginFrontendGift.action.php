<?php

class shopAspgiftPluginFrontendGiftAction extends waViewAction
{
    public function execute()
    {
        $plugin  = wa('shop')->getPlugin('aspgift');
        $ids_str = (string) $plugin->getSettings('product_ids');

        $ids = array_unique(array_filter(array_map('intval', preg_split('/[^\d]+/', $ids_str))));
        $product = null;

        if ($ids) {
            $random_id = $ids[array_rand($ids)];
            $pm = new shopProductModel();
            if ($row = $pm->getById($random_id)) {
                $product = new shopProduct($row);
            }
        }

        $this->view->assign('gift', $product);
        $this->getResponse()->setTitle('Ваш подарок!');
    }
}