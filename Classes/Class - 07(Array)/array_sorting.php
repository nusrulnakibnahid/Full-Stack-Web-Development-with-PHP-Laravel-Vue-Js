<?php
// Sorting an array (Ascending order)
$numbers = array(3, 1, 4, 1, 5);
sort($numbers);
print_r($numbers);

// Decreasing order
$numbers = array(3, 1, 4, 1, 5);
rsort($numbers);
print_r($numbers);

// Associative array (Ascending order)
$fruit = array("key1" => "lemon", "key2" => "orange", "key3" => "banana");
asort($fruit);
print_r($fruit);

// Associative array Decreasing order
$fruit = array("key1" => "lemon", "key2" => "orange", "key3" => "banana");
arsort($fruit);
print_r($fruit);

// Associative array Key sort (Ascending order)
$fruit = array("d" => "lemon", "a" => "orange", "b" => "banana");
ksort($fruit);
print_r($fruit);

// Associative array Key sort (Decreasing order)
$fruit = array("d" => "lemon", "a" => "orange", "b" => "banana");
krsort($fruit);
print_r($fruit);

// Natural Order Algorithm Sort
$files = array("img1.png", "img10.png", "img12.png", "img2.png");
natsort($files);
print_r($files);

// Natural Order Sort (Case-Insensitive)
$files = array("Img1.png", "img12.png", "IMG2.png", "img10.png");
natcasesort($files);
print_r($files);

// uasort (Sorting by values with custom comparator)
$people = array("Peter" => 35, "Jack" => 32, "Mary" => 28);
function ageComparator($a, $b) {
    return $a - $b;
}
uasort($people, 'ageComparator');
print_r($people);

// Fixing the incorrect uksort usage
// Sorting by keys with custom comparator
$people = array("Peter" => 35, "Jack" => 32, "Mary" => 28);
function keyComparator($a, $b) {
    return strcmp($a, $b); // Compare keys alphabetically
}
uksort($people, 'keyComparator');
print_r($people);
?>
