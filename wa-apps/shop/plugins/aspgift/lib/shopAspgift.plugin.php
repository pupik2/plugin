<?php

class shopAspgiftPlugin extends shopPlugin
{
    public function frontendNav($params)
    {
        $url = wa()->getRouteUrl('shop/frontend/gift');
        return '<li><a href="'.$url.'">Получить подарок</a></li>';
    }
}