<?php
$age = 20;

echo $age;

//for single condition
if($age >= 18){
    echo "Adult";

}else{
    echo "Minor";
}

echo"<br>";


//for multiple condition

$marks = 565;

if($marks <33){
    echo "F";

}else if($marks<40){
    echo "D";

}else if($marks<50){

    echo "C";

}else if($marks<60){

    echo "B";

}else if($marks<70){

    echo "A-";

}else if($marks<80){

    echo "A";

}else if($marks<=100){
    echo "A";

}else{
    echo "Unknown Grade";
}

echo "<br>";


//Nested if-else

$marksNested = 50;

if($marksNested < 33){
    echo "Fail";
}else{
    if($marksNested < 60){
        echo "Average";
    }else{
        echo "Other";
    }
}

echo"<br> <br>";



//Ternary operator

$age = 10;

/*
if($age>= 18){
    echo "Adult";
}else{
    echo "Minor";
}
*/ 

$minorityCheck = ($age>= 18)?"Adult" : "Minor" ;
echo $minorityCheck;

echo"<br> <br>";


//Switch-case

$weather = "Foggy";

switch($weather){
    case "Sunny" :
        echo "Its a sunny day";
        break;

    case "Cloudy" :
        echo "Its cloudy today";
        break;

    case "Rainy" :
        echo "Its rainy today,Take Umbrella";
        break;  
        
    case "Foggy" :
        echo "Its foggy today";
        break;  
    
    default :
    echo "Unknown Weather";    
}

?>