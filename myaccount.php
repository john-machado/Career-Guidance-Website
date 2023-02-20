<?php
  if($_COOKIE["login"]==false){
    header("Location: nologin.php");
  }

  if(isset($_POST['logout'])) {
    setcookie("username", "", time()-3600);
    setcookie("password", "", time()-3600);
    setcookie("fname", "", time()-3600);
    setcookie("lname", "", time()-3600);
    setcookie("login", false, time()-3600);
    header("Location:index.html");
    $loginmsg = "You are not signed in";
  }
  else{
    $loginmsg="You are currently logged in as " . $_COOKIE["username"];
  }

  
?>


<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Css -->
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/responsive-style.css">
    <link rel="stylesheet" href="css/login.css">
    <title>Login</title>
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
          <a href="createacc.php">Sign Up</a>
        </div>
        
      </div>

      
      <div class="loginbox">
        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" class="loginform">
            <h3><?php echo $loginmsg;?> </h3>
            <h1>Account</h1>
            <!-- <label for="username">Username</label>
            <input type="text" name="username" value="<?php echo $_COOKIE["username"];?>" readonly disabled> -->
            <div class="name">
                <label for="firstname">First Name</label>
                <label for="lastname">Last Name</label>
                <input type="text" name="fname" id="fname" value="<?php echo $_COOKIE["fname"];?>" required readonly disabled>
                <input type="text" name="lname" id="lname" value="<?php echo $_COOKIE["lname"];?>" required readonly disabled>
            </div>
            <label for="profession">Profession</label>
            <input type="text" name="profession">
            <!-- <label for="board">Highschool board</label>
            <input type="text" name="board"> -->
            <label for="jnrcollege">Junior College or Diploma</label>
            <input type="text" name="jnrcollege">
            <label for="degree">Degree</label>
            <input type="text" name="degree">
            <label for="other">Other courses</label>
            <input type="text" name="other">
            <div class="login-buttons" style="display:flex; justify-content:center; align-items:center">
                <button type="submit" class="loginbtn" name="save" value="Save" style="margin:10px 20px;">Save</button>
                <button type="submit" class="logoutbtn" name="logout" value="Logout">Logout</button>
                <a href="index.html" class="newacc" style="margin:10px 20px;">Skip for now</a>
            </div>
        </form>
      </div>

        
</body>
</html>