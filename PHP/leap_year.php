//Question: Write a PHP script to determine whether a given year is a leap year.

<?php
echo"Enter year: ";
$inputYear = (int) readline();

if (($inputYear % 4 == 0 && $inputYear % 100 != 0) || $inputYear % 400 == 0){
    echo "Leap year";
}else{
    echo "Not leap year";
}