<?php
$fruits = array('apple', 'banana', 'orange', 'plum', 'dates', 'mango');
$random = array("a"=>12, "b"=>45, "c"=>34, "d"=>22, "e"=>77, "f"=>31, "g"=>12);


// Extracting slices from the fruits array
$newFruits = array("jackfruit", "grapes");
$someFruits = array_splice($fruits, -5,2, $newFruits);
print_r($someFruits);
print_r($fruits);