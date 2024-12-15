<?php

//array map 
function square($n){

    return $n * $n;
}

$numbers = array(1,2,3,4);
$squareNumbers = array_map('square', $numbers);
print_r($squareNumbers);

echo"\n";


//Array filter
function is_even($n){
    return $n %2== 0;
}

$numbers = array(1,2,3,4);
$evenNumbers = array_filter($numbers,'is_even');
print_r($evenNumbers);
echo"\n";



//Array merged