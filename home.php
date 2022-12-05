<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rafi's Car </title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"> 
    <link rel="stylesheet" href="style1.css">
    <link rel="stylesheet" href="test.css">
</head>
<body>
  <!--header section starts-->  
  <header class="header">
    <div id="menu-btn" class="fas fa-bars"></div>
    <a href="#" class="logo"><span>Dhaka</span>Chaka </a>
    <nav class="navbar">
        <a href="#home">home</a>
        <a href="test.php">vehicles</a>
        <a href="#services">services</a>
        <a href="#featured">featured</a>
        <a href="#reviews">reviews</a>
        <a href="#contact">contact</a>
    </nav>

    <div id="login-btn">
        <button class="btn">login</button>
        <i class="far fa-user"></i>
    </div>
</header>
  
  <div class="login-form-container">
    <span class="fas fa-times" id="close-login-form"></span>
    <form action="">
        <h3>user login</h3>
        <input type="text" placeholder="username" class="box">
        <input type="password" placeholder="password" class="box">
        <p>forget your password <a href="#">click here</a></p>
        <input type="submit" value="login now" class="btn">
       
        
        <p>don't have an account<a href="registration.php">create one</a></p>
    </form>
</div>
 
<section class="home" id="home">
    <h1 class="home-parallax" data-speed="-2">find your car</h1>
    <img class="home-parallax" data-speed="5" src="threecars.png" alt="">
    <a href="#" class="btn home-parallax" data-speed="7">explore cars</a>
    
</section>


 <script src="script1.js"></script>   
</body>
</html>