<?php

//Array deep copy or copy by value
$person = [

    "fname"=> "Hello",
    "lname"=> "World",
];

$newPerson = $person;
$newPerson["lname"] = "Bhai";


print_r($person);
print_r($newPerson);



//Array shallow copy or copy by reference
function printData(&$person){

    $person['fname'] = "Changed";
    print_r($person);

}

printData($person);
print_r($person);


?>