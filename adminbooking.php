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

if(isset($_GET['id'])){
    $getusername= $_GET['id'];
    $_SESSION['bid']=$getusername;
    $tx=$_SESSION['bid'];

    $q="select * from booking where bid='$getusername'";
    $qrun=mysqli_query($con,$q);
    while($rm=mysqli_fetch_assoc($qrun)){
      $id1=$rm['bid'];
      $uid1=$rm['uid'];
      $aid1=$rm['aid'];
      $reg1=$rm['reg'];
      $bdate1=$rm['bdate'];
      $btime1=$rm['btime'];
      $tx1=$rm['rdate'];
      $tx2=$rm['rtime'];
     // echo "bdate1="."$bdate1";
     // echo "btime1="."$btime1";

     
      //echo "rtime1="."$rtime1";
      $rdate1=$rm['adate'];
      $rtime1=$rm['atime'];
  
      $hours1=$rm['hours'];
      $rate1=$rm['rate'];
      $fine1=$rm['fine'];
      $total1=$rm['total'];
      $crate1=$rm['crate'];
      $commision1=$rm['commision'];
      $status1=$rm['status'];
    }
    }



 if(isset($_POST['update'])){
   // $id1= $_GET['id'];
    $status=$_POST['status'];
    $bdate=$_POST['bdate'];
    $btime=$_POST['btime'];
    $rdate=$_POST['rdate'];
    $rtime=$_POST['rtime'];

   // echo "insdie update status="."$status";
     $bid=$_SESSION['bid'];
     //echo "bid="."$bid";
     //echo "bdate="."$bdate";
     //echo "status="."$status";  
        if($status=="nothing")
             $q="update booking set bdate='$bdate', btime='$btime', rdate='$rdate', rtime='$rtime' where bid='$bid'";
        else
            $q="update booking set status='$status', bdate='$bdate', btime='$btime', rdate='$rdate', rtime='$rtime' where bid='$bid'";
            
            $qrun=mysqli_query($con,$q);
           
            $status1="$status";
       
            echo '<script>alert("Booking updated")</script>';
            $q="select * from booking where bid='$bid'";
            $qrun=mysqli_query($con,$q);
            while($rm=mysqli_fetch_assoc($qrun)){
              $id1=$rm['bid'];
              $uid1=$rm['uid'];
              $aid1=$rm['aid'];
              $reg1=$rm['reg'];
              $bdate1=$rm['bdate'];
              $btime1=$rm['btime'];
              $tx1=$rm['rdate'];
              $tx2=$rm['rtime'];
             

              $rdate1=$rm['adate'];
              $rtime1=$rm['atime'];
          
              $hours1=$rm['hours'];
              $rate1=$rm['rate'];
              $fine1=$rm['fine'];
              $total1=$rm['total'];
              $crate1=$rm['crate'];
              $commision1=$rm['commision'];
              $status1=$rm['status'];
            }
            $statuscar="booked";
            $q="update car set status='$statuscar' where reg='$reg1'";
            $qrun=mysqli_query($con,$q);
           

    
}




 
    //echo "$tx"; 


 ?>

   <div id="main-wrapper">
   <center> 
        <h2>Admin Panel</h2>
        <h3>Car Booking Update Form</h3>
       
   </center>
   <form class="myform" action="adminbooking.php" method="post">
        <label ><b>Booking ID: </font></b></name>
        <input type="submit" name="bid" value=<?php echo $id1 ?> >
        <label><b>&nbsp;&nbsp;&nbsp;Username:&nbsp;<font color=blue><?php echo "$uid1" ?></font></b></label>
        <br>
        <label><b>Agent:&nbsp;<font color=blue><?php echo "$aid1" ?></font></b></name>
        
        <label><b>&nbsp;&nbsp;&nbsp;Car Reg No.:&nbsp;<font color=blue><?php echo "$reg1" ?></font></b></label>
        <br>
        <hr>
        <label><b>Booking Date:&nbsp;<font color=blue><?php echo "$bdate1" ?></font></b></label>
        <input name="bdate" type="date"  value="<?php echo $bdate1 ?>"/>
        <br>
        <label><b>Booking Time:&nbsp;<font color=blue><?php echo "$btime1" ?></font></b></label>
        <input name="btime" type="time"  value="<?php echo $btime1 ?>"/>
        <br>
        <label><b>Schedule Return Date:&nbsp;<font color=blue> <?php echo "$tx1" ?> </font></b></label>
        <input name="rdate" type="date"  value="<?php echo $tx1 ?>"/>
        <br>
        <label><b>Schedule Return Time:&nbsp;<font color=blue><?php echo "$tx2" ?></font></b></label>
        <input name="rtime" type="time"  value="<?php echo $tx2 ?>"/>
        <br>
        
        
        <hr>
        <label><b>&nbsp;Rate/hr<font color=red> <?php echo "$rate1" ?>  </font></b></label> 
        <label><b>&nbsp;&nbsp;Hours-Used<font color=red> <?php echo "$hours1" ?>  </font></b></label> 
        <label><b>&nbsp;&nbsp;Fine<font color=red> <?php echo "$fine1" ?>  </font></b></label> 
        <label><b>&nbsp;&nbsp;Comm-Rate(%)<font color=red> <?php echo "$crate1" ?>  </font></b></label> 
        <br>
        <label><b>&nbsp;Total<font color=red> <?php echo "$total1" ?>  </font></b></label> 
        <label><b>&nbsp;&nbsp;Commision<font color=red> <?php echo "$commision1" ?>  </font></b></label> 
        <br>
        <label><b>Current Status:</b></label> 
        <label><b><font color=red><?php echo "$status1" ?></font></b></label> 
        
        <label><b> .... </b></label>
        <label><b>Change Status </b></label>
        <select name="status">
                <option value='nothing'>Select One</option>"; 
                 <option value='confirmed'>Confirmed</option>"; 
                <option value='pending'>Pending</option>";
                <option value='completed'>Completed</option>";
                <option value='rejected'>Rejected</option>";
        </select>
        <br>
        <hr>
        <div id="cancelsubmit">
            <center>

                
                 
                <input name="delete" type="submit" id="cancel_btn" value="Delete"
                 onclick="return checkdelete()"/>
               
                <input name="update" type="submit" id="cancel_btn" value="Update"/>
               
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
