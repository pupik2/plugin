<?php

class shopGiftPluginSettingsSaveController extends waJsonController
{
    public function execute()
    {
        $plugin = wa('shop')->getPlugin('randomGift');

        // Поля приходят массивом settings[...]
        $settings = waRequest::post('settings', [], waRequest::TYPE_ARRAY);
        foreach ($settings as $k => $v) {
            if (is_string($v)) {
                $settings[$k] = trim($v);
            }
        }

        $plugin->saveSettings($settings);
        $this->response = ['status' => 'ok'];
    }
}