<?php
$string = "Hello, World";
echo $string[0] . "\n"; 
echo $string[-5] . "\n";
$length = strlen($string) .  "\n";
echo substr ($string, $length-3) . "\n";
echo PHP_EOL;
echo substr ($string, -7, 5);