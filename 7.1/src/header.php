<?php
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $pageTitle ?? 'Мой сайт' ?></title>
    <link rel="stylesheet" href="/css/style.css">
</head>
<body>

<header class="site-header">
    <div class="container">
        <a href="/" class="logo">
            
            <img src="" alt="Логотип">
        </a>

        <nav class="main-nav">
            <ul>
                <li><a href="/index.php">Главная</a></li>
                <li><a href="/about.php">О нас</a></li>
                <li><a href="/contacts.php">Контакты</a></li>
            </ul>
        </nav>
    </div>
</header>

<main class="site-main">