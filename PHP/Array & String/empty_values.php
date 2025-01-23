<?php

$name = '' ;

if(isset(($name))){

    echo"Name is set";
}else{
    echo "Name not set";
}

echo"\n \n";


if(empty(($name))){

    echo"Name is empty";
}else{
    echo "Not empty";
}

echo"\n \n \n";


//best way to find empty values:
if (isset($name) && (is_numeric($name)) || $name != ''){

    echo "Number is set and it's not empty";

}else {
    echo "Name is either not set or it's empty";
}




?>