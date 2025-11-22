<?php

class shopGiftPlugin extends shopPlugin
{
    // В файле plugin.php вы заявили хук 'frontend_nav' => 'frontendNav'
    // Значит, этот метод должен быть здесь:

    public function frontendNav($params)
    {
        // Например, добавим ссылку в меню
        $url = wa()->getRouteUrl('shop/frontend/randomGift'); // Используем правило из routing.php
        return '<li><a href="'.$url.'">Получить подарок</a></li>';
    }
}