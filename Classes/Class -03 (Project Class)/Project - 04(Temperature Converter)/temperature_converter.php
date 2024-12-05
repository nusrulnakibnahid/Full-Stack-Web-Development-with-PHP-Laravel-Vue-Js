<?php

define("FACTOR","9/5");
define("OFFSET","32");

echo"Enter a temperature value: ";
$inputTemperature = (float)readline();

echo "Convert to (1: Fahrenheit, 2:Celsius): "; 
$choice = (int) readline();

switch( $choice ){
    case 1:
        $result = $inputTemperature  * FACTOR + OFFSET;
        echo"Temperature in Fahrenheit: $result";
        break;


    case 2:
        $result = ($inputTemperature - OFFSET) / FACTOR;
        echo"Temperature in celsius: $result";
        break;

    default:
        echo "Invalid choice";    
}

?>


