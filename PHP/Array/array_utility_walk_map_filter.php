<?php
function square($n){
    printf("Square of %d is %d \n", $n, $n * $n);
}

function cube($n){
    return $n * $n * $n;
}

function even($n){
    return $n % 2 == 0;
}

function odd($n){
    return $n % 2 == 1;
}

// Define the $numbers array
$numbers = array(1, 2, 3, 4, 5, 6, 7, 8, 9, 10);

// Apply the cube function to all elements in $numbers
$newArray = array_map('cube', $numbers);

// Filter even and odd numbers from the $numbers array
$evenNumbers = array_filter($numbers, 'even'); // callback function
$oddNumbers = array_filter($numbers, 'odd'); // callback function

// Print even and odd numbers
print_r($evenNumbers);
print_r($oddNumbers);

// Define the $persons array
$persons = array('sujon', 'kabir', 'sabab', 'selim', 'roni', 'jamal', 'kamal', 'sayma');

// Filter names starting with 's'
function filterByS($name){
    return $name[0] == 's';
}
$newPersons = array_filter($persons, 'filterByS');

// Print the filtered persons and other arrays
print_r($newPersons);
print_r($numbers);
print_r($newArray);
?>