<?php
$students = [

    "karim",
    "rahim",
    34,
    "nahid"

];

$students [2] = "Shafiq ";


$n = count($students);
for ($i = 0; $i < $n; $i++){
    echo $students[$i] . "\n";
}
echo"\n \n \n";



//array pop: delete last element 

$students2 = array_pop($students);
$n = count($students);
for ($i = 0; $i < $n; $i++){
    echo $students[$i] . "\n";
}

echo"\n \n";


//array shift : delete element for first element
$student2 = array_shift($students);


$n = count($students);
for ($i = 0; $i < $n; $i++){
    echo $students[$i] . "\n";
}

echo"\n \n";

$students[] = "jamal";
array_push($students, "jamal");
$n = count($students);
for ($i = 0; $i < $n; $i++){
    echo $students[$i] . "\n";
}
echo"\n \n";


//array unshift: add new data to first line
$students[] = "salma";

array_unshift($students, "Salam");
$n = count($students);
for ($i = 0; $i < $n; $i++){
    echo $students[$i] . "\n";
}
