<?php
require_once 'User.php';

$user1 = new User("Иван", "Петров", "ivan@example.com");
$user1->sayAboutMe();

$user2 = new User("Мария", "Сидорова", "maria@example.com");
$user2->sayAboutMe();

// Дополнительно: проверка обрезки (имя длиннее 128 символов)
$longName = str_repeat("А", 150);
$user3 = new User($longName, "Тестов", "test@example.com");
echo "Длина исходного имени: 150, после обрезки: "
    . mb_strlen($user3->firstName) . " символов<br>";
?>