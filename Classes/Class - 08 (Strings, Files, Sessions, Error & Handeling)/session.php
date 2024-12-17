<?php
session_start();
$_SESSION['username'] = 'Nahid';
$_SESSION['userID'] = '2000233';

echo $_SESSION['username'];
echo "<br>";
echo $_SESSION['userID'];

session_unset();
session_destroy();

echo "<br>";
echo "After Destroy";

echo $_SESSION['username'];
?>
