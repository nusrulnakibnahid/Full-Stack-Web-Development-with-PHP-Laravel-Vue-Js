<?php
$number1 = array(12, 45, 34, 22, 77, 31, 12);
$number2 = array(62, 45, 38, 82, 77, 31, 15);



$fruits1 = array('a'=>'apple', 'b'=>'banana', 'f'=>'orange', 'plum', 'dates', 'mango'); 
$fruits2 = array('d'=>'pineapple', 'b'=>'banana', 'i'=>'grapes', 'plum', 'dates', 'mango');


$common = array_intersect($number1, $number2);
print_r($common);
echo "\n";

$commonFruits = array_intersect($fruits1, $fruits2);
print_r($commonFruits);
echo "\n";

$commonFruits = array_intersect_assoc($fruits1, $fruits2);
print_r($commonFruits);
echo "\n";

$diff = array_diff($number1, $number2);
print_r($diff);
echo "\n";

$diffFruits = array_diff($fruits1, $fruits2);
print_r($diffFruits);
echo "\n";

$diffFruits = array_diff_assoc($fruits1, $fruits2);
print_r($diffFruits);