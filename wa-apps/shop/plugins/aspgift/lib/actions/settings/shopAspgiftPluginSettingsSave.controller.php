<?php

class shopAspgiftPluginSettingsSaveController extends waJsonController
{
    public function execute()
    {
        $plugin = wa('shop')->getPlugin('aspgift');
        $post   = waRequest::post('settings', [], waRequest::TYPE_ARRAY);

        $ids = array_unique(array_filter(array_map('intval',
            preg_split('/[^\d]+/', (string)($post['product_ids'] ?? ''))
        )));
        $plugin->saveSettings(['product_ids' => implode(',', $ids)]);

        $this->response = ['status' => 'ok'];
    }
}