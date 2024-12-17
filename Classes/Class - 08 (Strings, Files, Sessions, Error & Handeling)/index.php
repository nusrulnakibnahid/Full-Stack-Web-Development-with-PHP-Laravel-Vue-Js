<?php

$name= "Hello, I'm nahid";

$length = strlen($name);

echo $length;
echo"\n";

//Word count
echo str_word_count($name);
echo"\n";

//Reverse
echo strrev($name);
echo"\n";

//find position
echo strpos($name,"nahid");
echo"\n";


echo substr($name,0, 8);
echo"\n";


//Replace
$stringReplace = str_replace("nahid","php", $name);
echo $stringReplace;
echo"\n";

//Uppercase & Lowercase
echo strtoupper($name). "\n";
echo strtolower($name). "\n";
echo ucwords($name). "\n";

//Trim (space remove)
$firstName = "       Abdur      ";
$firstNameTrim = trim($firstName);
$lastName = "Rahman";

$fullName = "I am $firstName $lastName ";
echo $fullName;
echo"\n";


//Encryption 
$password = "Test@#123";
echo md5($password);
echo"\n";






 