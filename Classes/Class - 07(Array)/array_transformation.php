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



// Array merge
$arr1 = array("apple", "banana");
 $arr2 = array("cherry", "date");
 $merged = array_merge($arr1, $arr2);
 print_r($merged);
 echo"\n";

// Array replace
 $base = array("apple", "banana", "cherry");
 $replacements = array(0 => "apricot", 2 => "date");
 $replaced = array_replace($base, $replacements);
 print_r($replaced);
 echo"\n";


 //Array flip
 $input = array("a" => 1, "b" => 2, "c" => 3);
 $flipped = array_flip($input);
 print_r($flipped);

// Array change key case
 $input = array("First" => 1, "SecONd" => 4);
 $result = array_change_key_case($input, CASE_LOWER);
 print_r($result);
 echo"\n";

// Array column
$records = array(
    array('id' => 2135, 'first_name' => 'John', 'last_name' => 'Doe'),
    array('id' => 3245, 'first_name' => 'Sally', 'last_name' => 'Smith'),
    array('id' => 5342, 'first_name' => 'Jane', 'last_name' => 'Jones')
);
$firstNames = array_column($records, 'first_name');
print_r($firstNames);