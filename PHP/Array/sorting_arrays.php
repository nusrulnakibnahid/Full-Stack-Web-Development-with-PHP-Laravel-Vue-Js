<?php
$fruits = array('a'=>'apple', 'b'=>'banana', 'f'=>'orange', 'plum', 'dates', 'mango');
$numbers = array(12, 45, 34, 22, 77, 31, 12);
asort($fruits); //others short: rsort: Descending values , ksort: Ascending keys , arsort: Descending values , krsort: Descending keys
print_r($fruits) ."\n";



$random = array("apple","Apple","banana","Banana","orange","Orange","plum","Plum","dates","Dates","mango","Mango");
sort($random, SORT_STRING); //sort($random, SORT_STRING | SORT_FLAG_CASE);
print_r($random) ."\n";

for($i=0; $i<count($numbers); $i++){
    echo $numbers[$i]."\n";
}
echo "\n";

foreach($fruits as $fruit){
    echo $fruit."\n";
}