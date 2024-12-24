<?php

class Father {
    public $land = "I have 100 acore of land";
    
    public function bike () {
        echo "I have a bike";
    }

}

/*
$objFather = new Father;

$objFather->bike();
*/



//Extends method
class Son extends Father {

    public function Car(){
        echo "I am son and i have a car";
    }

}
$objSon = new Son();
$objSon->bike();
echo"\n";
echo $objSon->land;

