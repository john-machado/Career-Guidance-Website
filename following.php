<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/responsive-style.css">
    <link rel="stylesheet" href="css/following.css">
    <link rel="stylesheet" href="css/results.css">
    <!-- Fontawesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha512-Fo3rlrZj/k7ujTnHg4CGR2D7kSs0v4LLanw2qksYuRlEzO+tcaEPQogQ0KaoGN26/zrn20ImR1DfuLWnOo7aBA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Create Account</title>
</head>
<body>
    <!-- Navbar -->
    <div id="navbar">

        <ul class="nav-list">
          <li class="nav-element"><a href="index.html" class="nav-link">Home</a></li>
          <li class="nav-element"><a href="#" class="nav-link">About</a></li>
          <li class="nav-element"><a href="#" class="nav-link" id="social">Social</a></li>
        </ul>
  
        <div class="login-button">
          <a href="myaccount.php" id="myacc">My Account</a>
          <a href="login.html" id="login">Login</a>
        </div>
        
      </div>

      <div class="main-social">

        <div class="social-nav">
          <ul>
            <li><a href="following.php" class="active-social">Following</a></li>
            <!-- <li><a href="groups.php">Groups</a></li> -->
            <form action="searchusers.php" method="post" class="searchbar">
              <input type="text" name="searchuser" id="searchuser" placeholder="Search username.">
            </form>
          </ul>
        </div>

        <div class="social-list">
                <!-- <div class="username">RandomUser</div> -->
                <?php 
                  include 'dbconn.php';
                  $sql = "SELECT id, follower, following  FROM social WHERE follower='".$_COOKIE["username"]."'";
                  $result = $connect->query($sql);

                  if ($result->num_rows > 0) {
                    // output data of each row
                    while($row = $result->fetch_assoc()) {
                      // echo "id: " . $row["id"]. " - Name: " . $row["follower"]. " " . $row["following"]. "<br>";
                      $unfollow = $row["id"];
                ?>
                <div class="social-list-element">
                  <div class="social-element-left">
                  <a href="">
                    <div class="name"><?php echo $row["following"]; ?></div>
                    <!-- <div class="status"></div> -->
                  </a>
                  </div>
                  <form action="socialupdate.php" method="post" class="social-element-right">
                  <div>
                    <button type="submit" class="remove" name="unfollow" value="<?php echo $row['id'] ?>">Unfollow</button>
                  </div>
                </form>
                <br>
                <?php
                    }
                  } else {
                    echo '<div class="name" style="color:#0e3270">You are not following anyone. Search users above to start following</div>';
                  }
                  $connect->close();

                ?>
              
           
          </div>

  
        </div>
      </div>


      <script type="text/javaScript">
      if (document.cookie !== "") {
          console.log("no cookie");
          // Hide login
          var login = document.getElementById("login");
          login.style.display="none"
      }
      else{
        var myacc = document.getElementById("myacc");
        myacc.style.display="none"
        var social = document.getElementById("social");
        social.style.display="none"

      }
    </script>
      
</body>
</html>