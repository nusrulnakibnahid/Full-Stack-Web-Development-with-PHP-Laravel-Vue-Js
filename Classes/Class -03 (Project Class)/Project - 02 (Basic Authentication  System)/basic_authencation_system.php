<?php

define("USERNAME","admin");
define("PASSWORD","12345");

echo "Enter Username: ";
$inputUsername = readline();


echo"Enter password: ";
$inputPassword = readline();


if ($inputUsername === USERNAME && $inputPassword === PASSWORD){

    echo "Login Successful";

}else{

    echo "Invalid username or password";

}

?>