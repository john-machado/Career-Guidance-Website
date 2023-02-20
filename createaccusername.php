<?php
    include 'dbconn.php';
    $_SESSION["created"] = false;
            
    $_SESSION["errormsg"] = "";
    $_SESSION["error"]="";

    $username =$_POST["username"];
    $password =$_POST["password"];
    $confirm =$_POST["confirm"];
    $fname =$_POST["fname"];
    $lname =$_POST["lname"];
    
    $sql="SELECT username from users";
    // echo $sql . '<br>';
    $result = $connect->query($sql);
    $fetched = $result->fetch_assoc();
    
    // $msg =" ";
    foreach ($fetched as $key=>$item){
        if ($username===$item) {
            $_SESSION["error"] = "username";
        }
        else {
        $_SESSION["created"] = true;
        setcookie("login",true);
        header ('Location:myaccount.php');
        echo '<script type="text/javascript">
                  alert("Account created");
                </script>';
        
          $sql = "INSERT INTO users (username, password, fname, lname) VALUES ('".$username."',"."'".$password."',"."'".$fname."',"."'".$lname."') ";

          if ($connect->query($sql) === TRUE) {
            echo "New record created successfully";
          } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
          }
      
        }

    }


    setcookie("username",$username);
    setcookie("password",$password);
    setcookie("fname",$fname);
    setcookie("lname",$lname);



    // $_COOKIE["username"]=$username;
    // $_COOKIE["password"]=$password;
    // $_COOKIE["fname"]=$fname;
    // $_COOKIE["lname"]=$lname;



    

    // echo $username .'<br>';
    // echo $password .'<br>'; 
    // echo $confirm .'<br>';
    // $sql= "INSERT INTO users (username, password, fname, lname) VALUES ('".$username."'".$password."'".$fname."'".$lname."') ";
    // $result = $connect->query($sql);


?>

<?php

if ($_SESSION["error"]=="") {
    $_SESSION["errormsg"] = "";
}
elseif ($_SESSION["error"]=="username"){
    $_SESSION["errormsg"] = "Username is taken";
}

// header('Location: createacc.html');

?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/responsive-style.css">
    <link rel="stylesheet" href="css/login.css">
    <!-- Fontawesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha512-Fo3rlrZj/k7ujTnHg4CGR2D7kSs0v4LLanw2qksYuRlEzO+tcaEPQogQ0KaoGN26/zrn20ImR1DfuLWnOo7aBA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Create Account</title>

    <script>  
      function verifyPassword() {  
        var pw = document.getElementById("password").value;  
        var pwconfirm = document.getElementById("confirm").value;
        if(pw!=pwconfirm){
          document.getElementById("message").innerHTML="Passwords do no match";
          return false;
        }
      } 

      console.log("hello")
    </script>

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

      <div class="loginbox">
        <form action="createaccusername.php" method="post" class="loginform" onsubmit="return verifyPassword()">
            <h1>Create Account</h1>

            <!-- <div class="selectpfp">
                <label for="pfp">Change avatar</label>
                <div class="pfp">
                    <i class="fa-solid fa-repeat"></i>
                    <img src="C:\xampp\htdocs\Default_pfp.png" alt="pfp">
                </div>
            </div> -->
            <label for="username">Username</label>
            <input type="text" name="username" id="username" value="<?php echo $username; ?>" required>
            <div class="name">
              <label for="firstname">First Name</label>
              <label for="lastname">Last Name</label>
              <input type="text" name="fname" id="fname" value="<?php echo $fname; ?>">
              <input type="text" name="lname" id="lname" value="<?php echo $lname; ?>">
            </div>
            <label for="password" >Password</label>
            <input type="password" name="password" id="password" minlength="8" value="<?php echo $password; ?>">
            <label for="confirm">Confirm password</label>
            <input type="password" name="confirm" id="confirm" minlength="8" value="<?php echo $password; ?>">
            <label for="error" id="message" class="error">
                <?php echo $_SESSION["errormsg"]; ?>
            </label>
            <div class="login-buttons">
                <button type="submit" class="loginbtn" value="create">Sign Up</button>
            </div>
        
            <div class="create-acc">
                <h4 class="new-account">Already have an account?</h4>
                <a href="login.html" class="newacc">Login</a>
              </div>
        </form>
      </div>

</body>
</html>




