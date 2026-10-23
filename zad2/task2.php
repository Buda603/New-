<?php
require_once 'Car.php';

// Все параметры указаны
$car1 = new Car("Toyota", "Camry", "седан", "чёрный", 1550);
$car1->getInfo();
echo "Вес машины: " . $car1->getWeight() . " кг<br><br>";

// color и weight не указаны — сработают значения по умолчанию
$car2 = new Car("Audi", "A6", "седан");
$car2->getInfo();
echo "Вес машины: " . $car2->getWeight() . " кг<br>";
?>