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
        <label for="">Our Contact</label><br>
    </div>
    
    <br>
 <div class="myhomediv3">
   <p style="text-align:center" >
   Help us understand about your taxi need and We will suggest you
    best car for your travel need at cheapest price guaranteed. 
    Provide your information below and our travel expert will call you soon.
<br><br>
Address: 25 Gulshan Tower, Gulshan 2, Dhaka 1212
<br><br>
Phone Number: +880-71619955
<br><br>
Email: dhakachaka@link3.ac.bd
   </p>
 </div>
<br>
    <br>
 <div class="mycontact">
 <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3650.6490837911388!2d90.41124981368145!3d23.795507292971443!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755c7a79e1e6eff%3A0x22519d4c45d6d91a!2sGulshan%20Tower%2C%20Plot%20No.%2031%2C%2053%2C%20Dhaka%201212!5e0!3m2!1sen!2sbd!4v1670042617985!5m2!1sen!2sbd" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
 </div>

    <script src="myhome.js"></script>   
</body>
</html>