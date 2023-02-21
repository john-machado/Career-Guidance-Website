<?php
include 'dbconn.php';
$sqlid = $_POST["unfollow"];
$sql = "DELETE FROM social WHERE id='".$sqlid."'";
$result = $connect->query($sql);
header("Location: following.php");
?>