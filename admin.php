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

      <div class="loginbox" style="justify-content:flex-start;margin-left:20px;">
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post" class="loginform" onsubmit="return verifyPassword()">
            <h2>Enter data to search database</h2>
            <label for="jnrcollege">Junior College Field</label>
            <div class="select">
                <select name="jnrcollege" id="jnrclg" autofocus>
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
            <label for="courses">Other courses</label>
            <input type="text" name="course">
            <label for="similar">Similar courses</label>
            <input type="text" name="similar">
        <div class="login-buttons">
            <button type="submit" class="loginbtn">Save</button>
        </div>
        </form>
      </div>

</body>
</html>