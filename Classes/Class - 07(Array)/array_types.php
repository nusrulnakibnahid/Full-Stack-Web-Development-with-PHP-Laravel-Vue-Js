<?php

//Index Array
$array1 = array(1,2,3,4,5); //length-1 = last element's index
$array2 = [1,2,3,4,5];
//access array element:
//echo $array1[2];
//echo $array2[0];

//printing array:
/*
print_r($array1);
var_dump($array2);
*/


//Looping through an Index Array
/*
for ($i = 0; $i < count($array1); $i++){
    echo $array2[$i] . "\n";
}
    */

//using foreach:
    /*
    foreach ($array1 as  $value){
        echo $value . "\n";
    }
        */






//Associate Array
$person1 = array(
    "first_name" => "John",
    "last_name"=> "Doe",
);

$person2 = [
    "first_name"=> "Jane",
    "last_name"=> "Doe",
];

/*
print_r($person1);
echo $person1['first_name'] . "\n";
echo $person2['last_name'];
*/


//Looping:
/*

foreach ($person2 as $item){
    echo $item . "\n";
}

*/





//Multidimensional Array

/*
$array3 = array (

    array(1,2,3),
    array(4,5,6),
    array(7,8,9),
);
//print_r( $array3);

echo $array3[0][1] . "\n";
echo $array3[2][1];

*/







//Associative Multidimensional Array

$users = [

    "John" => [
        "email" => "john@me.com",
        "age" => 30
    ],

    "Jan" => [
        "email" => "jan@me.com",
        "age" => 35
    ]

];

//print_r($users ['John']['age']);
//$john = $users["john"];
//print_r($john ["age"]);


foreach ($users as $username => $details){

    //print_r($details);

    echo "Username $username \n";

    foreach ($details as $key => $value){

        echo "$key : $value . \n";
    }


}








