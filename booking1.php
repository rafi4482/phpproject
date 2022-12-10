<?php
require "dbconfig/config.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="board.css">

</head>
<body>
<form  action="agentboard.php" method="post">
   <?php 
   session_start();
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
    //echo "$status[$i]"."<br>";
    if($status[$i]=="available")
      $statuslabel[$i]="Rent"."&nbsp;"."Now";
    else
      $statuslabel[$i]="Unavailable";  
   }

   for($j=1;$j<=$i;$j++)
   {
    ?>
    <div class="mydiv1">
    <label></label> <br>
    <img src="image/<?php echo "$image[$j]"?>" width="300" height="200"/>
    
    <label style="color:yellow;font-size:18px;">&nbsp; &nbsp;<?php echo "$year[$j]"?>&nbsp;<?php echo "$company[$j]"?>&nbsp;<?php echo "$model[$j]"?> </label> 
    <br>
    <label ><font color="lightgreen" size=10> &nbsp;<?php echo "$rate[$j]"?></font><font color="white">/hour</font></label> 
    <br>
    <?php
    if($status[$j]=="available"){ 
        $_SESSION['reg']=$reg[$j];
        $_SESSION['rate']=$rate[$j];
       echo "<a id='mybtn1' href='agentboard.php?id=$reg[$j]'>$statuslabel[$j]</a>";
    }
    else{
      echo "<a id='mybtn1' href='#'>$statuslabel[$j]</a>";
   
    }
    ?>
    <br>
    
   
     
   </div>
    
<?php
   }
   ?>
</form>

   
</body>
</html>