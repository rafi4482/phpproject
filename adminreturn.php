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
      $rdate1=$rm['rdate'];
      $rtime1=$rm['rtime'];
      $adate1=$rm['adate'];
      $atime1=$rm['atime'];
  
      $_SESSION['bdate']=$bdate1;
      $_SESSION['btime']=$btime1;
      $_SESSION['rdate']=$rdate1;
      $_SESSION['rtime']=$rtime1;

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
    $adate=$_POST['adate'];
    $atime=$_POST['atime'];
   
    //echo "in update status="."$status";
    
     $bid=$_SESSION['bid'];
   // echo "bid="."$bid";
        
            $q="update booking set status='$status',adate='$adate',atime='$atime' where bid='$bid'";
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
              $rdate1=$rm['rdate'];
              $rtime1=$rm['rtime'];
              $adate1=$rm['adate'];
              $atime1=$rm['atime'];

              $td1=date_create($bdate1);
              $td2=date_create($rdate1);
              $days=date_diff($td1,$td2);
              //echo "day=";
              $day=$days->days;
              $dayhour=$day*24;
              echo "$dayhour";
              $td3=strtotime($btime1);
              $td4=strtotime($rtime1);
              $hour=($td4-$td3)/(60*60);  
              //echo "hours=";
              //echo "$hour";
              $tbhours=$dayhour+$hour;
              //echo "total booking hours=";
              //echo "$tbhours"."<br>";

              


              $td1=date_create($rdate1);
              $td2=date_create($adate1);
              $days=date_diff($td1,$td2);
              //echo "day=";
              $day=$days->days;
              $dayhour1=$day*24;
              $td3=strtotime($rtime1);
              $td4=strtotime($atime1);
              $ehours1=($td4-$td3)/(60*60);  
              $tehours=$dayhour1+$ehours1;
              
              //echo "Extra hours=";
              //echo "$tehours";

              
              $hours1=$rm['hours'];
              $rate1=$rm['rate'];
              $fine1=$rm['fine'];
              $total1=$rm['total'];

              $fine=2*$rate1*$tehours;
              $total=$rate1*$tbhours+$fine;
              $thours=$tbhours+$tehours;
              

              $crate1=$rm['crate'];
              $commision1=$rm['commision'];
              $commision=$crate1*$total/100;
              $status1=$rm['status'];
            }

            $q="update booking set hours='$thours',fine='$fine',total='$total',commision='$commision' where bid='$bid'";
            $qrun=mysqli_query($con,$q);
            //make booked car available
            $q="update car set status='available' where reg='$reg1'";
            $qrun=mysqli_query($con,$q);
    
}




 
    //echo "$tx"; 


 ?>

   <div id="main-wrapper">
   <center> 
        <h2>Admin Panel</h2>
        <h3>Car Booking Return Form</h3>
       
   </center>
   <form class="myform" action="adminreturn.php" method="post">
        <label ><b>Booking ID:</b></name>
        <input type="text" name="bid"  >
        <input type="submit" name="submit" value="Submit" >
        <input type="submit" name="back1" value="Back" >
        <br>
        <label for=""></label>
        <br>

<?php
if(isset($_POST['submit'])){
    $bid=$_POST['bid'];
    $q="select * from booking where bid='$bid'";
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
      echo "<label><b>Booking ID:&nbsp;<font color=blue>$bid1</font></b></label>
      <br>
      <label><b>Username:&nbsp;<font color=blue>$uid1</font></b></label>
        <br>
        <label><b>Agent:&nbsp;<font color=blue>$aid1</font></b></label>
        
        <label><b>&nbsp;&nbsp;&nbsp;Car Reg No.:&nbsp;<font color=blue>$reg1</font></b></label>
        <br>
        <hr>";

        echo "<label><b>Booking Date:&nbsp;<font color=blue>$bdate1</font></b></label>
        
        
        <label><b>Booking Time:&nbsp;<font color=blue>$btime1</font></b></lavel>
        
        <br>
        <label><b>Return  Date:&nbsp;<font color=blue>$rdate1</font></b></label>
        
        
        <label><b>Return  Time:&nbsp;<font color=blue>$rtime1</font></b></label>
        
        <br>
        <label><b>Actual Return Date:&nbsp;<font color=blue>$adate1</font></b></label>
        <input name='adate' type='date'  value=$adate1/>
        <br>
        <label><b>Actual Return Time:&nbsp;<font color=blue>$atime1</font></b></label>
        <input name='atime' type='time'  value=$atime1/>
        <br>
        
        <hr>";

        echo "<label><b>&nbsp;Rate/hr<font color=red> $rate1 </font></b></label> 
        <label><b>&nbsp;&nbsp;Hours-Used<font color=red> $hours1</font></b></label> 
        <label><b>&nbsp;&nbsp;Fine<font color=red> $fine1 </font></b></label> 
        <br>
        <label><b>&nbsp;Total<font color=red> $total1 </font></b></label> 
      
        <label><b>&nbsp;&nbsp;Comm-Rate(%)<font color=red> $crate1  </font></b></label> 
        
          <label><b>&nbsp;&nbsp;Commision<font color=red> $commision1 </font></b></label> 
        <br>
        <label><b>Current Status:</b></label> 
        <label><b><font color=red>$status1</font></b></label> 
        
        <label><b> .... </b></label>
        <label><b>Change Status </b></label>
        <select name='status'>
                  
                <option value='pending'>Pending</option>
                <option value='returned'>Returned</option>
                <option value='rejected'>Rejected</option>
        </select>
        <br>
        <hr>";

        echo "<div id='cancelsubmit'>
            <center>              
                              
                <input name='update' type='submit' id='cancel_btn' value='Update'/>
               
                <input name='back1' type='submit' id='cancel_btn' value='Back'/>
            </center>
            </div>";

           
            


    }
    else{
        echo '<script>alert("Booking NOT Found ")</script>';
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