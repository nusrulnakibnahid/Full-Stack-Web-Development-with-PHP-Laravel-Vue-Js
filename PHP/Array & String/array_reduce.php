<?php
$numbers = array(1,2,3,4,5,6);

function sum($oldValue, $newValue ){
    return $oldValue + $newValue;
}

$sum = array_reduce($numbers, 'sum');
echo $sum; //Output: 21 if array is (1,2,3,4,5,6)

echo "\n";

echo count($numbers); 

echo "\n";


