<?php

$person = [

    'fname'=> 'Hello',
    "lname"=> "World"
];


print_r($person);

//from removing data for associative array by using (unset) function
unset($person["lname"]);
print_r($person);


?>