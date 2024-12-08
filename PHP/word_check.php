//Question:Write a PHP script to check if a given string contains the word "PHP". If it does, print "The string contains PHP."


<?php
// Get user input
echo "Enter a string: ";
$inputString = readline(); // Read input from the user

// Check if the word "PHP" exists in the string
if($inputString == "php"){
    echo "The string contains PHP";
}else{
    echo "The string does not contain PHP";
}
?>
