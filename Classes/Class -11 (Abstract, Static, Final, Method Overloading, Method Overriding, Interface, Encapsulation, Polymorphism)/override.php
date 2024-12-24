<?php

class Father {
    public $land = "I have 100 crore of land";

    public function bike() {
        echo "I have a bike";
    }
}

class Son extends Father {
    public function bike() {
        echo "I sold the bike and made a house";
    }
}

$objSon = new Son();
$objSon->bike();

?>
