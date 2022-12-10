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
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css"
    />
    <!-- Google Font -->
  
    <link rel="stylesheet" href="myhome.css">
    <link rel="stylesheet" href="services.css">

</head>
<body>
    <header>
        <div class="logo">
            <p>Dhaka<font color=yellow>Chaka</font></p>
        </div>
        <nav>
            <ul>
                <li><a href="index.php">Home</a></li>
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
       
        
        <p>don't have an account<a href="test3.php">create one</a></p>
        <br>
        <div class="btn_login">
        <a href="index.php">Close</a>
        </div>
       
    </form>
    </div>
    
    
    
    <div class="myhomediv2">
        <label for="">Our Services</label><br>
    </div>
    
    <section>
      <div class="row">
        <div class="column">
          <div class="card">
            <div class="icon-wrapper">
              <i class="fas fa-phone"></i>
            </div>
            <h3>24/7 support</h3>
            <p>
              Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quisquam
              consequatur necessitatibus eaque.
            </p>
          </div>
        </div>
        <div class="column">
          <div class="card">
            <div class="icon-wrapper">
            <i class="fa-regular fa-timer"></i>            </div>
            <h3>Easier Booking</h3>
            <p>
              Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quisquam
              consequatur necessitatibus eaque.
            </p>
          </div>
        </div>
        <div class="column">
          <div class="card">
            <div class="icon-wrapper">
              <i class="fas fa-wrench"></i>
            </div>
            <h3>Customization</h3>
            <p>
              Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quisquam
              consequatur necessitatibus eaque.
            </p>
          </div>
        </div>
        <div class="column">
          <div class="card">
            <div class="icon-wrapper">
              <i class="fas fa-headphones"></i>
            </div>
            <h3>Agent Support</h3>
            <p>
              Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quisquam
              consequatur necessitatibus eaque.
            </p>
          </div>
        </div>
        <div class="column">
          <div class="card">
            <div class="icon-wrapper">
            <i class="fa-thin fa-tag"></i>            </div>
            <h3>Good deals</h3>
            <p>
              Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quisquam
              consequatur necessitatibus eaque.
            </p>
          </div>
        </div>
        <div class="column">
          <div class="card">
            <div class="icon-wrapper">
            <i class="fa-regular fa-truck-moving"></i>            </div>
            <h3>Long Term Rental</h3>
            <p>
              Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quisquam
              consequatur necessitatibus eaque.
            </p>
          </div>
        </div>
      </div>
    </section>
    

    <script src="myhome.js"></script>   
</body>
</html>