<?php
$numbers = [3, 5, 1, 9, 4];
$maxNumber = $numbers[0];

foreach ($numbers as $num) {
    if ($num > $maxNumber) {
        $maxNumber = $num;
    }
}

echo $maxNumber;