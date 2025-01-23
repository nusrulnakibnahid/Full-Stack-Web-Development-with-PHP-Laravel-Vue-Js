<?php
$color = array(122,233,65);

/*
$red = $color[0];
$green = $color[1];
$blue = $color[2];
*/


list($red, $green, $blue) = $color;
echo $blue;
echo "\n";

$student = array('Fname', 'Lname', 'Email', 'Phone');
list($Fname, $Lname, $Email, $Phone) = $student; //also use this: array('Fname', 'Lname', 'Email', 'Phone');
echo $Phone;

?>