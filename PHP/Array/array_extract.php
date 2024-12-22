<?php
$fruits = array('apple', 'banana', 'orange', 'plum', 'dates', 'mango');

$random = array("a"=>12, "b"=>45, "c"=>34, "d"=>22, "e"=>77, "f"=>31, "g"=>12, "h"=>78);

// Extracting slices from the fruits array
//$someFruits = array_slice($fruits, 2);
//$someFruits = array_slice($fruits, 2, 2);
//$someFruits = array_slice($fruits, -5, -1);
//$someFruits = array_slice($fruits, 3, 3, true);

// Extracting a slice from the random array
$randomData = array_slice($random, 1, -1, true);

print_r($randomData);

?>
