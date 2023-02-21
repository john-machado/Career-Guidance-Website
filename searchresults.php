<?php 
    include 'dbconn.php';
    $query =$_POST["query"];
    echo $query;
    $sql = "SELECT * FROM career WHERE career='".$query."'";
    $result = $connect->query($sql);
    $row = $result->fetch_assoc();
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/results.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/responsive-style.css">
    <!-- Fontawesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha512-Fo3rlrZj/k7ujTnHg4CGR2D7kSs0v4LLanw2qksYuRlEzO+tcaEPQogQ0KaoGN26/zrn20ImR1DfuLWnOo7aBA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Document</title>
</head>
<body>
    <!-- Navbar -->
    <div id="navbar">

        <ul class="nav-list">
          <li class="nav-element"><a href="index.html" class="nav-link">Home</a></li>
          <li class="nav-element"><a href="#" class="nav-link">About</a></li>
          <li class="nav-element"><a href="#" class="nav-link">Social</a></li>
        </ul>
  
        <div class="login-button">
          <a href="login.html">Login</a>
        </div>
        
    </div>

    <!-- Searchbar -->
    <div class="searchbox">
        <form action="searchresults.php" method="post" class="search">
          <div class="searcharea-results">
            <input type="text" name="query" id="searchbar-results" placeholder="Search">
            <button type="submit" class="searchbtn-results"><i class="fa-solid fa-chevron-right"></i></button>
          </div>
        </form>
    </div>

    <div class="searchresults">

<?php 
    if ($result !== false && $result->num_rows > 0){
?>

        <div class="level1 resultbox">
            <h1>Junior College</h1>
            <h2><?php echo $row["juniorcollege"] ?></h2>
        </div>

        <div class="level2 resultbox">
            <h1>Bachelors Degree/Diploma</h1>
            <h2><?php echo $row["degree"] ?></h2>
        </div>

        <div class="level3 resultbox">
            <h1>Masters Degree</h1>
            <h2><?php echo $row["masters"] ?></h2>
        </div>

        <div class="level4 resultbox">
            <h1>Relevent courses</h1>
            <h2><?php echo $row["other"] ?></h2>
        </div>

        <div class="recommend">
            <h2>You might also be interested in <br> <?php echo $row["similar"] ?></h2>
            <p></p>
        </div>

<?php        
    } else {
      echo "<div class='level4 resultbox'>
              <h1>Currently no results available</h1>
            </div>";
    }
?>
    </div>

    <br>
    <br>
</body>
</html>

