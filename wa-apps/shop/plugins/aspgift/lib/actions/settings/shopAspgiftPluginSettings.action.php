<?php

class shopAspgiftPluginSettingsAction extends waViewAction
{
    public function execute()
    {
        $plugin = wa('shop')->getPlugin('aspgift');
        $this->view->assign('value', (string)$plugin->getSettings('product_ids'));
    }
}