<?php
require "dbconfig/config.php";

    $name=$_POST['name1'];
    $address=$_POST['address1'];
    $mobile=$_POST['mobile1'];
    $username=$_POST['email1'];
    $password=$_POST['password1'];
    $cpassword=$_POST['cpassword1'];
    $status1="pending";
    if((empty($name))|| (empty($mobile))|| (empty($username))||(empty($password))||(empty($cpassword)) ){
        echo 3;
    }
    else{

  
    
     if($password==$cpassword){

////////////////////////
 $q="select * from user where username='$username'";
    $response=mysqli_query($con,$q);
    if(mysqli_num_rows($response)>0){
       
        echo 0;
    }
    else{
        $q="insert into user values('$name','$username','$password','$mobile','$address','$status1')";
            $response=mysqli_query($con,$q);
            if($response){
                //echo '<script>alert("User registration successful")</script>';
                
                echo 1;
            }
            else
                echo 2;
            
    }

//////////////////////////
  }
  else{
    echo 4;
  }
   
}

   
    ?>
