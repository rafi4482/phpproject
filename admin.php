<?php
require "dbconfig/config.php";
?>


<!DOCTYPE html>
<html lang="en">
<head>
    
    <title>Admin Panel </title>
    <div><font color=white>Welcome&nbsp; </font> <font color=yellow>  <span id="username1"></span></font></div>
    <link rel="stylesheet" href="admin.css">
</head>
<body style="background-color:#34495e">
    
    <center><h2><font color=white>Admin Panel</font></h2></center>
       <div id="firstdiv">
         <h3>Dashboard </h3>
         <form class="myformadmin" action="admin.php" method="post">
         <input name="user" type="submit" id="user" value="User"> <br>
         <input name="agent" type="submit" id="user" value="Agent"> <br>
         <input name="car" type="submit" id="car" value="Car"><br>
         <input name="booking" type="submit" id="booking" value="Booking"><br>
         <input name="logout" type="submit" id="logout" value="Logout"><br>
       </div>

       <?php

        
       if(isset($_POST['user'])){
        $q="select * from user";
        $qrun=mysqli_query($con,$q);
        $i=0;  
        echo "<div id='seconddiv'>
        <table id='mytable'>
         <tr>
           <th>Slno</th>
           <th>Name</th>
           <th>Mobile</th>
           <th>Email</th>
           <th>Password</th>
           <th>Status</th>
           <th>Action</th>
          </tr>"
            ?>
       
       <?php
           $i=0;
          while($row=mysqli_fetch_assoc($qrun)){
            $i++;
            $j="edit"."$i";
           echo "<tr>
           <td>".$i."</td>
           <td>".$row["name"]."</td>
           <td>".$row["mobile"]."</td>
           <td>".$row["username"]."</td>
           <td>".$row["password"]."</td>
           <td>".$row["status"]."</td>"
           ?>
           <td> <a href="user.php?id=<?=$row['username'];?>" id='edit_btn'>Edit</td>
        </tr>
       
       


       <?php
      echo"</div>";
       }
    }

    if(isset($_POST['agent'])){
      $q="select * from agent";
      $qrun=mysqli_query($con,$q);
      $i=0;  
      echo "<div id='seconddiv'>
      <table id='mytable'>
       <tr>
         <th>ID</th>
         <th>Name</th>
         <th>Address</th>
         <th>Mobile</th>
         <th>Email</th>
         <th>Commision</th>
         <th>Password</th>
         <th>Category</th>
         <th>Action</th>
        </tr>"
          ?>
     
     <?php
         $i=0;
        while($row=mysqli_fetch_assoc($qrun)){
          $i++;
          $j="edit"."$i";
         echo "<tr>
         <td>".$row["id"]."</td>
         <td>".$row["name"]."</td>
         <td>".$row["address"]."</td>
         <td>".$row["mobile"]."</td>
         <td>".$row["email"]."</td>
         <td>".$row["commision"]."</td>
         <td>".$row["password"]."</td>
         <td>".$row["category"]."</td>"
         ?>
         <td> <a href="agent.php?id=<?=$row['id'];?>" id='edit_btn'>Edit</td>
      </tr>
     
     


     <?php
    echo"</div>";
     }
  }

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

if(isset($_POST['logout'])){
  echo "<script> location.href='myhome.php'</script>" ;
 }
?>
   
       <div id="middiv">

       </div>

    </form>
   
<script>
  const adminname=localStorage.getItem('username');
  document.getElementById('username1').textContent=adminname;
</script>
<script src="script1.js"></script>   
</body>

</html>