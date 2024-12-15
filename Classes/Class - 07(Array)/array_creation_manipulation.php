<?php
//Array creation:
//$fruits1 = array("apple","banana", "cherry");
//$fruits2 = ["apple","banana", "cherry"];



//array value:
/*
$assoc = array("a" => "apple", "b" => "banana", "c" => "cherry");
$values = array_values($assoc);
print_r($values);
*/


//array keys:
/*
$assoc = array("a" => "apple", "b" => "banana", "c" => "cherry");
$keys = array_keys($assoc);
print_r($keys);
*/



//Array combine:
/*
$keys == array("a","b","c");
$values = array("apple","banana", "cherry");
$combined = array_combine($keys, $values);
print_r($combined);
*/



//Array fill
/*
$filled = array_fill(0,3,"apple");
print_r($filled);
*/




//Insert element at the end:
/*
$fruits = array("apple","banana", "cherry");
array_push($fruits,"date", "elderberry");
print_r($fruits);
*/



//Remove element from the end
/*
$fruits = array("apple","banana", "cherry");
$lastFruit = array_pop($fruits);
print_r($fruits);
echo "Last Fruit : $lastFruit";
*/



//Insert element at the beginning
/*
$fruits = array("apple","banana", "cherry");
array_unshift($fruits,"Orange");
print_r($fruits);
*/



//Remove element from the beginning
/*
$fruits = array("apple","banana", "cherry");
$first_fruit = array_shift($fruits);
print_r($fruits);
*/



//Removing a portion from an array and adding new element
/*
$fruits = array("apple","banana", "cherry");
array_splice($fruits,1,2, array("fig", "grape") );
print_r($fruits);
*/




//Extracting a portion from an array
/* 
$fruits = array("apple","banana", "cherry");
$portion = array_slice($fruits,1,2);
print_r($portion);
*/






