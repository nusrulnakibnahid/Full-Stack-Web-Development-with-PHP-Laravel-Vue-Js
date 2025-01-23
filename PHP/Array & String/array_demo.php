<?php
$n = 12;
$students = array(

    "karim",
    "rahim",
    34,
    "nahid"

);
/*
Another way to write array-> 
$students = [

    "karim",
    "rahim",
    34,
    "nahid"

];

*/ 

echo $students [3];
echo"\n";
echo count($students);
echo"\n \n \n";


$n = count($students);
for ($i = 0; $i < $n; $i++){
    echo $students[$i] . "\n";
}

echo"\n \n \n";

for ($i = $n-1; $i >= 0; $i--){
    echo $students[$i] . "\n";
}
