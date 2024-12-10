//Question : Sum of First N Natural Numbers
<?php

echo "Enter a number: ";
$N = (int)readline(); 

$sum = 0;
$i = 1;

while ($i <= $N) {
    $sum += $i;
    $i++;
}

echo "The sum of the first $N natural numbers is: $sum\n";
?>

