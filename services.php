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
    
    
    
    <div class="myhomediv2">
        <label for="">Our Services</label><br>
    </div>
    
    <br>
 <div class="myhomediv3">
   <p style="text-align:justify" >
   DhakaChaka Car Rental Services is the leading taxi booking company in Dhaka City, 
   loved and trusted by many customers across and outside Dhaka.
    We offer top-notch car on rent facilities which include well-experienced, 
   licensed chauffeurs, top-quality vehicles driven by educated,
    multi-lingual, and generous taxi drivers. We aim to provide 100% customer 
    satisfaction at affordable prices. If you are a travel enthusiast 
    and love to explore new destinations, restaurants, and street 
    food then stop wasting your money on Public transportation. Go for car 
    rental services to enjoy your trip up to the fullest. 
    As public transportations will never 
    let you enjoy the journey with your friends and family. 
    DhakaChaka Travel car rental services in Delhi offer you a road journey 
    that is safe, affordable, offers privacy and flexibility 
    to enjoy the journey beautifully. Booking a rental car is 
    one of the easiest tasks you can do within a few minutes 
    just with your mobile phone. In case of any inconvenience or
     query feel free to reach us.
<br>
DhakaChaka Travel car rental team is dedicated, knows the 
specifics  quirks of renting a car in India, and is well trained in 
 handling complicated itineraries/routes. We understand the
  fact that traveling outstation doesn't happen every day and
   whether you are traveling for business or pleasure, we make 
   sure that your journey will be hassle-free. DhakaChaka travel will 
   offer you complete peace of mind throughout the journey.
   </p>
 </div>
<br>
    

    <script src="myhome.js"></script>   
</body>
</html>