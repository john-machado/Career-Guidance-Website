<?php

include 'dbconn.php';
// Check connection
// $sqlquery = "INSERT INTO  VALUES
//     ('John', 'Doe', 'john@example.com')";

// $conncheck = $connect->query($sqlquery);
 
// if ($conncheck == TRUE) {
//     echo "record inserted successfully";
// } else {
//     echo "Error: " . $sql . "<br>" . $connect->error;
// }

  $profession = $_POST["career"];
  $jnrclg = $_POST["jnrcollege"];
  $degree = $_POST["degree"];
  $masters = $_POST["masters"];
  $courses = $_POST["course"];
  $similar = $_POST["similar"];
  

  $sql = "INSERT INTO career (career,juniorcollege,degree,masters,other,similar) VALUES ('".$profession."','".$jnrclg."','".$degree."','".$masters."','".$courses."','".$similar."')";
  $result = $connect->query($sql);
  if ($result=== TRUE) {
    echo "New record created successfully";
  } else {
    echo "Error";
  }
  

if($_COOKIE["admin"]==true){
?>


<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/responsive-style.css">
    <link rel="stylesheet" href="css/login.css">
    <title>Create Account</title>

</head>

<body>
    <!-- Navbar -->
    <div id="navbar">

        <ul class="nav-list">
          <li class="nav-element"><a href="index.html" class="nav-link">Home</a></li>
          <li class="nav-element"><a href="#" class="nav-link">About</a></li>
          <li class="nav-element"><a href="following.php" class="nav-link">Social</a></li>
        </ul>
  
        <div class="login-button">
          <a href="login.html">Login</a>
        </div>
        
      </div>

      <div class="loginbox" style="justify-content:flex-start;margin-left:40px;">
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post" class="loginform" onsubmit="return verifyPassword()">
            <h2>Enter data to search database</h2>
            <label for="career">Profession</label>
            <input type="text" name="career" autofocus>
            <label for="jnrcollege">Junior College Field</label>
            <div class="select">
                <select name="jnrcollege" id="jnrclg">
                    <option value="science">Science</option>
                    <option value="arts">Arts</option>
                    <option value="commerce">Commerce</option>
                    <option value="other">Other</option>
                </select>
            </div>
            <label for="degree">Degree</label>
            <input type="text" name="degree">
            <label for="masters">Masters</label>
            <input type="text" name="masters">
            <label for="course">Other courses</label>
            <input type="text" name="course">
            <label for="similar">Similar courses</label>
            <input type="text" name="similar">

            <div class="login-buttons">
                <button type="submit" class="loginbtn" name="save" value="Save">Save</button>
                <button type="submit" class="logoutbtn" name="logout" value="Logout">Logout</button>
            </div>
        </form>
        
      </div>

</body>
</html>

<?php

}
else{
  header("Location: index.html");
}

if(isset($_POST['logout'])) {
  setcookie("username", "", time()-3600);
  setcookie("password", "", time()-3600);
  setcookie("fname", "", time()-3600);
  setcookie("lname", "", time()-3600);
  setcookie("login", false, time()-3600);
  setcookie("admin",false,time()-3600);
  header("Location:index.html");
}
?>
