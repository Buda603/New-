<?php 
$number = [2, 3, 5, 4];
$sum = 0;
foreach ($number as $num) {
    $sum + $num;
    $sum = $sum + $num;
}
echo $sum;