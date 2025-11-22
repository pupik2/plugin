<?php
return array (
  'meta' => 
  array (
    'Project-Id-Version' => 'apiexplorer',
    'POT-Creation-Date' => '2021-12-08 18:28+0300',
    'PO-Revision-Date' => '',
    'Last-Translator' => 'apiexplorer',
    'Language-Team' => 'apiexplorer',
    'MIME-Version' => '1.0',
    'Content-Type' => 'text/plain; charset=utf-8',
    'Content-Transfer-Encoding' => '8bit',
    'Plural-Forms' => 
    array (
      'nplurals' => '3',
      'plural' => 'return (((($n%10)==1)&&(($n%100)!=11))?(0):((((($n%10)>=2)&&(($n%10)<=4))&&((($n%100)<10)||(($n%100)>=20)))?(1):2));',
    ),
    'X-Poedit-SourceCharset' => 'utf-8',
    'X-Poedit-Basepath' => 'utf-8',
    'Language' => 'ru_RU',
    'X-Generator' => 'Poedit 2.0.6',
    'X-Poedit-SearchPath-0' => '.',
    'X-Poedit-SearchPath-1' => '.',
  ),
  'messages' => 
  array (
    '<strong>API Explorer</strong> is intended for testing APIs of other apps powered by the Webasyst framework. It supports only standard API, implemented by means of the <code>waAPIMethod</code> class, which works via the <strong><code>/api.php</code></strong> endpoint.' => 'Приложение <strong>API Explorer</strong> предназначено для тестирования API других приложений, работающих на основе фреймворка Webasyst. Поддерживается только стандартный вид API, реализованный с использованием класса <code>waAPIMethod</code> и работающий через точку входа <strong><code>/api.php</code></strong>.',
    'Retrieving of API methods info' => 'Сбор информации о методах API',
    'API Explorer can retrieve information only about API methods of the apps to which a current user has access.' => 'API Explorer умеет получать информацию о методах API только тех установленных приложений, к которым имеет доступ текущий пользователь.',
    'If a selected app contains a file with API methods’ descriptions in the <a href="https://swagger.io/resources/open-api/" target="_blank">Open API (Swagger)</a> format then this description file is used. The relative path to the description file in the app’s folder must be <code>api/swagger/v1.yaml</code>.' => 'Если в выбранном приложении есть файл с описаниями методов API в формате <a href="https://swagger.io/resources/open-api/" target="_blank">Open API (Swagger)</a>, то используется это описание. Относительный путь к этому файлу в папке приложения должен быть <code>api/swagger/v1.yaml</code>.',
    'If an app contains no such file then the list of its API methods is automatically obtained from the app’s <code>api/</code> folder.' => 'Если такого файла в составе приложения нет, то список его методов API собирается автоматически из содержимого папки <code>api/</code>.',
    'To display the method list as fast as possible, API Explorer generates it once and then saves it to cache. Therefore, if you need to refresh the list — for instance, if you have added a new API method to your own app and would like to see how API Explorer will display it — clear the Webasyst cache and reload the browser tab.' => 'Чтобы отображать список методов как можно быстрее, API Explorer формирует его один раз и потом кеширует. Поэтому, если нужно обновить этот список (например, вы добавили новый метод API в свое приложение и хотите посмотреть, как его покажет API Explorer), очистите кеш фреймворка и обновите вкладку браузера.',
    'Access rights' => 'Права доступа',
    'A user <em>without</em> administrator access rights can execute API methods on their own behalf only.' => 'Пользователь, <em>не</em> являющийся администратором системы, может выполнять вызовы методов API только от своего лица.',
    'A user <em>with</em> administrator access rights can also select an arbitrary user in the sidebar and call API methods on behalf of that user.' => 'Пользователь <em>с правами</em> администратора может также выбрать в боковой панели любого другого пользователя, от лица которого нужно выполнять вызовы.',
    'Auto-creation of access token' => 'Автоматическое создание токена',
    'API Explorer facilitates accessing the API, which in ordinary conditions <a href="https://developers.webasyst.com/features/apis/" target="_blank">requires an access token</a>. A token allowing access to all installed apps’ APIs is created automatically when a user is selected in the sidebar, with that user’s access rights taken into account.' => 'API Explorer помогает быстро получить доступ к API, для чего в обычных рабочих условиях <a href="https://developers.webasyst.ru/docs/features/apis/" target="_blank">необходим токен доступа</a>. Токен для работы с API всех установленных приложений создается автоматически при выборе пользователя в боковой панели — с учетом прав доступа этого пользователя.',
    'An automatically created token can be deleted when necessary — via the <em>Show token → <strong>Delete</strong></em> item on any API method viewing page.' => 'Автоматически созданный токен можно при необходимости удалить — с помощью пункта «<em>Показать токен → <strong>Удалить</strong></em>» на странице просмотра любого метода API.',
  ),
);
