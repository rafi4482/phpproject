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

 <?php

if(isset($_POST['submit'])){
    $name=$_POST['name'];
    $address=$_POST['address'];
    $mobile=$_POST['mobile'];
    $username=$_POST['email'];
    $password=$_POST['password'];
    $cpassword=$_POST['cpassword'];
    $status=$_POST['status'];
    if((empty($name))|| (empty($mobile))|| (empty($username))||(empty($password))||(empty($cpassword)) ){
        echo '<script>alert("one or more fields are empty")</script>';
        $name1=$_POST['name'];
        $address1=$_POST['address'];
        $mobile1=$_POST['mobile'];
        $username1=$_POST['email'];
        $password1=$_POST['password'];
        $cpassword1=$_POST['cpassword'];
        $status1=$_POST['status'];
    }
    else{
    
 if($password==$cpassword){
    $q="select * from user where username='$username'";
    $qrun=mysqli_query($con,$q);
    if(mysqli_num_rows($qrun)>0){
        echo '<script>alert("User already exists")</script>';
        $name1=$_POST['name'];
        $address1=$_POST['address'];
        $mobile1=$_POST['mobile'];
        $username1=$_POST['email'];
        $password1=$_POST['password'];
        $cpassword1=$_POST['cpassword'];
        $status1=$_POST['status'];
    }
    else{
        $q="insert into user values('$name','$username','$password','$mobile','$address','$status')";
        $qrun=mysqli_query($con,$q);
        if($qrun){
            echo '<script>alert("User registration successful")</script>';
            $name1="";
            $address1="";
            $mobile1="";
            $username1="";
            $password1="";
            $status1="";
        }
        else{
            echo '<script>alert("Error in User registration")</script>';
        }
    }
 }
 else{
    echo '<script>alert("Sorry password does not match")</script>';
    $name1=$_POST['name'];
    $address1=$_POST['address'];
    $mobile1=$_POST['mobile'];
    $username1=$_POST['email'];
    $password1=$_POST['password'];
    $cpassword1=$_POST['cpassword'];
    $status1=$_POST['status'];
 }
}
        
}


if(isset($_POST['delete'])){
    
    $username=$_POST['email'];
    if(!empty($username)){
   // echo "Inside Delete Button="."$username";
    $q="Delete from user where username='$username'";
    $qrun=mysqli_query($con,$q);
    //echo "id="."$id";
    if($qrun)
        echo '<script>alert("Record Deleted")</script>';
    else
        echo '<script>alert("Sorry Failed to Delete")</script>';  
    }
    else{
        echo '<script>alert("Empty:Failed to Delete")</script>';
    }
        $name1="";
        $address1="";
        $mobile1="";
        $username1="";
        $password1="";
        $status1="";
}

 if(isset($_POST['update'])){
    $name=$_POST['name'];
    $address=$_POST['address'];
    $mobile=$_POST['mobile'];
    $username=$_POST['email'];
    $password=$_POST['password'];
    $cpassword=$_POST['cpassword'];
    $status=$_POST['status'];
    if((empty($name))|| (empty($mobile))|| (empty($username))||(empty($password))||(empty($cpassword)) ){
        echo '<script>alert("one or more fields are empty")</script>';
    }
    else{
    
      if($password==$cpassword){
        $q="select * from user where username='$username'";
        $qrun=mysqli_query($con,$q);
        if(mysqli_num_rows($qrun)>0){
            $q="update user set name='$name',address='$address',mobile='$mobile',password='$password' ,status='$status' where username='$username'";
            $qrun=mysqli_query($con,$q);
            echo '<script>alert("Update Successful")</script>';
            $name1="";
    $address1="";
    $mobile1="";
    $username1="";
    $password1="";
    $status1="";
        }
        else{
            echo '<script>alert("User NOT exists")</script>';
        }
      }
      else{
        echo '<script>alert("Password NOT matched")</script>';
      }
    

   }
        $name1="";
        $address1="";
        $mobile1="";
        $username1="";
        $password1="";
        $status1="";
}




  if(isset($_POST['search'])){
    $username=$_POST['email'];
    $q="select * from user where username='$username'";
    $qrun=mysqli_query($con,$q);
    if(mysqli_num_rows($qrun)>0){
        echo '<script>alert("Record found")</script>';
        while($row=mysqli_fetch_assoc($qrun)){
           $name1=$row["name"];
           $address1=$row["address"];
           $mobile1=$row["mobile"];
           $username1=$row["username"];
           $password1=$row["password"];
           $status1=$row["status"];
        }
    }
    else{

      echo '<script>alert("Sorry Record NOT found")</script>';
      $name1="";
      $address1="";
      $mobile1="";
      $username1=$_POST["email"];;
      $password1="";
      $status1="";
    }
        
  } 
  if(isset($_POST['add'])){
    $name1="";
    $address1="";
    $mobile1="";
    $username1="";
    $password1="";
    $status1="";
  } 
    //echo "$tx"; 

if(isset($_GET['id'])){
  $getusername= $_GET['id'];
  $q="select * from user where username='$getusername'";
  $qrun=mysqli_query($con,$q);
  while($rm=mysqli_fetch_assoc($qrun)){
    $name1=$rm['name'];
    $address1=$rm['address'];
    $mobile1=$rm['mobile'];
    $username1=$rm['username'];
    $password1=$rm['password'];
    $status1=$rm['status'];
  }
  }
 ?>

   <div id="main-wrapper">
   <center> 
        <h2>Admin Panel</h2>
        <h3>User Registration Update Form</h3>
        <img src="image/avtar.png" class="avatar"/>
   </center>
   <form class="myform" action="user.php" method="post">
        <label><b>Name<font color=red>*</font></b></name>
        <input name="name" type="text" class="inputvalues" value="<?php echo $name1 ?>" />
        <br>
        <label><b>Address</b></label> 
        <input name="address" type="text" class="inputvalues" value="<?php echo $address1 ?>"/>
        <br>
        <label><b>Mobile Number<font color=red>*</font></b></label> 
        <input name="mobile" type="text" class="inputvalues" value="<?php echo $mobile1 ?>" />
        <br>
        <label><b>Email Address<font color=red>*</font></b></label> 
        <input name="email" type="email" class="inputvalues" value="<?php echo $username1 ?>" />
        <br>
        <label><b>Password<font color=red>*</font></b></label> 
        <input name="password" type="password" class="inputvalues" value="<?php echo $password1 ?>" />
        <br>
        <label><b>Confirm Password<font color=red>*</font></b></label> 
        <input name="cpassword" type="password" class="inputvalues" value="<?php echo $password1 ?>" />
        <br>
        
        <label><b>Current Status:</b></label> 
        <label><b><font color=red><?php echo "$status1" ?></font></b></label> 
        
        <label><b> ....... </b></label>
        <label><b>Change Status </b></label>
        <select name="status">
                 <option value='accept'>Accept</option>"; 
                <option value='pending'>Pending</option>";
                <option value='suspend'>Suspend</option>";
                <option value='reject'>Reject</option>";
        </select>
        <br><br>
        <hr>
        <div id="cancelsubmit">
            <center>

                
                 
                <input name="delete" type="submit" id="cancel_btn" value="Delete"
                 onclick="return checkdelete()"/>
                <input name="search" type="submit" id="cancel_btn" value="Search"/>
                <input name="update" type="submit" id="cancel_btn" value="Update"/>
                <input name="add" type="submit" id="cancel_btn" value="Add New"/>
                <input name="submit" type="submit" id="submit_btn" value="Submit"/>
                <input name="back1" type="submit" id="cancel_btn" value="Back"/>
            </center>
           
        </div>
        
   </form>
   </div>
   <?php
    //Add new record
   

   if(isset($_POST['back1'])){
    echo "<script> location.href='admin.php'</script>" ;
   }
  
    
   
    ?>  
    
<script>
    function checkdelete(){
        return confirm('Are you sure to delete{y/n)?');
    }
</script>
<script src="script1.js"></script>   
</body>

</html>
