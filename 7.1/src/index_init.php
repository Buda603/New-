<?php
// src/index_init.php — инициализация главной страницы

require_once __DIR__ . '/init.php';

$GLOBALS['page'] = [
    'title' => 'Главная — ' . $GLOBALS['config']['site_name'],
    'hero'  => 'Добро пожаловать на сайт Бухгалтерия',
];