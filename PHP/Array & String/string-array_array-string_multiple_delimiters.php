<?php


$vegetables = 'carrot, capsicum, brocoli';

//string to array covert
$vegetables = explode(', ', $vegetables);
var_dump($vegetables);

echo "\n \n";


//array to string
$vegetablesString = join(', ', $vegetables);
echo $vegetablesString;

echo "\n \n";


echo count($vegetables);



?>