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
<?php
session_start();

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
            $name1=$rows['name'];
            $username1=$rows['username'];
            $status=$rows['status'];
        }
       $_SESSION['username']=$username;
       
        if($status=="accept"){
        echo "<script>
         localStorage.setItem('name',' $name1 ')
         localStorage.setItem('username',' $username1 ')
         window.location.href='userboard.php'
        </script>";
        }
        else
        echo '<script>alert("Your registrain is pending")</script>';

        
    }
    else{
        //echo "<br>"."inside Agent"."$username";
        $q="select * from agent where email='$username' and password='$password'";
        $qrun=mysqli_query($con,$q);
        if(mysqli_num_rows($qrun)>0){
            echo '<script>alert("Agent exits")</script>';
            while($rows=mysqli_fetch_assoc($qrun)){
                $username1=$rows['name'];
                $email1=$rows['email'];
                $aid=$rows['id'];
            }
            //echo "$username1"."$email1";
            $_SESSION['username']=$email1;
            $_SESSION['aid']=$aid;
            echo "<script>
             localStorage.setItem('name',' $username1 ')
             localStorage.setItem('username',' $email1 ')
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
    <form action="myhome.php" method="post">
        <h3>user login</h3>
        <label for=""><b>username</b?&nbsp;</label>
        <input name="username" type="text" placeholder="username" class="myhomeinput">
        <br>
        <label for=""><b>password</b>&nbsp;</label>
        <input name="password" type="password" placeholder="password" class="myhomeinput"> 
        <p>forget your password <a href="">click here</a></p>
        <input name="login" type="submit" value="login now" class="btn_login">
       
        
        <p>don't have an account<a href="test3.php">create one</a></p>
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
    

    <br>
 <div>
    
 </div>
<br>
    




    <script src="myhome.js"></script>   
</body>
</html>