<?php
return [
    'name'          => 'ASPGift — случайный подарок',
    'description'   => 'Страница /gift/ со случайным товаром',
    'version'       => '1.0.0',
    'shop_settings' => true,
    'frontend'      => true,
    'handlers'      => [
        'frontend_nav' => 'frontendNav',
    ],
];