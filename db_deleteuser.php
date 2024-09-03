<?php   
include "db_connect.php";
 
 $mysqli = new mysqli($host, $username, $password, $database); 
 if (isset($_GET['UserID'])) {  
      $id = $_GET['UserID'];  
      $query = "DELETE FROM `users` WHERE UserID = '$id'";  
      $run = mysqli_query($mysqli,$query);  
      if ($run) {  
           header('location:userDashboard.php');  
      }else{  
           echo "Error: ".mysqli_error($conn);  
      }  
 }  
 ?> 