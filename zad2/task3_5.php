<?php
require_once 'Car.php';

//Задание 3: исходный массив $cars
$cars = [
    [
        'brand' => 'BMW',
        'model' => 'M3',
        'type'  => 'седан',
        'color' => 'синий',
        'weight' => 1650,
    ],
    [
        'brand' => 'Audi',
        'model' => 'A6',
        'type'  => 'седан',
        // color и weight не указаны - сработают значения по умолчанию
    ],
    [
        'brand' => 'Mercedes',
        'model' => 'G-Class',
        'type'  => 'внедорожник',
        'color' => 'белый',
        'weight' => 2500,
    ],
    [
        'brand' => 'Tesla',
        'model' => 'Model 3',
        'type'  => 'седан',
        'color' => 'красный',
        // weight не указан → 0
    ],
    [
        'brand' => 'Lada',
        'model' => 'Vesta',
        'type'  => 'седан',
        'color' => 'серебристый',
        'weight' => 1400,
    ],
];

// Задание 4: создаём объекты в цикле 
$objCars = [];
foreach ($cars as $data) {
    $objCars[] = new Car(
        $data['brand'],
        $data['model'],
        $data['type'],
        $data['color']  ?? "черный",
        $data['weight'] ?? 0
    );
}

// Задание 5: вывод через getInfo() БЕЗ циклов
$objCars[0]->getInfo();
$objCars[1]->getInfo();
$objCars[2]->getInfo();
$objCars[3]->getInfo();
$objCars[4]->getInfo();
?>