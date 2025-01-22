<?php

$num = array(12,13,14,15,16,17,18,19,20);
//or using this way:
$number = array();
for($i = 12; $i <= 20; $i++){
    array_push($number, $i);
}
print_r ($number);

echo "\n \n \n \n \n";

//Or using range function:
$numbers = range(10, 20);
print_r($numbers);

echo "\n \n \n \n \n";

//find even number using range function:
foreach(range(11, 20, 2) as $evenNumber){
    echo $evenNumber . "\n";
}
echo "\n \n";

//find odd number using range function:
foreach(range(10, 20, 2) as $oddNumber){
    echo $oddNumber . "\n";
}

echo "\n \n"; 


//Show the numbers from 0 to 50 that are divisible by 7.
foreach(range(0, 50, 7) as $divisibleBy7){
    
    if($divisibleBy7 >0){
    echo $divisibleBy7 . "\n";
    }
}