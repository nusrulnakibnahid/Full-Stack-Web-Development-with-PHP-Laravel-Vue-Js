<?php
$n = 12;
$students = array(

    "karim",
    "rahim",
    34,
    "nahid"

);

echo $students [3];
echo"\n";
echo count($students);
echo"\n";


$n = count($students);
for ($i = 0; $i < $n; $i++){
    echo $students[$i] . "\n";
}