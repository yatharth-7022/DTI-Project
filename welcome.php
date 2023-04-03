<?php

session_start();

if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {
  header("location: login.php");
 
}


?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
 <link rel="stylesheet" href="welcomeStyle.css">
 <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Kanit&family=M+PLUS+1&display=swap" rel="stylesheet">
</head>

<body data-spy="scroll" data-target="#navbar-example">


  <div class="wrapper">

    <nav class="nav__wrapper" id="navbar-example">
      <ul class="nav">

        <li role="presentation" class="active">
          <a href="#section1">
            <span class="nav__counter">01</span>
            <h3 class="nav__title">Intro</h3>
            <p class="nav__body"> Scroll down to access the functions, or click on a number in the nav.</p>
          </a>
        </li>

        <li role="presentation">
          <a href="#section2">
            <span class="nav__counter">02</span>
            <h3 class="nav__title">Section 2 Title</h3>
            <p class="nav__body">Sed sit amet justo sed odio tempus tempus. Vestibulum sed varius mi, sit amet
              condimentum lacus.</p>
          </a>
        </li>

        <li role="presentation">
          <a href="#section3">
            <span class="nav__counter">03</span>
            <h3 class="nav__title">Section 3 Title</h3>
            <p class="nav__body">Sed sit amet justo sed odio tempus tempus. Vestibulum sed varius mi, sit amet
              condimentum lacus.</p>
          </a>
        </li>

        <li role="presentation">
          <a href="#section4">
            <span class="nav__counter">04</span>
            <h3 class="nav__title">Section 4 Title</h3>
            <p class="nav__body">Sed sit amet justo sed odio tempus tempus. Vestibulum sed varius mi, sit amet
              condimentum lacus.</p>
          </a>
        </li>

        <li role="presentation">
          <a href="#section5">
            <span class="nav__counter">05</span>
            <h3 class="nav__title">Section 5 Title</h3>
            <p class="nav__body">Sed sit amet justo sed odio tempus tempus. Vestibulum sed varius mi, sit amet
              condimentum lacus.</p>
          </a>
        </li>

        <li role="presentation">
          <a href="#section6">
            <span class="nav__counter">06</span>
            <h3 class="nav__title">Section 6 Title</h3>
            <p class="nav__body">Sed sit amet justo sed odio tempus tempus. Vestibulum sed varius mi, sit amet
              condimentum lacus.</p>
          </a>
        </li>

      </ul>
    </nav>

    <section class="section section1" id="section1">
      <div class="box">
        <?php echo "Welcome " . $_SESSION['Username']."🖐️" ?>
      </div>


    </section>

    <section class="section section2" id="section2">
      <a style="color:white;text-decoration:none" href="maps.html">Maps</a>
    </section>

    <section class="section section3" id="section3">
    <a style="color:white;text-decoration:none"  href="qrScanner.html">QR Scanner</a>

    </section>
    <section class="section section4" id="section4">
      <a style="color:white;text-decoration:none" href="leaderboard.html">LeaderBoard</a>
    </section>

    <section class="section section5" id="section5">
      <a style  ="color:white;text-decoration:none" href="coupons.html">Coupons!</a>
      
    </section>

    <section class="section section6" id="section6">
      <div class="logout_box">
        <a href="logout.php" class="lo_button">
          LOG OUT
          <img class="logout-img" src="images/126467.png" alt="no preview">
        </a>
      </div>
    </section>
  </div>
  <script src="welcome.js"></script>
</body>

</html>