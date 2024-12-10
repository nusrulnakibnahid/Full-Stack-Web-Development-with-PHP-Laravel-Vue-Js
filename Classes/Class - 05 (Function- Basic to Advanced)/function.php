<?php

function  myName($name){

    echo "Hello $name";

}

myName("Nahid");

echo "\n \n \n";


function sumOfTwoNumbers($num1,$num2){
    $result = $num1 + $num2;
    return $result;
}

$sumOfTest1 = sumOfTwoNumbers(25,45);
$sumOfTest2 = sumOfTwoNumbers(10,20);

$myExpResult = $sumOfTest1 * $sumOfTest2;

echo $myExpResult;

echo "\n \n \n";


function greetings($names = "Sir!"){
    echo "Welcome $names";
}

greetings("Nahid");

echo "\n \n \n";


//variadic function
function sumOfNumbers(...$numbers){

    $sumResult = array_sum($numbers);
    return $sumResult;

}

echo sumOfNumbers(10,30,56,67);

echo "\n \n \n";



//Return Type
function sumOfTwoNumbersInt($num1,$num2):int{ //or using -> function sumOfTwoNumbersInt(int $num1,int $num2) or function sumOfTwoNumbersInt($num1,$num2): int | float
    $result = $num1 + $num2;
    return $result;
}

echo sumOfTwoNumbersInt(20,30.77);

echo "\n \n \n";






?>