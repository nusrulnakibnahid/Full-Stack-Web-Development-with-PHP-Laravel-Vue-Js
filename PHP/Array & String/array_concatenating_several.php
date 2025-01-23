<?php
$fruits = array('apple', 'banana', 'orange', 'plum', 'dates', 'mango');
$random = array("a"=>12, "b"=>45, "c"=>34, "d"=>22, "e"=>77, "f"=>31, "g"=>12);


$newFruits1 = array_slice($fruits, 0,3);
$newFruits2 = array_slice($fruits, 3,null, true);
$newFruits = array_merge($newFruits1, $newFruits2);
print_r($newFruits);
print_r($newFruits1);
print_r($newFruits2);


$newFruitsPlus = $newFruits1 + $newFruits2;
print_r($newFruitsPlus);

$r1 = array_slice($random, 0,3);
$r2 = array_slice($random, 3,null, true);
$r3 = array("j"=>100, "k"=>200);


$randomData =  array_splice($random, 2,2,array("x"=>100, "y"=>200));
$randomDataCorrectWay = $r1 + $r3 + $r2;
print_r($randomData); 
print_r($randomDataCorrectWay);