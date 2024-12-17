<?php

// array_walk
$fruits = array("apple", "banana", "cherry");

function test_alter(&$item, $key, $prefix) {
    $item = "$prefix: $item";
}

array_walk($fruits, 'test_alter', 'fruit');
print_r($fruits);


 $sweet = array('a' => 'apple', 'b' => array('p' => 'pear', 'c' => 'cherry'));

 function test_print($item, $key) {
     echo "$key holds $item\n";
 }

 array_walk_recursive($sweet, 'test_print');



$numbers = array(1, 2, 3);

function sum($carry, $item) {
    $carry = $carry + $item;
    return $carry;
}

$result = array_reduce($numbers, 'sum');
echo $result;  // Outputs: 6



