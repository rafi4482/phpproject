<?php
require "dbconfig/config.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DhakaChaka Caar Rental</title>
    <link rel="stylesheet" href="myhome.css">

</head>
<body>
<?php
 if(isset($_POST['login'])){
    //echo "insdie login now";
    $username=$_POST['username'];
    $password=$_POST['password'];
    //echo "$username"."$password";
    if((empty($username))||(empty($password))){
        echo '<script>alert("one or more fields are empty")</script>';
        $username1=$_POST['username'];
        $password1=$_POST['password'];
    }
    else{ 
    $q="select * from user where username='$username' and password='$password' ";
    $qrun=mysqli_query($con,$q);
    if(mysqli_num_rows($qrun)>0){
        echo '<script>alert("User exists")</script>';
        
        while($rows=mysqli_fetch_assoc($qrun)){
            $username1=$rows['name'];
            $email1=$rows['email'];
        }
        
        echo "<script>
         localStorage.setItem('name',' $username1 ')
         localStorage.setItem('email',' $email1 ')
         window.location.href='agentboard.php'
        </script>";
        
    }
    else{
        //echo "<br>"."inside Agent";
        $q="select * from agent where email='$username' and password='$password'";
        $qrun=mysqli_query($con,$q);
        if(mysqli_num_rows($qrun)>0){
            echo '<script>alert("Agent exits")</script>';
            while($rows=mysqli_fetch_assoc($qrun)){
                $username1=$rows['name'];
                $email1=$rows['email'];
            }
            
            echo "<script>
             localStorage.setItem('name',' $username1 ')
             localStorage.setItem('email',' $email1 ')
             window.location.href='agentboard.php'
            </script>";
            
            
        }
        else{
           // echo "<br>"."inside Employee";
            $q="select * from employee where username='$username' and password='$password'";
            $qrun=mysqli_query($con,$q);
            if(mysqli_num_rows($qrun)>0){
            echo '<script>alert("Admin exits")</script>';
            while($rows=mysqli_fetch_assoc($qrun)){
                $username1=$rows['name'];
                $password1=$rows['username'];
            }
            
            echo "<script>
             localStorage.setItem('username',' $username1 ')
             window.location.href='admin.php'
            </script>";
            //header("Location: admin.php"); 
            }
            else    
              echo '<script>alert("Invalid user")</script>';

        }
    }
}
        
}
?>


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
    <form action="myhome.php" method="post">
        <h3>user login</h3>
        <label for=""><b>username</b?&nbsp;</label>
        <input name="username" type="text" placeholder="username" class="myhomeinput">
        <br>
        <label for=""><b>password</b>&nbsp;</label>
        <input name="password" type="password" placeholder="password" class="myhomeinput"> 
        <p>forget your password <a href="#">click here</a></p>
        <input name="login" type="submit" value="login now" class="btn_login">
       
        
        <p>don't have an account<a href="registration.php">create one</a></p>
        <br>
        <div class="btn_login">
        <a href="myhome.php">Close</a>
        </div>
       
    </form>
    </div>
    
    
    <div class="myhomediv1">
      <label>Find Your Car</label>
      <img class="content-items"  src="3.jpg" alt="">
    </div>
    <div class="myhomediv2">
        <label for="">Book Car for Rent</label><br>
    </div>
    <div class="myhomediv3">
        <p>
        Explore the Most Popular Places to Visit in Dhaka. Book A Full-Day Sightseeing Tour Package & Enjoy Your Trip with DhakaChaka Travel, Visit All popular places in Dhaka Like Lalbag, Dhaka Univerrsity, Dhaka Zoo, Sadar Ghat etc. 
        and make your visit in Dhaka memorable
        </p>
    </div>
    <br>
 <div>
    
 </div>
<br>
    




    <script src="myhome.js"></script>   
</body>
</html>