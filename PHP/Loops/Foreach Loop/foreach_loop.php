Question: Calculate the sum of the following array's elements using a foreach loop

<?php

$numbers = [10, 20, 30, 40, 50,60];
$sum = 0;


echo "Numbers are: \n";
foreach ($numbers as $number) {
    echo " $number " . "\n";
    $sum += $number;
}

echo "The sum of numbers are = " . $sum;

