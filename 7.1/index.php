<?php
require_once __DIR__ . '/src/init.php';   
require_once __DIR__ . '/src/index_init.php';

$pageTitle = 'Главная — Мой сайт';
require __DIR__ . '/src/header.php';
?>

<section class="hero">
    <h1>Добро пожаловать!</h1>
    <p>Это главная страница сайта.</p>
</section>

<?php require __DIR__ . '/src/footer.php'; ?>