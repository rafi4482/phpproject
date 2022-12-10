<?php
require "dbconfig/config.php";
?>


<!DOCTYPE html>
<html lang="en">
<head>
    
    <title>Booking Update Form </title>
    <link rel="stylesheet" href="style2.css">
</head>
<body style="background-color:#7f8c8d">

 <?php


session_start();

 ?>

   <div id="main-wrapper">
   <center> 
        <h2>Customer Invoice</h2>
        <h4>DhakaChaka Car Rental</h4>
       
   </center>
   <form class="myform" action="userinvoice.php" method="post">
        <label ><b>Booking ID:</b></name>
        <input type="text" name="bid"  >
        <input type="submit" name="submit" value="Submit" >
        <input type="submit" name="back1" value="Back" >
        <br>
        <label for=""></label>
        <br>



<?php
if(isset($_POST['submit'])){
    $username1=$_SESSION['username'];
    //echo "$username1";
    $bid=$_POST['bid'];
    $q="select * from booking where bid='$bid' and uid='$username1' and status='returned' ";
    $qrun=mysqli_query($con,$q);
    if(mysqli_num_rows($qrun)>0){
     while($rm=mysqli_fetch_assoc($qrun)){
      $bid1=$rm['bid'];
      $_SESSION['bid']=$bid1;
      $uid1=$rm['uid'];
      $aid1=$rm['aid'];
      $reg1=$rm['reg'];
      $bdate1=$rm['bdate'];
      $btime1=$rm['btime'];
      $rdate1=$rm['rdate'];
      $rtime1=$rm['rtime'];
      


      $adate1=$rm['adate'];
      $atime1=$rm['atime'];
  
      $hours1=$rm['hours'];
      $rate1=$rm['rate'];
      $fine1=$rm['fine'];
      $total1=$rm['total'];
      $crate1=$rm['crate'];
      $commision1=$rm['commision'];
      $status1=$rm['status'];
      }

      $q="select * from user where username='$uid1'";
      $qrun=mysqli_query($con,$q);
      
      while($rm=mysqli_fetch_assoc($qrun)){
        $name1=$rm['name'];
        $email1=$rm['username'];
        $mobile1=$rm['mobile'];
        $address1=$rm['address'];
      }

      echo "<hr><label><b>Booking ID:&nbsp;<font color=blue>$bid1</font></b></label>
      <br><hr>
      <label><b>Name:&nbsp;<font color=blue>$name1</font></b></label>
        <br>
        <label><b>Address:&nbsp;<font color=blue>$address1</font></b></label>
        <br>
        <label><b>Mobile:&nbsp;<font color=blue>$mobile1</font></b></label>
        <br>
        
        <label><b>Email:&nbsp;<font color=blue>$uid1</font></b></label>
        <br>
        <hr>
        
        <label><b>Car Reg No.:&nbsp;<font color=blue>$reg1</font></b></label>
        <br>
        <hr>";

        echo "<label><b>Booking Date & Time:&nbsp;<font color=blue>$bdate1</font></b></label>
        
        
        <label><b>&nbsp;at&nbsp;<font color=blue>$btime1</font></b></lavel>
        
        <br>
        <label><b>Return Date & Time:&nbsp;<font color=blue>$rdate1</font></b></label>
        
        
        <label><b>&nbsp;at&nbsp;<font color=blue>$rtime1</font></b></label>
        
        <br>
        <label><b>Actual Return Date & Time:&nbsp;<font color=blue>$adate1</font></b></label>
        
        <label><b>&nbsp;at&nbsp;<font color=blue>$atime1</font></b></label>
        
        <br>
        
        <hr>";

        echo "<label><b>&nbsp;Rate/hr<font color=red> $rate1 </font></b></label> 
        <label><b>&nbsp;&nbsp;Hours-Used<font color=red> $hours1</font></b></label> 
        <label><b>&nbsp;&nbsp;Fine<font color=red> $fine1 </font></b></label> 
        <br>
        <hr>
        <label><b>&nbsp;Total<font color=red> $total1 </font></b></label> 
      
          <br>
       
        <hr>";

        echo "<div id='cancelsubmit'>
            <center>              
                           
                <input name='back1' type='submit' id='cancel_btn' value='Back'/>
            </center>
            </div>";

           
            


    }
    else{
        echo '<script>alert("Invalid Booking-ID/Username or not returned")</script>';
    }
    //echo "<label>$bid</label>";
}

?>




        </div>
        
   </form>
   </div>

   <?php
    //Add new record
   

 

   if(isset($_POST['back1'])){
    echo "<script> location.href='userboard.php'</script>" ;
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