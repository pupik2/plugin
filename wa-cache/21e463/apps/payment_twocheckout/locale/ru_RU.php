<?php
return array (
  'meta' => 
  array (
    'Project-Id-Version' => 'wa-plugins/payment/twocheckout',
    'POT-Creation-Date' => '2013-05-16 12:11+0000',
    'PO-Revision-Date' => '',
    'Last-Translator' => 'wa-plugins/payment/twocheckout',
    'Language-Team' => 'wa-plugins/payment/twocheckout',
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
    '2checkout merchant ID' => 'Ваш ID',
    'Please input your 2checkout login ID' => 'Введите свой идентификатор в системе 2checkout',
    'Secret word is a text string appended to the payment credentials, which are sent to merchant together with the payment notification.<br />It is used to enhance the security of the notification identification and should not be disclosed to third parties.' => 'Используется для подписи данных, передаваемых из интернет-магазина в платежную систему',
    'Sandbox mode' => 'Демо-режим',
    '2checkout credit cards processing module' => 'Обработка кредитных карт через платежную систему 2checkout (v2)',
  ),
);
