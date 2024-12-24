<?php

class Father {
    public $land = "I have 100 acore of land <br>";


    public function __destruct(){
        echo "500debt <br>";
    }
    


    public function bike () {
        echo "I have a bike <br>";
    }

}



class Son extends Father {

    public function __construct(){
        echo "I am son and i have 500 dept <br>";
    }

    public function Car(){
        echo "I am son and i have a car";
    }

}

$objSon = new Son();
$objSon->bike();
echo"\n";
echo $objSon->land;

