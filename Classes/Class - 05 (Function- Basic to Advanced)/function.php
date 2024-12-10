<?php

function  myName($name){

    echo "Hello $name";

};

myName("Nahid");

echo "\n \n \n";


function sumOfTwoNumbers($num1,$num2){
    $result = $num1 + $num2;
    return $result;
};

$sumOfTest1 = sumOfTwoNumbers(25,45);
$sumOfTest2 = sumOfTwoNumbers(10,20);

$myExpResult = $sumOfTest1 * $sumOfTest2;

echo $myExpResult;

echo "\n \n \n";


function greetings($names = "Sir!"){
    echo "Welcome $names";
};

greetings("Nahid");

echo "\n \n \n";


//variadic function
function sumOfNumbers(...$numbers){

    $sumResult = array_sum($numbers);
    return $sumResult;

};

echo sumOfNumbers(10,30,56,67);

echo "\n \n \n";



//Return Type
function sumOfTwoNumbersInt($num1,$num2):int{ //or using -> function sumOfTwoNumbersInt(int $num1,int $num2) or function sumOfTwoNumbersInt($num1,$num2): int | float
    $result = $num1 + $num2;
    return $result;
};

echo sumOfTwoNumbersInt(20,30.77);

echo "\n \n \n";



//Scope of variable ->

//Local variable: 
function variableScopeLocal(){
    $nameLocal = "Nahid";

    echo "Hello i'm $nameLocal";
};
variableScopeLocal();

echo $nameLocal; //this line show error

echo "\n";


//Global variable:
$staff = "Tonmoy";
function variableScopeGlobal($staff){

    global $staff;

    echo "$staff please a make cup of coffee";


};

variableScopeGlobal($staff);

echo "\n \n \n";




//Anonymous function

$anFunVar = function ($x, $y){

    $z = $x * $y;
    return $z;

};

echo $anFunVar(10,20);


echo "\n \n \n";


//Arrow function

$arrowFnVar = fn($a, $b) => $a * $b;

echo $arrowFnVar (10,5);

echo "\n \n \n";




//Recursive function

function factWithRec($n){

    if ($n == 0 ){
        return 1;
    }

    $result = $n * factWithRec ($n-1);
    return $result;

}

echo factWithRec(5);

echo "\n \n \n";



//Callback function
function sayHello ($name){

    return "Hello $name";

}

function greet($callback, $name){

    return $callback($name);

}

echo greet("sayHello", "Nahid");


echo "\n \n \n";


//Reuseable function
function mulTwoNumbers($s, $r){
    return $s * $r;
}
function reuseableFun($a, $b, $c){

    $sumResult = sumOfTwoNumbers($a, $b);
    $mulResult = mulTwoNumbers($b, $c);
    $finalResult = $sumResult + $mulResult;
    return $finalResult;

}

echo reuseableFun(10, 20, 30);


?>