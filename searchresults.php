<?php 
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

        <div class="level1 resultbox">
            <h1>Junior College</h1>
            <h4>Lorem ipsum</h4>
        </div>

        <div class="level2 resultbox">
            <h1>Bachelors Degree/Diploma</h1>
            <h4>Lorem ipsum</h4>
        </div>

        <div class="level3 resultbox">
            <h1>Masters Degree</h1>
            <h4>Lorem ipsum</h4>
        </div>

        <div class="level4 resultbox">
            <h1>Relevent courses</h1>
            <h4>Lorem ipsum</h4>
        </div>

        <div class="recommend">
            <h4>You might also be interested in</h4>
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit.</p>
        </div>
    </div>

</body>
</html>

