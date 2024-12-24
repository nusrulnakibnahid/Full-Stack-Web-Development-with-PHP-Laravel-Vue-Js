<?php

class Father {
    public $land = "I have 100 crore of land";

    final public function bike() {
        echo "I have a bike";
    }
}

class Son extends Father {
    // Son cannot override the bike() method because it is final.
    
    /*
    public function bike(){
        echo "I sold the bike and made a house";
    }
        */
        
}

$objSon = new Son();
$objSon->bike(); // Calls the Father's bike() method
echo "\n";
$objSon->bike(); // Calls the Son's new method

?>
