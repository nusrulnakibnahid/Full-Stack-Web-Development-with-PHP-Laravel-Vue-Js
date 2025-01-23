<?php
$numbers = range(40,72);
print_r($numbers);
echo count($numbers);
echo "\n";


//find random number from the array:
$randomNumber = mt_rand(0, count($numbers));
echo $randomNumber;
echo "\n";

//another way to find random number from the array:
echo $numbers[$randomNumber];
echo "\n";



//another example to the array:
$luck = $numbers[$randomNumber];
if($luck % 2 == 0){
    echo "Head";
}else{
    echo "Tail";
}
echo "\n";

//shuffle the array:
shuffle($numbers);
print_r($numbers);
echo "\n";
$randomNumber = $numbers[3];
echo $randomNumber;