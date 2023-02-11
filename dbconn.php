<?php
    $dbhost="localhost";  
    $dbName="test";  
    $user="root";  
    $pass="";
    $conn = mysqli_connect($dbhost,$user,$pass,$dbName);
	 try{  
        echo "<script> console.log('Successfully connected');</script>";
    }  
    catch(Exception $e){  
            die("Connection failed".$e->getMessage());  
    }  
?>