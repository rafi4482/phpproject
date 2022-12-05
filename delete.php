<?php
    require "dbconfig/config.php";
    $id=$_GET['id'];
    $q="Delete from user where username='$id'";
    $qrun=mysqli_query($con,$q);
    echo "id="."$id";
    if($qrun)
        echo '<script>alert("Record Deleted")</script>';
    else
    echo '<script>alert("Sorry Failed to Delete")</script>';
?>