<?php

   echo $vehicle_number = $_GET['vehicle_number']; 
   
    $conn = Mysqli_connect("localhost", "root", "", "parking_project") or die("conection failed!");
    $sql = "DELETE FROM vehicle_info where Vehicle_number = '{$vehicle_number}'";
    $result = mysqli_query($conn, $sql) or die("query Failed");
   /* header("location: http://localhost/project/index.php");
    mysqli_close($conn);*/
?>