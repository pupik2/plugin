<?php

return array (
  'localhost:8000' => 
  array (
    0 => 
    array (
      'url' => 'logs/*',
      'app' => 'logs',
      'locale' => 'ru_RU',
      'private' => true,
    ),
    1 => 
    array (
      'url' => 'blog/*',
      'app' => 'blog',
      'locale' => 'ru_RU',
      'blog_url_type' => 1,
    ),
    2 => 
    array (
      'url' => 'dummy/*',
      'app' => 'dummy',
      'locale' => 'ru_RU',
    ),
    3 => 
    array (
      'url' => 'photos/*',
      'app' => 'photos',
      'locale' => 'ru_RU',
    ),
    4 => 
    array (
      'url' => '*',
      'app' => 'site',
      'locale' => 'ru_RU',
      'priority_settlement' => true,
    ),
    'guestbook' => 
    array (
      'url' => 'guestbook/*',
      'app' => 'guestbook',
      'module' => 'frontend',
    ),
  ),
);
//EOF