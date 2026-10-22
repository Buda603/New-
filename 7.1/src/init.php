<?php
// src/init.php — инициализация приложения

// 1. Конфиг
$GLOBALS['config'] = require __DIR__ . '/config.php';

// 2. Автозагрузка классов
require_once __DIR__ . '/autoload.php';

// 3. Режим отладки
if (!empty($GLOBALS['config']['debug'])) {
    error_reporting(E_ALL);
    ini_set('display_errors', '1');
} else {
    error_reporting(0);
    ini_set('display_errors', '0');
}

// 4. Кодировка и часовой пояс
mb_internal_encoding('UTF-8');
date_default_timezone_set('Europe/Moscow');

// 5. Сессия
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}