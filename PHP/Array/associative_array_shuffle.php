<?php
$fruits = array('a' => 'apple', 'b' => 'banana', 'c' => 'cherry', 'd' => 'date', 'e' => 'elderberry');

shuffle($fruits);
print_r($fruits);
echo "\n";

//find random key:
$key = array_rand($fruits);
echo $key;
echo "\n";
echo $fruits[$key];

