<?php
$randomStrings = ["Apple", 
                  "banana", 
                  "Apricot", 
                  "grape", 
                  "avocado", 
                  "Mango", 
                  "almond"
                ];


$filteredArray = array_filter($randomStrings, function($str) {


    return stripos($str, 'A') === 0;
    
});



$uppercaseArray = array_map('strtoupper', $filteredArray);

print_r($uppercaseArray);
?>
