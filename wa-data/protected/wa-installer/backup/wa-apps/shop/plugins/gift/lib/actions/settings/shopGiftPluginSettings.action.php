<?php

class shopGiftPluginSettingsAction extends waViewAction
{
    public function execute()
    {
        $plugin = wa('shop')->getPlugin('randomGift');

        $this->view->assign([
            'settings'  => $plugin->getSettings(),
            'controls'  => method_exists($plugin, 'getControls') ? $plugin->getControls($plugin->getSettings()) : null,
            'plugin_id' => 'randomGift',
        ]);
    }
}