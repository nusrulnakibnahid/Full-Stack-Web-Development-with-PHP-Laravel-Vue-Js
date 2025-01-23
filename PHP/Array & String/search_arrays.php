<?php
$fruits = array('a'=>'apple', 'b'=>'banana', 'f'=>'orange', 'plum', 'dates', 'mango');
$numbers = array(12, 45, 34, 22, 77, 31, 12);


// search for a value in the array
if(in_array(34, $numbers)){

    echo "Value found in the array";
}else{
    echo "Value not found in the array";
}

echo "\n";

//Search position
$position = array_search(34, $numbers);
echo $position . "\n";

//Search key
$key = array_search('b', $fruits);
if(key_exists($key, $fruits)){
    echo "Key found in the array";
}else{
    echo "Key not found in the array";
}
