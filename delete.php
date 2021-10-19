<?php  
 include 'connection.php';
 $ida =  $_GET['id'];
 $delete = "delete from regi where Id=$ida";
 $delquery = mysqli_query($con,$delete);
 if($delquery)
      { ?> <script> alert("deleted successfully");  
      location.replace('display.php')</script><?php }
// header('location:display.php');
 

 ?>
 