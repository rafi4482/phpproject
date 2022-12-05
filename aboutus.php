<?php
require "dbconfig/config.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DhakaChaka Car Rental</title>
    <link rel="stylesheet" href="myhome.css">
   
</head>
<body>
    <header>
        <div class="logo">
            <p>Dhaka<font color=yellow>Chaka</font></p>
        </div>
        <nav>
            <ul>
                <li><a href="myhome.php">Home</a></li>
                <li><a href="vehicles.php">Vehicles</a></li>
                <li><a href="services.php">Services</a></li>
                <li><a href="aboutus.php">About Us</a></li>
                <li><a href="contact.php">Contact</a></li>
            </ul>
        </nav>
        <div id="login-btn">
          <button class="btn">User login</button>
        <i class="far fa-user"></i>
        </div>
    </header>

    <div class="login-form-container">
    <span class="myhomespan1" id="close-login-form"></span>
    <form action="">
        <h3>user login</h3>
        <label for=""><b>username</b?&nbsp;</label>
        <input type="text" placeholder="username" class="myhomeinput">
        <br>
        <label for=""><b>password</b>&nbsp;</label>
        <input type="password" placeholder="password" class="myhomeinput"> 
        <p>forget your password <a href="#">click here</a></p>
        <input type="submit" value="login now" class="btn_login">
       
        
        <p>don't have an account<a href="registration.php">create one</a></p>
        <br>
        <div class="btn_login">
        <a href="myhome.php">Close</a>
        </div>
       
    </form>
    </div>
    
    
    
   
  
          <div class="section">
		<div class="container">
			<div class="content-section">
				<div class="title">
					<h1>About Us</h1>
				</div>
				<div class="content">
					<h3>Lorem ipsum dolor sit amet, consectetur adipisicing</h3>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
					tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
					quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
					consequat.</p>
					<div class="button">
						<a href="">Read More</a>
					</div>
				</div>
				<div class="social">
					<a href=""><i class="fab fa-facebook-f"></i></a>
					<a href=""><i class="fab fa-twitter"></i></a>
					<a href=""><i class="fab fa-instagram"></i></a>
				</div>
			</div>
			<div class="image-section">
				<img src="3.jpg">
			</div>
		</div>
	</div>

    <script src="myhome.js"></script>   
</body>
</html>