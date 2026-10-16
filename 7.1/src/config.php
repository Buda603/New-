<?php

return [
    'site_name' => 'Мой сайт',
    'site_url'  => 'http://localhost:8000',
    'debug'     => true,

    'base_path'    => dirname(__DIR__),
    'src_path'     => __DIR__,
    'classes_path' => __DIR__ . '/classes',

    // меню сайта (используется в header.php и footer.php)
    'menu' => [
        'Главная'  => '/index.php',
        'О нас'    => '/about.php',
        'Контакты' => '/contacts.php',
    ],
];