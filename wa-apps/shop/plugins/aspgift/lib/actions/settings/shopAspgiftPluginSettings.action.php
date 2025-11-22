<?php

class shopAspgiftPluginSettingsAction extends waViewAction
{
    public function execute()
    {
        $plugin   = wa('shop')->getPlugin('aspgift');
        $controls = $plugin->getControls($plugin->getSettings());
        $this->view->assign('controls', $controls);
    }
}