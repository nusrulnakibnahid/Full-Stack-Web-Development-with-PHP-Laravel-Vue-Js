<?php

class Father {
    public $land = "I have 100 acres of land <br>";

    public function __construct() {
        echo "I am the father, and I have $this->land";
    }

    public function __destruct() {
        echo "I have 500 debt <br>";
    }

    public function bike() {
        echo "I have a bike <br>";
    }

    public function sum() {
        return (10 + 20);
    }
}

class Son extends Father {

    public function __construct() {
        echo "I am the son, and I have 500 debt <br>";
        parent::__construct(); // Call the parent's constructor explicitly
    }

    public function car() {
        echo "I am the son, and I have a car <br>";
    }

    public function bajarCalculation() {
        $sumResultFromFather = parent::sum();
        echo "Bajar calculation result: " . ($sumResultFromFather * 34) . "<br>";
    }
}

$obj = new Son();
$obj->bajarCalculation();

?>
