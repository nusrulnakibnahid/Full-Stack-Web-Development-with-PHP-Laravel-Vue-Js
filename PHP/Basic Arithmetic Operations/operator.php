<?php
//operator 

//Arithmetic (+,-,*,/,%)
$n1 = 6;
$n2 = 3;

echo $n1 + $n2;
echo "\n";

echo $n2 - $n1;
echo "\n";

echo $n1 * $n2;
echo "\n";

echo $n1 / $n2;
echo "\n";

echo $n1 % $n2;
echo "\n";

echo $n1 ** $n2;
echo "\n";


//Logical operator (&& - AND, || - OR, ! - NOT) (True or False)

$isActive = true;
$isPending = true;

$isActive1 = false;
$isPending2 = false;


// || - OR operator T = 1, F = 0 ->
/*
T | T = T
T | F = T
F | T = T
F | F = F
*/

echo $isActive || $isPending;
echo "\n";
echo $isActive1 || $isPending2;
echo "\n";


// && - AND operator T = 1, F = 0 ->
/*
T && T = T
T && F = F
F && T = F
F && F = F
*/

echo $isActive && $isPending;
echo "\n";
echo $isActive1 && $isPending2;
echo "\n";



// ! - NOT operator T = 1, F = 0 ->

echo !$isActive1;
echo "\n";








