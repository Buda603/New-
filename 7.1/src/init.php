<?php
// src/init.php — инициализация приложения

// 1. Конфиг
$GLOBALS['config'] = require __DIR__ . '/config.php'; //кладет в глобальную переменную

// 2. Автозагрузка классов
require_once __DIR__ . '/autoload.php'; //подключает автозагрузчик

// 3. Режим отладки
if (!empty($GLOBALS['config']['debug'])) {
    error_reporting(E_ALL); // показывает ошибки 
    ini_set('display_errors', '1');
} else {
    error_reporting(0); //полностью отключает показ ошибок
    ini_set('display_errors', '0');
}

// 4. Кодировка и часовой пояс
mb_internal_encoding('UTF-8'); // внутренняя кодировка
date_default_timezone_set('Europe/Moscow'); // часовой пояс

// 5. Сессия
if (session_status() === PHP_SESSION_NONE) { // запускает сессию
    session_start();
}