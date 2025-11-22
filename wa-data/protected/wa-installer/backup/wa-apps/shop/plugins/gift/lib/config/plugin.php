<?php
return array(
    'name' => 'Случайный подарок',
    'description' => 'Страница /randomGift/ со случайным товаром',
    'version' => '1.0.0',
    'shop_settings' => true,
    'frontend' => true,
    'handlers' => [
        'frontend_nav' => 'frontendNav',
        'randomGift' => true,
    ],
);
