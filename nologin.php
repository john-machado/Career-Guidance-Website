
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
            <h1 style="text-align:center;">You have not logged into an account.</h1>
            <div class="create-acc">
                <h4 class="new-account">Already have an account?</h4>
                <a href="login.html" class="newacc">Login</a>
            </div>
        </form>
      </div>

</body>
</html>
