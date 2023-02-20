<?php

include 'dbconn.php';

$username =$_POST["username"];
$password =$_POST["password"];

// echo $sql . '<br>';
// $dbhost="localhost";  
// $dbName="careerguidance";  
// $user="root";  
// $pass="";
// $connect = mysqli_connect($dbhost,$user,$pass,$dbName);
//  try{  
    //     echo "<script> console.log('Successfully connected');</script>";
    // }  
    // catch(Exception $e){  
        //     die("Connection failed".$e->getMessage());  
        // }
        
$sql= "SELECT password, admin, fname, lname from users WHERE username='".$username."'";
$result = $connect->query($sql);

$row = $result->fetch_assoc();

if ($password == $row["password"]) {
    setcookie("username",$username);
    setcookie("password",$password);
    setcookie("fname",$row["fname"]);
    setcookie("lname",$row["lname"]);
    setcookie("login",true);
    header('Location: index.html');
}
else{
    include_once 'login.html';
    echo '<script type="text/javascript">
                  alert("Error loggin in");
            </script>';
}

// echo $result;

// while($row = $result->fetch_assoc()) {
//       echo "id: " . $row["password"] ;
//     }


// echo "id: " . $row["password"] ;

// $fetched = $result->fetch_assoc();
// echo $fetched['password'];

// $msg =" ";
// foreach ($fetched as $key=>$item){
//     if ($username===$item) {
//         $_SESSION["error"] = "username";
       
//     }
// }

setcookie("username",$username);
setcookie("password",$password);

?>