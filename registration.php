<?php
require "dbconfig/config.php";
?>


<!DOCTYPE html>
<html lang="en">
<head>
    
    <title>Registration Form </title>
    <link rel="stylesheet" href="style2.css">
</head>
<body style="background-color:#7f8c8d">
   <div id="main-wrapper">
   <center> 
       <h3>Registration Form</h3>
        <img src="image/avtar.png" class="avatar"/>
   </center>
   <form class="myform" action="registration.php" method="post">
        <label><b>Name<font color=red>*</font></b></name>
        <input name="name" type="text" class="inputvalues" placeholder="Type your name" />
        <br>
        <label><b>Address</b></label> 
        <input name="address" type="text" class="inputvalues" placeholder="Type your Address"/>
        <br>
        <label><b>Mobile Number<font color=red>*</font></b></label> 
        <input name="mobile" type="text" class="inputvalues" placeholder="Type your Mobile no." />
        <br>
        <label><b>Email Address<font color=red>*</font></b></label> 
        <input name="email" type="email" class="inputvalues" placeholder="Type your email" />
        <br>
        <label><b>Password<font color=red>*</font></b></label> 
        <input name="password" type="password" class="inputvalues" placeholder="Type your password" />
        <br>
        <label><b>Confirm Password<font color=red>*</font></b></label> 
        <input name="cpassword" type="password" class="inputvalues" placeholder="Type your password again" />
        <br>
        <div id="cancelsubmit">
            <center>
                <input name="back" type="submit" id="cancel_btn" value="Back"/>
                <input name="submit" type="submit" id="submit_btn" value="Submit"/>
            </center>
           
        </div>
        
   </form>
   </div>
   <?php
   if(isset($_POST['back'])){
    echo "<script> location.href='myhome.php'</script>" ;
   }
    
     if(isset($_POST['submit'])){
        $name=$_POST['name'];
        $address=$_POST['address'];
        $mobile=$_POST['mobile'];
        $username=$_POST['email'];
        $password=$_POST['password'];
        $cpassword=$_POST['cpassword'];
        $status="pending";
        if((empty($name))|| (empty($mobile))|| (empty($username))||(empty($password))||(empty($cpassword)) ){
            echo '<script>alert("one or more fields are empty")</script>';
        }
        else{
        
     if($password==$cpassword){
        $q="select * from user where username='$username'";
        $qrun=mysqli_query($con,$q);
        if(mysqli_num_rows($qrun)>0){
            echo '<script>alert("User already exists")</script>';
        }
        else{
            $q="insert into user values('$name','$username','$password','$mobile','$address','$status')";
            $qrun=mysqli_query($con,$q);
            if($qrun){
                echo '<script>alert("User registration successful")</script>';
            }
            else{
                echo '<script>alert("Error in User registration")</script>';
            }
        }
     }
     else{
        echo '<script>alert("Sorry password does not match")</script>';
     }
    }
}
    ?>  
    

<script src="script1.js"></script>   
</body>

</html>
