<?php
require "dbconfig/config.php";
?>


<!DOCTYPE html>
<html lang="en">
<head>
    
    <title>Agent Panel </title>
    <div><font color=white>Welcome&nbsp; </font> <font color=yellow>  <label name="username" id="username1"></label></font></div>  
    <link rel="stylesheet" href="admin.css">
    <link rel="stylesheet" href="board.css">
</head>
<body style="background-color:#34495e">
<form class="myformadmin" action="agentboard.php" method="post">
    <center><h2><font color=white>Agent Panel</font></h2></center>
    
    <div id="firstdiv">
         <h3>Dashboard </h3>
        
         <input name="profile" type="submit" id="user" value="Profile"> <br>
         <input name="booking" type="submit" id="user" value="Booking"> <br>
         <input name="history" type="submit" id="car" value="History"><br>
         <input name="invoice" type="submit" id="car" value="Invoice"><br>
         <input name="logout" type="submit" id="logout" value="Logout"><br>
       </div>
       
            
        

       <?php
        session_start();
        if(isset($_POST['invoice'])){
            $username1=$_SESSION['username'];
            echo "<script>
            window.location.href='agentinvoice.php'
            </script>";
        }


        if(isset($_POST['history'])){
         $username1=$_SESSION['username'];
          
         $i=0;   
      echo "<div id='seconddiv'>
      <table id='mytable'>
       <tr>
         <th>ID</th>
         <th>Username</th>
         <th>Car Reg</th>
         <th>Booking Date</th>
         <th>Booking Time</th>
         <th>Schedule Return Date</th>
         <th>Schedule Return Time</th>
         <th>Actual Return Date</th>
         <th>Actual Return Time</th>
         <th>Hours Used</th>
         <th>Rate per Hour</th>
         <th>Fine</th>
         <th>Total Bill</th>
         <th>Commision Rate</th>
         <th>Commision</th>
         <th>status</th>
        </tr>"
          ?>
     
     <?php
         $i=0;
         $aid=$_SESSION['username'];
         //echo "aid="."$aid";
         $q="select * from booking where aid='$aid'";
         $qrun=mysqli_query($con,$q);
        while($row=mysqli_fetch_assoc($qrun)){
          $i++;
          $j="edit"."$i";
         echo "<tr>
         <td>".$row["bid"]."</td>
         <td>".$row["uid"]."</td>
         <td>".$row["reg"]."</td>
         <td>".$row["bdate"]."</td>
         <td>".$row["btime"]."</td>
         <td>".$row["rdate"]."</td>
         <td>".$row["rtime"]."</td>
         <td>".$row["adate"]."</td>
         <td>".$row["atime"]."</td>
         <td>".$row["hours"]."</td>
         <td>".$row["rate"]."</td>
         <td>".$row["fine"]."</td>
         <td>".$row["total"]."</td>
         <td>".$row["crate"]."</td>
         <td>".$row["commision"]."</td>
         <td>".$row["status"]."</td>"
         ?>
         
      </tr>
     
     <?php
    echo"</div>";
     }

 }



       if(isset($_POST['profile'])){
        $username1=$_SESSION['username'];
        //echo "inside history="."$username1";
        $q="select * from agent where email='$username1'";
        $qrun=mysqli_query($con,$q);
        //$i=0;  
            
           $i=0;
          while($row=mysqli_fetch_assoc($qrun)){
            $i++;
            $j="edit"."$i";
           echo "<div id='seconddiv'>";
           echo "<br><label><b>&nbsp;&nbsp;&nbsp;&nbsp;ID:</b></label>
           <label>".$row["id"]."</label><br><br> 
           <label><b>&nbsp;&nbsp;&nbsp;&nbsp;Name:</b></label>
           <label>".$row["name"]."</label><br><br>
           <label><b>&nbsp;&nbsp;&nbsp;&nbsp;Address:</b></label>
           <label>".$row["address"]."</label><br><br>
           <label><b>&nbsp;&nbsp;&nbsp;&nbsp;Mobile:</b></label>
           <label>".$row["mobile"]."</label><br><br>
           <label><b>&nbsp;&nbsp;&nbsp;&nbsp;Email:</b></label>
           <label>".$row["email"]."</label><br><br>
           <label><b>&nbsp;&nbsp;&nbsp;&nbsp;Password:</b></label>
           <label>".$row["password"]."</label><br><br>
           <label><b>&nbsp;&nbsp;&nbsp;&nbsp;Commision(%):</b></label>
           <label>".$row["commision"]."</label><br><br>
           <label><b>&nbsp;&nbsp;&nbsp;&nbsp;Category:</b></label>
           <label>".$row["category"]."</label><br><br>"
           ?>
       <?php
      echo"</div>";
       }
    }

    if(isset($_POST['booking'])){
        echo "<script>
        window.location.href='booking1.php'
        </script>";
       
       
       }
if(isset($_GET['id'])){
    $reg=$_GET['id'];
    $_SESSION['reg']=$reg;
    $username1=$_SESSION['username'];
    echo "reguuuuuuuuuuuuuu="."$reg";
    $q="select * from car where reg=$reg";
   $qrun=mysqli_query($con,$q);
   $i=0;
   while($row=mysqli_fetch_assoc($qrun)){

    $reg[$i]=$row["reg"];
    $company[$i]=$row["company"];
    $model[$i]=$row["model"];
    $rate[$i]=$row["rate"];
    $year[$i]=$row["year"];
    $type[$i]=$row["type"];
    $image[$i]=$row["image"];
    $status[$i]=$row["status"];
  
  echo "<div id='seconddiv'>";
  echo " <br><label><b>&nbsp;&nbsp;Selected Car:</b></label><br><br>
  <label><b>&nbsp;&nbsp;Company:</b></label>
  <label>".$row["company"]."</label>
  <label><b>&nbsp;&nbsp;Model:</b></label>
  <label>".$row["model"]."</label>
  <label><b>&nbsp;&nbsp;Year:</b></label>
  <label>".$row["year"]."</label>
  <label><b>&nbsp;&nbsp;Reg No.:</b></label>
  <label>".$row["reg"]."</label>
  <label><b>&nbsp;&nbsp;Status:</b></label>
  <label>".$row["status"]."</label><br><br>
  
  </div>";

  $q="select username from user";
  $qrun=mysqli_query($con,$q);
  $i=0;
  echo " <br><br><br><br><label><b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<font color=yellow>Username:</font></b></label>";
  echo "<select name='username2' class='datetime'>";
  while($row=mysqli_fetch_assoc($qrun)){
   $i++;
   $username2=$row["username"];
   echo "<option value=$username2>$username2 </option>"; 
  }
   echo "</select>";

  echo "<br>
  <div class='divdate'>
  <label><b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<font color=yellow>Departure Date:</font></b></label>
   <input name='bdate' type='date' class='datetime'>
   <label><b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<font color=yellow>Departure Time:</font></b></label>
   <input name='btime' type='time' class='datetime'>
  <br><br>
  <label><b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<font color=yellow>Return Date:</font></b></label>
   <input name='rdate' type='date' class='datetime'>
   <label><b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<font color=yellow>Return Time:</font></b></label>
   <input name='rtime' type='time' class='datetime'>
   <br>
   <div class='bookbtn'>
   <button type='submit' name='date' >Submit</button>
   </div>
   </div>";

   }
 
}
if(isset($_POST['date'])){
    //echo "inside date";
    $reg=$_SESSION['reg'];
    //echo "$reg";
    $bdate=date('Y-m-d',strtotime($_POST["bdate"]));
    //echo "$bdate";
    $btime=$_POST['btime'];
    //echo "$btime"."<br>";
    $rdate=date('Y-m-d',strtotime($_POST["rdate"]));
    //echo "$rdate";
    $rtime=$_POST['rtime'];
    //echo "$rtime"."<br>";
    $aid=$_SESSION['username'];
    $rate=$_SESSION['rate'];
    $username2=$_POST['username2'];
   // echo "$username2";
    //$aid=$_SESSION['aid'];
    //echo "aid="."$aid";
    $q="select *  from  agent where email='$aid'";
    $qrun=mysqli_query($con,$q);
    $row = mysqli_fetch_assoc($qrun);
    $crate=$row['commision'];

    $td1=date_create($bdate);
    $td2=date_create($rdate);
    $td3=strtotime($btime);
    $td4=strtotime($rtime);
    
    $flag=0;
    
    if($td1<=$td2)
     if($td1==$td2)
       if($td3<$td4)
          $flag=1;
        else
          echo '<script>alert("Error!Same day return time must be greater than booking time")</script>';
      else
        $flag=1;
    else
        echo '<script>alert("Error!Bokking date is bigger than return date")</script>';

   if($flag==1){



    $id1="";
    $category1="";
    $q="select max(bid)  from  booking";
    $qrun=mysqli_query($con,$q);
    $row = mysqli_fetch_assoc($qrun);
    $id1=$row['max(bid)'];
    $id1++;
    //echo "id="."$id1";
    $adate="";
    $atime="";
    
    $hours=0;
    $fine=0;
    $total=0;
    
    $commision=0;
    $status="Pending";
    $q="insert into booking values('$id1','$username2','$aid', '$reg', '$bdate','$btime','$rdate','$rtime','$adate','$atime','$hours','$rate','$fine','$total','$crate','$commision','$status')";
    $qrun=mysqli_query($con,$q);
    if($qrun){
        echo "<div class='report'>
          <h2>Your booking is submitted and in Pending</h2>
          <h2>Booking ID:$id1</h2>
          <h3>Within few hours we will confirm your booking</h3>
          <h4>For more information contact 0171444666</h4>
        </div>";
        
    }
    else{
        echo '<script>alert("Error in booking submission")</script>';
    }
   }
}    
/*
  if(isset($_POST['car'])){
    $q="select * from car";
    $qrun=mysqli_query($con,$q);
    $i=0;  
    echo "<div id='seconddiv'>
    <table id='mytable'>
     <tr>
       <th>RegNo</th>
       <th>Company</th>
       <th>Model</th>
       <th>Rate</th>
       <th>Year</th>
       <th>Type</th>
       <th>Image</th>
       <th>Action</th>
      </tr>"
        ?>
   
   <?php
       $i=0;
      while($row=mysqli_fetch_assoc($qrun)){
        $i++;
        $j="edit"."$i";
       echo "<tr>
       <td>".$row["reg"]."</td>
       <td>".$row["company"]."</td>
       <td>".$row["model"]."</td>
       <td>".$row["rate"]."</td>
       <td>".$row["year"]."</td>
       <td>".$row["type"]."</td>
       <td>".$row["image"]."</td>"
       ?>
       <td> <a href="car.php?id=<?=$row['reg'];?>" id='edit_btn'>Edit</td>
    </tr>
   
   


   <?php
  echo"</div>";
   }
}
*/////////////////////////////
if(isset($_POST['logout'])){
  echo "<script> location.href='index.php'</script>" ;
 }
 
?>
   
       <div id="middiv">

       </div>

    </form>
   
<script>
  const agentname=localStorage.getItem('name');
  const agentemail=localStorage.getItem('username');
  const tx=agentname.concat("(",agentemail,")");
  document.getElementById('username1').textContent=tx;
  
</script>
<script src="script1.js"></script>   
</body>

</html>