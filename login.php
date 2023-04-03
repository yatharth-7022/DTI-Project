<?php
//This script will handle login
session_start();

// check if the user is already logged in
if(isset($_SESSION['Username']))
{
    header("location: welcome.php");
    exit;
}
require_once "config.php";

$Username = $password = "";
$err = "";

// if request method is post
if ($_SERVER['REQUEST_METHOD'] == "POST"){
    if(empty(trim($_POST['Username'])) || empty(trim($_POST['password'])))
    {
        $err = "Please enter Username + password";
    }
    else{
        $Username = trim($_POST['Username']);
        $password = trim($_POST['password']);
    }


if(empty($err))
{
    $sql = "SELECT id, Username, password FROM users WHERE Username = ?";
    $stmt = mysqli_prepare($conn, $sql);
    mysqli_stmt_bind_param($stmt, "s", $param_username);
    $param_username = $Username;
    
    
    // Try to execute this statement
    if(mysqli_stmt_execute($stmt)){
        mysqli_stmt_store_result($stmt);
        if(mysqli_stmt_num_rows($stmt) == 1)
                {
                    mysqli_stmt_bind_result($stmt, $id, $Username, $hashed_password);
                    if(mysqli_stmt_fetch($stmt))
                    {
                        if(password_verify($password, $hashed_password))
                        {
                            // this means the password is corrct. Allow user to login
                            session_start();
                            $_SESSION["Username"] = $Username;
                            $_SESSION["id"] = $id;
                            $_SESSION["loggedin"] = true;

                            //Redirect user to welcome page
                            header("location: welcome.php");
                            
                        }
                    }

                }

    }
}    


}


?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Creative Colorlib SignUp Form</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>

<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />

<link href="//fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,700,700i" rel="stylesheet">
<link rel="stylesheet" href="styles.css">
</head>
<body>
    
</body>
</html>
<!DOCTYPE html>
<html>

<body>
	<!-- main -->
	<div class="main-w3layouts wrapper">
		<h1>SIGN IN</h1>
		<div class="main-agileinfo">
			<div class="agileits-top">
				<form action="" method="post">
					<input class="text" type="text" name="Username" placeholder="Username" required="">
					<input class="text" type="password" name="password" placeholder="Password" required="">
					<div class="wthree-text">
						<label class="anim">
							<input type="checkbox" class="checkbox" required="">
							<span>I Agree To The Terms & Conditions</span>
						</label>
						<div class="clear"> </div>
					</div>
					<input type="submit" value="SIGN IN">
				</form>
				<p>Don't have an Account? <a href="#"> SignUp</a></p>
			</div>
		</div>
		<!-- copyright -->
		<div class="colorlibcopy-agile">
			<p>© 2018 Colorlib Signup Form. All rights reserved | Design by <a href="https://colorlib.com/" target="_blank">Colorlib</a></p>
		</div>
		<!-- //copyright -->
		<ul class="colorlib-bubbles">
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
		</ul>
	</div>
	<!-- //main -->
</body>
</html>