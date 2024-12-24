<?php

class Father {
    public $land = "I have 100 acore of land";
    
    public function bike () {
        echo "I have a bike";
    }

    static function house () {
        echo "3 house <br>";
    }

}


class Son extends Father {

    public function Car(){
        echo "I am son and i have a car";
    }

}


Son::house();
Father::house();

