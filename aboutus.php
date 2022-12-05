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
        <label for="">About us</label><br>
    </div>
    
    <br>
 <div class="myhomediv3">
   <p style="text-align:justify" >
   DhakaChaka Car Rental is one of the leading car rental 
   companies and car hire service providers in Central Dhaka. 
   Established in the year 2015, today the company has excelled 
   in this industry by offering top-notch services living up 
   to the standards and the quality promised. Today most of the
    people who come to Delhi to visit Lalbag Kella, Sadar ghat,
     Dhaka Zoo, Padma Bridge, Dhaka University or want to visit 
     places like Sitakunda, Bandarban, Coxes Bazar, Kuakata or
      even Tetulia for week-end tours or for business trips
       prefer the Pal Travel car rental services. The company 
       has a fleet of cars ranging from luxury to standard with 
       A/C and Non A/C facilities. The cars are well maintained 
       and are driven by educated, multi-lingual and generous 
       taxi drivers. Almost all our drivers are experienced and
        have made many a trips to Chittagong, Sylhet, Rajshahi
         and Khulna. They make you travel easier, hassle free
          and ensure you reach your desired desination, airport, 
          railway station and office on time.
<br>
If you are looking for car rental services in Dhaka or a pick up 
and drop facility to Dhaka airport & railway station or a car
 for a weekend trip to Coxes Bazar, Bandarban, Rangamati, Sylhet Tea
  Garden, Sundarban, Notore Rajbari and Kuakata, we are going 
  to provide you the best car at the most competitive rates. 
  We give the best value to your hard-earned money and charge 
  the most competitive market prices for the services we 
  provide to you.
<br>
So for any assistance you need for car hire or car lease, we 
are just a click away. You can also call or mail us to get best 
car rental services in Dhaka.
<br>
DhakaChaka Car rental provides taxis for any duration 
-a complete day taxi service & half day taxi services in Dhaka
 at competitive rates. DhakaChaka Car Rental offers taxi 
 booking services for all types of local taxi requirements, 
 railway station pick-up & drop, airport transfers and 
 customers can choose from the affordable car hire services 
 and taxi on rent in Delhi for travelling. DhakaChaka Car 
 Rental taxi services & radio taxi services has been reviewed 
 & rated as one of the leading taxi services in Dhaka by our
  clients.
<br>
With Pal car rental you can also book luxury cars on rent in
 Dhaka like BMW, Benz, Mercedes, Audi, Toyota and many other
  high end models depending on various needs. So, enjoy journey
   in style with the best taxi booking on rent.
   <br><br>
  <b> Why Pal Car Rental Services –</b>
   <br>
   </p>
 </div>
<br>
<div class="myabout">
<ul>
        <li>Lowest & Most Competitive price</li>
        <li>Online taxi booking</li>
        <li>No credit card fees</li>
        <li>Amend or cancel your booking online quickly and easily</li>
        <li>Clean & maintained cars</li>
        <li>Well behaved & educated drivers</li>
        <li>Instant services</li>
    </ul>
</div>
    <br>

    <script src="myhome.js"></script>   
</body>
</html>