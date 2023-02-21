<?php
include 'dbconn.php';

$follow=$_POST["searchuser"];
echo $_COOKIE["username"];
$sql1 = "SELECT fname,lname FROM users WHERE username='".$follow."'";
$result = $connect->query($sql1);
$sqladd = "INSERT INTO social (follower ,following) VALUES ('".$_COOKIE["username"]."','".$follow."')";
if ($result == TRUE) {
    $result = $connect->query($sqladd);
    header("Location: following.php");
}
else{
    echo "User not found";
    // include 'following.php';
}

?>