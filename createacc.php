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

$sql="SELECT username from users";
// echo $sql . '<br>';
$result = $connect->query($sql);
$fetched = $result->fetch_assoc();

foreach ($fetched as $key=>$item){
    if ($username==$item) {
        echo 'username taken';
    }
    else{
        echo 'test';
    }
}
// CREATE TABLE `careerguidance`.`users` ( `userid` INT NOT NULL , `username` VARCHAR(30) NOT NULL , `password` VARCHAR(30) NOT NULL , `board` VARCHAR(100) NOT NULL , `jrcollege` VARCHAR(100) NOT NULL , `degree` VARCHAR(100) NOT NULL , `masters` VARCHAR(100) NOT NULL , `additional` VARCHAR(100) NOT NULL , `admin` BOOLEAN NOT NULL , PRIMARY KEY (`userid`)) ENGINE = InnoDB;
// function checkAdmin(){
//     if ($admin=='1') {
//         return true;
//     } else {
//         return false;
//     }

// }

?>