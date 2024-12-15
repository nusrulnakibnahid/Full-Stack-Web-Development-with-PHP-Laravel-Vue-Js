<?php
//Array Information
$numbers = array(1,2,3,4,5);
echo count($numbers);
echo "\n";



//Sum of array
$numbers = array(1,2,3,4);
echo array_sum ($numbers);
echo "\n";


//Product of an array 
$numbers = array(1,2,3,4);
echo array_product($numbers);
echo "\n";


//Check if array contains is a value
$numbers = array(1,2,3,4);

if(in_array(2, $numbers)){
    echo "Number is here";
}else{
    echo "Numbers is not here";
}
echo "\n";




//Check if array key exists
$assoc = array("First" => "apple", "second" => "Banana");

if(array_key_exists("second", $assoc)){
    echo "key 'second exists in the array";
}
echo "\n";




//Search array for a value
$assoc = array("First" => "apple", "second" => "banana");
$key = array_search("banana", $assoc);
echo $key;



