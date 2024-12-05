<?php

echo"Enter a number: ";
$number = (int)readline();

if($number <0){
    echo"Number is Negative";
}else if ($number>0){
    echo"Number is Positive";
}else{
    echo "Number is Zero";
}

?>