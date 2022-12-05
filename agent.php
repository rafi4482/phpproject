<?php
require "dbconfig/config.php";
?>


<!DOCTYPE html>
<html lang="en">
<head>
    
    <title>Agent Registration Form </title>
    <link rel="stylesheet" href="style2.css">
</head>
<body style="background-color:#7f8c8d">

 <?php
  $name1="";
  $address1="";
  $mobile1="";
  $password1="";
  $category1="";
  $email1="";
  $id1=0;
  $commision1="";

if(isset($_POST['submit'])){
    $id=$_POST['id'];
    $name=$_POST['name'];
    $address=$_POST['address'];
    $mobile=$_POST['mobile'];
    $email=$_POST['email'];
    $password=$_POST['password'];
    $cpassword=$_POST['cpassword'];
    $category=$_POST['category'];
    $commision=$_POST['commision'];

    if((empty($name))|| (empty($mobile))|| (empty($email))||(empty($password))||(empty($cpassword)) ||(empty($commision))||(empty($category))){
        echo '<script>alert("one or more fields are empty")</script>';
        $name1=$_POST['name'];
        $address1=$_POST['address'];
        $mobile1=$_POST['mobile'];
        $email1=$_POST['email'];
        $password1=$_POST['password'];
        $cpassword1=$_POST['cpassword'];
        $commision1=$_POST['commision'];
        $category1=$_POST['category'];
    }
    else{
    
 if($password==$cpassword){
    $q="select * from agent where id='$id'";
    $qrun=mysqli_query($con,$q);
    if(mysqli_num_rows($qrun)>0){
        echo '<script>alert("Agent already exists")</script>';
        $name1=$_POST['name'];
        $address1=$_POST['address'];
        $mobile1=$_POST['mobile'];
        $email1=$_POST['email'];
        $password1=$_POST['password'];
        $cpassword1=$_POST['cpassword'];
        $commision1=$_POST['commision'];
        $category1=$_POST['category'];
    }
    else{
       // echo "id="."$id";
      //  echo " name="."$name";
       // echo " address="."$address";
       // echo "mobile="."$mobile";
       // echo " email="."$email";
       // echo " commision="."$commision";
       // echo "password="."$password";
       // echo "category="."$category";
        
        $q="insert into agent values('$id','$name','$address','$mobile','$email','$commision','$password','$category')";
        $qrun=mysqli_query($con,$q);
        if($qrun){
            echo '<script>alert("Agent registration successful")</script>';
            $name1="";
            $address1="";
            $mobile1="";
            $password1="";
            $category1="";
            $email1="";
            $id1=0;
            $commision1="";
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
    
    $id=$_POST['id'];
    if(!empty($id)){
   // echo "Inside Delete Button="."$username";
    $q="Delete from agent where id='$id'";
    $qrun=mysqli_query($con,$q);
    //echo "id="."$id";
    if($qrun)
        echo '<script>alert("Agent Deleted")</script>';
    else
        echo '<script>alert("Sorry Failed to Delete Agent")</script>';  
    }
    else{
        echo '<script>alert("Empty:Failed to Delete Agent")</script>';
    }
    $name1="";
    $address1="";
    $mobile1="";
    $password1="";
    $category1="";
    $email1="";
    $id1=0;
    $commision1="";
}

 if(isset($_POST['update'])){
        $id=$_POST['id'];
        $name=$_POST['name'];
        $address=$_POST['address'];
        $mobile=$_POST['mobile'];
        $email=$_POST['email'];
        $password=$_POST['password'];
        $cpassword=$_POST['cpassword'];
        $commision=$_POST['commision'];
        $category=$_POST['category'];
        if((empty($id))||(empty($name))|| (empty($mobile))|| (empty($email))||(empty($password))||(empty($cpassword)) ||(empty($commision))||(empty($category))){
        echo '<script>alert("one or more fields are empty")</script>';
    }
    else{
    
      if($password==$cpassword){
        $q="select * from agent where id='$id'";
        $qrun=mysqli_query($con,$q);
        if(mysqli_num_rows($qrun)>0){
            echo "update agent id=","$id";
            $q="update agent set id='$id', name='$name',address='$address',mobile='$mobile',email='$email' ,commision='$commision' ,password='$password' , category='$category' where id='$id' ";
            $qrun=mysqli_query($con,$q);
            echo '<script>alert("Update Successful")</script>';
            $name1="";
            $address1="";
            $mobile1="";
            $password1="";
            $category1="";
            $email1="";
            $id1=0;
            $commision1="";
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
   $password1="";
   $category1="";
   $email1="";
   $id1=0;
   $commision1="";
}




  if(isset($_POST['search'])){
    $id=$_POST['id'];
    $q="select * from agent where id='$id'";
    $qrun=mysqli_query($con,$q);
    if(mysqli_num_rows($qrun)>0){
        echo '<script>alert("Agent  found")</script>';
        while($row=mysqli_fetch_assoc($qrun)){
           //echo "inside agent found";
           $id1=$row["id"]; 
           $name1=$row['name'];
           $address1=$row['address'];
           $mobile1=$row['mobile'];
           $email1=$row['email'];
           $password1=$row['password'];
           $cpassword1=$row['password'];
           $commision1=$row['commision'];
           $category1=$row['category'];
           //echo "name1="."$name1";
        }
    }
    else{

      echo '<script>alert("Sorry Agent NOT found")</script>';
            $name1="";
            $address1="";
            $mobile1="";
            $password1="";
            $category1="";
            $email1="";
            //$id1=;
            $commision1="";
    }
        
  } 
  if(isset($_POST['add'])){
    $name1="";
    $address1="";
    $mobile1="";
    $password1="";
    $commision1="";
    $email1="";
    $id1="";
    $category1="";
    $q="select max(id)  from  agent";
    $qrun=mysqli_query($con,$q);
    $row = mysqli_fetch_assoc($qrun);
    $id1=$row['max(id)'];
    $id1++;
    //echo "in add ="."$id1"; 
  } 
    //echo "$tx"; 

    if(isset($_GET['id'])){
        $id= $_GET['id'];
        $q="select * from agent where id='$id'";
        $qrun=mysqli_query($con,$q);
        while($row=mysqli_fetch_assoc($qrun)){
                 $id1=$row["id"]; 
                 $name1=$row['name'];
                 $address1=$row['address'];
                 $mobile1=$row['mobile'];
                 $email1=$row['email'];
                 $password1=$row['password'];
                 $cpassword1=$row['password'];
                 $commision1=$row['commision'];
                 $category1=$row['category'];
        }
        }
 ?>

   <div id="main-wrapper">
   <center> 
        <h2>Admin Panel</h2>
        <h3>Agent Registration Update Form</h3>
        <img src="image/avtar.png" class="avatar"/>
   </center>
   <form class="myform" action="agent.php" method="post">
       <center>
        <label><b>ID:<font  color=red>*</font></b></label>
        <input name="id" type="text"  class="inputid"  value=<?php echo $id1 ?> />
    </center>
        
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
        <input name="email" type="email" class="inputvalues" value="<?php echo $email1 ?>" />
        <br>
        <label><b>Commision<font color=red>*</font></b></label> 
        <input name="commision" type="text" class="inputvalues" value="<?php echo $commision1 ?>" />
        
        
        <br>
        <label><b>Password<font color=red>*</font></b></label> 
        <input name="password" type="password" class="inputvalues" value="<?php echo $password1 ?>" />
        <br>
        <label><b>Confirm Password<font color=red>*</font></b></label> 
        <input name="cpassword" type="password" class="inputvalues" value="<?php echo $password1 ?>" />
        <br>
        
        <label><b>Current Category:</b></label> 
        <label><b><font color=red><?php echo "$category1" ?></font></b></label> 
        
        <label><b> ....... </b></label>
        <label><b>Change Catetory </b></label>
        <select name="category">
                 <option value='A'>A</option>"; 
                <option value='B'>B</option>";
                <option value='C'>C</option>";
                <option value='F'>F</option>";
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
