<?php
require "dbconfig/config.php";
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Booking Form</title>
    <link rel="stylesheet" href="test.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"> 
    <link rel="stylesheet" href="style1.css">
</head>
<body>
<label> <font color=red size=4>&nbsp;&nbsp;Dhaka</font><font size=4>Chaka</font> </label>
<?php
if(isset($_GET['id'])){
  $reg= $_GET['id'];
  $q="select * from car where reg='$reg'";
  $qrun=mysqli_query($con,$q);
  while($row=mysqli_fetch_assoc($qrun)){
    $company1=$row["company"];
    $type1=$row["type"];
    $year1=$row["year"];
    $model1=$row["model"];
    $reg1=$row["reg"];
    $rate1=$row["rate"];
    $status1=$row["status"];
    $imagename=$row["image"];
    echo "$company1"."$type1";
  }
  }
  ?>
</body>
</html>