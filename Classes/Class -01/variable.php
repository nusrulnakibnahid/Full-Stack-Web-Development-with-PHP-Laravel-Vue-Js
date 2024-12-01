<?php
$friend = "Nahid";
echo $friend;


//Varriable types/Data Types (String, Integer, Float/Double, Boolean, Array, Object, Null)

//String
$name = "Jhon";
$name = 'Doe';
echo $name;

//Integer
$number = 100;
echo $number;

//Float/Double
$price = 34.67;
echo $price;

//Boolean
$isAdmin = true;
$isPending = false;
echo $isAdmin;

//Array
$fruits = ["apple", "banana", "mango", "pineapple"];
$fruits = array("apple", "banana", "mango", "pineapple" );


//Object
class person{
    public $name;
    public $age;
}

$person1 = new person();
$person1->name = "Nahid";
$person1->age = 20;


//Null 
$name = null;


//Checking variable types
$number = 100;
echo gettype($number);


//Find variable memory location
class test{
    public $name = "Nahid";
}

$obj = new test();
echo spl_object_id($obj);


//Scope (Local, Global, Super global)
//Local scope:
function greet(){
    $message = "Hi Nahid";
    echo $message;
}
greet();

//Global scope:
$name = "Nahid";

function greet1(){
    global $name;
    echo "Hello" .  $name;
}

greet1();
echo "Global" .  $name;


//Super global: ($_GET, $_POST, $_GET, $_SERVER, $_REQUEST, $_SESSION)




//Constant
define("SITE_NAME","Chaldal");
echo SITE_NAME;


//Class constant
class Test1{
    const PI = 3.14;
}
echo Test1::PI;

 

//Comments: (Single line comment(//),Multiple line comment(/* */) )