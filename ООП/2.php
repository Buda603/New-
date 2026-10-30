<?php 
$numbers = [1, 4, 5, 2, 7];
$maxNumber = $numbers[0];

foreach ($numbers as $num) {
    if ($num > $maxNumber) {
        $maxNumber = $num;
    }
}
echo $maxNumber;