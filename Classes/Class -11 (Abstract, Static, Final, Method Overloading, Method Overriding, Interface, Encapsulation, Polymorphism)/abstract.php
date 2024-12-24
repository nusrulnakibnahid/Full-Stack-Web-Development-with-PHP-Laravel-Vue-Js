<?php

abstract class Father {
    public $land = "I have 100 acore of land";
    
    public function bike () {
        echo "I have a bike";
    }

}


//Extends method
class Son extends Father {


}

/*
$objFather = new Father();
$objFather->bike();
*/


$objSon = new Son();
$objSon ->bike();