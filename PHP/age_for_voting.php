//Question: Write a PHP script to check if a person is eligible to vote. Assume the minimum age for voting is 18.

<?php
echo"Enter your age: ";
$inputAge = (int) readline();


if ($inputAge < 18){
    echo "You are not accept for voting ";
} else {
    echo "You are ready for voting";
}

?>