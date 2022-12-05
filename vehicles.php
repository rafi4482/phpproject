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
        <label for="">Our Latest Cars</label><br>
    </div>
    
    <br>
 <div>
    <?php 
   $q="select * from car";
   $qrun=mysqli_query($con,$q);
   $i=0;
   while($row=mysqli_fetch_assoc($qrun)){
    $i++;

    $reg[$i]=$row["reg"];
    $company[$i]=$row["company"];
    $model[$i]=$row["model"];
    $rate[$i]=$row["rate"];
    $year[$i]=$row["year"];
    $type[$i]=$row["type"];
    $image[$i]=$row["image"];
    $status[$i]=$row["status"];
    
    if($status[$i]=="available")
      $statuslabel[$i]="Rent"."&nbsp;"."Now";
    else
      $statuslabel[$i]="Unavailable";  
   }

   for($j=1;$j<=$i;$j++)
   {
    ?>
    <div class="myhomediv4">
    <label></label> <br>
    <img src="image/<?php echo "$image[$j]"?>" width="300" height="200"/>
    <br>
    <label style="color:yellow;font-size:18px;">&nbsp; &nbsp;<?php echo "$year[$j]"?>&nbsp;<?php echo "$company[$j]"?>&nbsp;<?php echo "$model[$j]"?> </label> 
    <br>
    <label ><font color="lightgreen" size=10> &nbsp;<?php echo "$rate[$j]"?></font><font color="white">/hour</font></label> 
    <br>
   
    <br>
    
   
     
   </div>
    
<?php
   }
   ?>
 </div>
<br>
    

    <script src="myhome.js"></script>   
</body>
</html>