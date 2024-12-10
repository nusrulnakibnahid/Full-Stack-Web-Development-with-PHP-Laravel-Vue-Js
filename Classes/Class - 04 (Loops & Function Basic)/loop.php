<?php
//Loops (For, While, Do-while, Foreach)

//For Loop  -> 
//Write 1 to 10
for ($i=1; $i<=10; $i++){
    echo $i ."\n";
}

echo "\n \n \n \n";


//While Loop ->
//Write 1 to 15
$i = 1;
while ($i<= 15){
    echo $i ."\n";
    $i++;
}

echo "\n \n \n \n";



//Do-while Loop ->
//Write 1 to 7
$i = 1;
do{
    echo $i ."\n";
    $i++;
}while ($i<= 7);

echo "\n \n \n \n";



//Foreach Loop ->
$colors = ["Red", "Green", "Yellow", "Blue", "Orange", "Black"];
echo "Total variable: ";
echo count( $colors) . "\n";

/*
here use for loop for understanding: 
for($i=0; $i< count($colors); $i++){
    echo $colors [$i] . "\n";
}

*/

foreach ($colors as $color){
    echo $color ."\n";

}
echo "\n \n ";

//for find index in foreach loop
foreach ($colors as $index => $color){
    echo $index ."-" .$color .  "\n";

}


echo "\n \n \n \n";

//Break & Continue

//Break ->
$number = [1,2,3,4,5];
for ($i=0; $i<=5; $i++){

    if($i==3){
        break;
    }

    echo $i . "\n";
}

echo "\n \n \n \n";


//Continue ->
$number = [1,2,3,4,5];
for ($i=0; $i<=5; $i++){

    if($i==3){
        continue;
    }

    echo $i . "\n";
}

echo "\n";

$number1 = [1,2,3,4,5,6,7,8,9,10];





