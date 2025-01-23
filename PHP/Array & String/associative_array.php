<?php

//Associative array
$foods = [
    'vegetables' => 'brocoli, carrot, capsicum',
    'fruits' => 'orange, apple, banana',
    'drinks' => 'walter, milk, coke'
];


//add item
$foods['drinks'] = $foods['drinks'].",orange juice";


echo $foods['vegetables'];
echo "\n \n";

//foreach is the best loop key for php array
foreach ($foods as $key=>$value){

    echo $key . " = " . $value ."\n";
     
}
echo "\n \n";



//build in function : $keys = array_keys($xyz);
$keys = array_keys($foods);
print_r($keys);

//for array keys value find:
$keys = array_values($foods);
print_r($keys);

echo "\n \n";


//using for loop
$keys = array_keys($foods);
for ($i= 0; $i<count($keys); $i++){

    $key = $keys[$i];
    echo $foods[$key] ."\n";
}




?>