<?php

include 'dbconn.php';

$username =$_POST["username"];
$password =$_POST["password"];
$confirm =$_POST["confirm"];
$fname =$_POST["fname"];
$lname =$_POST["lname"];

echo $username .'<br>';
echo $password .'<br>'; 
echo $confirm .'<br>';


?>