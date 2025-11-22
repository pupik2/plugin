<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);

require_once 'wa-config/SystemConfig.class.php';
require_once 'wa-system/System.class.php';
echo "<pre><h1>Диагностика плагина 'randomGift'</h1>";

try {
    waSystem::getInstance('shop', new SystemConfig());
    echo "✅ Webasyst загружен.\n";
} catch (Exception $e) {
    die("❌ Ошибка загрузки ядра: " . $e->getMessage());
}
$plugin_id = 'randomGift';
$plugins_conf = wa('shop')->getConfig()->getPlugins();
if (isset($plugins_conf[$plugin_id])) {
    echo "✅ Плагин ЕСТЬ в списке активных (wa-config/apps/shop/plugins.php).\n";
} else {
    echo "❌ Плагина НЕТ в конфиге apps/shop/plugins.php!\n";
    echo "Текущий список: " . print_r(array_keys($plugins_conf), true);
}

// 2. Проверяем, видит ли система info-файл
$info = wa('shop')->getConfig()->getPluginInfo($plugin_id);
if (!empty($info)) {
    echo "✅ Файл plugin.php прочитан корректно. Название: " . $info['name'] . "\n";
} else {
    echo "❌ Файл plugin.php не прочитан или пуст.\n";
}

// 3. Самое главное: Пытаемся загрузить объект
echo "\n⏳ Попытка загрузки класса плагина...\n";
try {
    $plugin = wa('shop')->getPlugin($plugin_id);
    echo "🎉 <b>УРА! Плагин успешно загружен!</b>\n";
    echo "Класс: " . get_class($plugin) . "\n";
    echo "Настройки: " . print_r($plugin->getSettings(), true) . "\n";
} catch (Exception $e) {
    echo "💀 <b>ФАТАЛЬНАЯ ОШИБКА при загрузке:</b>\n";
    echo $e->getMessage() . "\n";
    echo "Посмотрите стек вызова, чтобы понять, в какой строке ошибка.";
}
echo "</pre>";