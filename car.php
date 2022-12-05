<?php
require "dbconfig/config.php";
?>


<!DOCyear html>
<html lang="en">
<head>
    
    <title>Rafi's Car Rental</title>
    <link rel="stylesheet" href="style2.css">
</head>
<body style="background-color:#7f8c8d">

 <?php
session_start();



if(isset($_POST['imagesubmit'])){
    $imagename=$_FILES['image']['name'];
    $tmpname=$_FILES['image']['tmp_name'];
    $uploc='images/'.$imagename;
    //echo $imagename;
    $_SESSION['name']=$imagename;
    $q="insert into car(image) values('$imagename')";
   // $qrun=mysqli_query($con,$q);
   // if($qrun){
    //  echo '<script>alert("Image successful")</script>';
      
 // }
  //move_uploaded_file($tmpname,$uploc);
     
  echo "<img src='images/$imagename' width='50' height='60'>";
  //echo "<img src='image/jag1.png' class='avatar'/>";
    $company1=$_POST['company'];
    $type1=$_POST['type'];
    $year1=$_POST['year'];
    $model1=$_POST['model'];
    $reg1=$_POST['reg'];
    $rate1=$_POST['rate'];
    $status1=$_POST['status'];
    $image1=$_SESSION['name'];
}


if(isset($_POST['submit'])){
    
    $company=$_POST['company'];
    $type=$_POST['type'];
    $year=$_POST['year'];
    $model=$_POST['model'];
    $reg=$_POST['reg'];
    $rate=$_POST['rate'];
    $status=$_POST['status'];
    $image=$_SESSION['name'];

    //echo "Company="."$company";
    //echo " type="."$type";
    //echo " year="."$year";
    //echo " model="."$model";
    //echo " reg="."$reg";
    //echo " rate="."$rate";
    //echo " image="."$image";

    if((empty($company))|| (empty($year))|| (empty($model))||(empty($reg))||(empty($rate)) ){
        echo '<script>alert("one or more fields are empty")</script>';
        $company1=$_POST['company'];
        $type1=$_POST['type'];
        $year1=$_POST['year'];
        $model1=$_POST['model'];
        $reg1=$_POST['reg'];
        $rate1=$_POST['rate'];
        $status1=$_POST['status'];
        $image1=$_POST['image'];
    }
    else{
        $q="select * from car where reg='$reg'";
        $qrun=mysqli_query($con,$q);
        $rows=mysqli_num_rows($qrun);
        
         if($rows>0){
             echo '<script>alert("Reg no. already exists")</script>';
            $company1=$_POST['company'];
            $type1=$_POST['type'];
            $year1=$_POST['year'];
            $model1=$_POST['model'];
            $reg1=$_POST['reg'];
            $rate1=$_POST['rate'];
            $status1=$_POST['status'];
            $imagename=$_SESSION['name'];
            //echo "image1111="."$imagename";
           }
    else{
        $q="insert into car values('$reg','$company','$model','$rate','$year','$type','$image','$status')";
        $qrun=mysqli_query($con,$q);
        if($qrun){
            echo '<script>alert("Car insert successful")</script>';
            $company1="";
            $type1="";
            $year1="";
            $model1="";
            $reg1="";
            $rate1="";
            $image1="";
            $status1="";
            $imagename=$_SESSION['name'];
        }
        else{
            echo '<script>alert("Error in Car Insertion")</script>';
        }
    
 }
}
}
        
if(isset($_POST['delete'])){
    
    $reg1=$_POST['reg'];
    if(!empty($reg1)){
   // echo "Inside Delete Button="."$model";
    $q="Delete from car where reg='$reg1'";
    $qrun=mysqli_query($con,$q);
    //echo "id="."$id";
    if($qrun)
        echo '<script>alert("Record Deleted")</script>';
    else
        echo '<script>alert("Sorry Failed to Delete")</script>';  
    }
    else{
        echo '<script>alert("Empty:Failed to Delete")</script>';
    }
    $company1="";
    $type1="";
    $year1="";
    $model1="";
    $reg1="";
    $rate1="";
    $image1="";
    $status1="";
    $imagename="No Image";
}


if(isset($_POST['search'])){
    $reg1=$_POST['reg'];
    //echo "in searh reg1="."$reg1";
    $q="select * from car where reg='$reg1'";
    $qrun=mysqli_query($con,$q);
    if(mysqli_num_rows($qrun)>0){
        echo '<script>alert("Record found")</script>';
        while($row=mysqli_fetch_assoc($qrun)){
           $company1=$row["company"];
           $type1=$row["type"];
           $year1=$row["year"];
           $model1=$row["model"];
           $reg1=$row["reg"];
           $rate1=$row["rate"];
           $status1=$row["status"];
           $imagename=$row["image"];
           //echo "com="."$company1";
           //echo "Reg="."$reg1";
        }
    }
    else{

      echo '<script>alert("Sorry Record NOT found")</script>';
      $name1="";
      $type1="";
      $year1="";
      $model1="";
      $reg1=$_POST["reg"];;
      $rate1="";
      $status1="";
      $imagename="";
    }
        
  } 
  if(isset($_POST['add'])){
    $company1="";
    $type1="";
    $year1="";
    $model1="";
    $reg1="";
    $rate1="";
    $status1="";
    $imagename="";
  } 

  if(isset($_POST['update'])){
    $company=$_POST['company'];
    $type=$_POST['type'];
    $year=$_POST['year'];
    $model=$_POST['model'];
    $reg=$_POST['reg'];
    $rate=$_POST['rate'];
    $status=$_POST['status'];
    $image=$_SESSION['name'];
    if((empty($company))|| (empty($year))|| (empty($model))||(empty($reg))||(empty($rate)) ){
        echo '<script>alert("one or more fields are empty")</script>';
    }
    else{
    
        $q="select * from car where reg='$reg'";
        $qrun=mysqli_query($con,$q);
        if(mysqli_num_rows($qrun)>0){
            //echo "Rate hre="."$rate";
            $q="update car set company='$company',type='$type',year='$year',model='$model', reg='$reg' ,rate='$rate',image='$image',status='$status' where reg='$reg'";
            $qrun=mysqli_query($con,$q);
            echo '<script>alert("Update Successful")</script>';
            $company1="";
            $type1="";
            $year1="";
             $model1="";
            $reg1="";
             $rate1="";
             $status1="";
             $imagename="";
        }
        else{
            echo '<script>alert("User NOT exists")</script>';
        }
      }
    

   
        $company1="";
        $type1="";
        $year1="";
        $model1="";
        $reg1="";
        $rate1="";
        $status1="";
        $imagename="";
}

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
    }
    }
 ?>

   <div id="main-wrapper">
   <center> 
        <h2>Admin Panel</h2>
        <h3>Car Information Form</h3>
       
   </center>
   <form class="myform" action="<?php echo $_SERVER['PHP_SELF']?>" method="post" enctype="multipart/form-data">
       
        <label>Upload Image</label><br>
        <input type="file" name="image"><br>
        <input type="submit" id="cancel_btn" name="imagesubmit" value="Upload">
        <?php echo "$imagename"?>

        <img src="image/<?php echo "$imagename"?>" width="300" height="200"/>
      
        <br><br>
        <label><b>Company : <?php echo "$company1"?> <font color=red>*</font></b></name>
        <select name="company">
                 <option value='audi'>Audi</option>; 
                <option value='honda'>Honda</option>";
                <option value='lamborgini'>Lamborgini</option>;
                <option value='marcetizes'>Marcetizes</option>";
                <option value='porche'>Porche</option>;
                <option value='toyota'>Toyota</option>;
                <option value='others'>Others</option>;
        </select>
        <br>
        <label><b>Type : <?php echo "$type1"?><font color=red>*</font>&nbsp;</b></label> 
        <select name="type">
                 <option value='auto'>Auto</option>; 
                <option value='manual'>Manual</option>;
                <option value='both'>Both</option>;
        </select>
        <br>
        <label><b>Year : <?php echo "$year1"?> <font color=red>*</font></b></label> 
        <select name="year">
             <?php
                for($i=2000;$i<=2050;$i++)
               {
             ?>
                 <option value=<?php echo "$i" ?>><?php echo "$i" ?></option>; 
               <?php
                 }
               ?>
        </select>
        <br>
        <br>
        <label><b>Model</b></label> 
        <input name="model" year="text" class="inputvalues" value="<?php echo $model1 ?>"/>
        <br>
        
       
        <label><b>Registration No.<font color=red>*</font></b></label> 
        <input name="reg" year="reg" class="inputvalues" value="<?php echo $reg1 ?>" />
        <br>
        <label><b>Rate per Hour<font color=red>*</font></b></label> 
        <input name="rate" year="reg" class="inputvalues" value="<?php echo $rate1 ?>" />
        <br>
        
        <label><b>Status : <?php echo "$status1"?><font color=red>*</font>&nbsp;</b></label> 
        <select name="status">
                 <option value='booked'>Booked</option>; 
                <option value='avilable'>Available</option>;
                <option value='unavailable'>Unavailable</option>;
                <option value='sold'>Sold</option>;
        </select>
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
