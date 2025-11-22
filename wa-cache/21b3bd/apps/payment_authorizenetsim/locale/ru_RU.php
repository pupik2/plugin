<?php
return array (
  'meta' => 
  array (
    'Project-Id-Version' => 'wa-plugins/payment/authorizenetsim',
    'POT-Creation-Date' => '2013-05-16 14:08+0000',
    'PO-Revision-Date' => '',
    'Last-Translator' => 'wa-plugins/payment/authorizenetsim',
    'Language-Team' => 'wa-plugins/payment/authorizenetsim',
    'MIME-Version' => '1.0',
    'Content-Type' => 'text/plain; charset=utf-8',
    'Content-Transfer-Encoding' => '8bit',
    'Plural-Forms' => 
    array (
      'nplurals' => '3',
      'plural' => 'return (((($n%10)==1)&&(($n%100)!=11))?(0):((((($n%10)>=2)&&(($n%10)<=4))&&((($n%100)<10)||(($n%100)>=20)))?(1):2));',
    ),
    'X-Poedit-SourceCharset' => 'utf-8',
    'X-Poedit-Basepath' => '.',
    'X-Generator' => 'Poedit 1.5.5',
    'X-Poedit-SearchPath-0' => '.',
    'X-Poedit-SearchPath-1' => '.',
  ),
  'messages' => 
  array (
    'Authorize.Net SIM' => 'Authorize.Net SIM',
    'Authorize.Net Simple Integration Module<br>Credit card information is collected on Authorize.Net web site.' => 'Обработка кредитных карт через платежную систему Authorize.Net по методу Simple Integration Method (SIM).<br>Информация о кредитной карте вводится покупателем на сайте Authorize.Net.',
    'Authorize.Net Login ID' => 'Authorize.Net ID',
    'Please input your merchant login ID' => 'Введите ваш идентификатор в системе Authorize.Net',
    'Transaction Key' => 'Transaction Key',
    'Please input your transaction key (this can be found in your Authorize.Net account panel).<br>This information is stored in crypted way (secure)' => 'Введите transaction key, который вы можете получить в интерфейсе Authorize.Net',
    'Test mode' => 'Тестовый режим',
    'Proceed to Authorize.Net payment gateway' => 'Перейти к оплате на сервере Authorize.Net',
  ),
);
