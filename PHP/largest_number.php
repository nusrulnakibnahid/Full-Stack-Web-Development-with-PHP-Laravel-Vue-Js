<?php

echo "enter Number 1:";
$inputNumber1 = (int) readline();

echo "Enter Number 2:";
$inputNumber2 = (int) readline();


if ($inputNumber1 > $inputNumber2) {
    echo"Number 1 is largest number";
}elseif ($inputNumber1 < $inputNumber2) {
    echo "Number 2 is the largest number";
}else{
    echo "Number 1 and Number 2 is equal";
} 

?>