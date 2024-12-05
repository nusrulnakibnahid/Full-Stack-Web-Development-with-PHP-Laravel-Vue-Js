<?php

define("FACTOR","9/5");
define("OFFSET","32");

echo"Enter a temperature value: ";
$inputTemparature = (float)readline();

echo "Convert to (1: Fehrenheit, 2:Celsius): "; 
$choice = (int) readline();

switch( $choice ){
    case 1:
        $result = $inputTemparature  * FACTOR + OFFSET;
        echo"Temperature in Fahrenheit: $result";
        break;


    case 2:
        $result = ($inputTemparature - OFFSET) / FACTOR;
        echo"Temperature in Celcius: $result";
        break;

    default:
        echo "Invalid choice";    
}

?>


