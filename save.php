<?php
  

  $owner_name = $_POST['owner_name'];
  $vehicle_name = $_POST['vehicle_name'];
  $vehicle_number = $_POST['vehicle_number'];
  $entry_date = $_POST['entry_date'];
  $exit_date = $_POST['exit_date'];
  $amount = $_POST['amount'];
  $pay_now = $_POST['pay_now'];
  $status = $_POST['status'];
  $update_record = $_POST['update_record'];


  $conn = Mysqli_connect("localhost", "root", "", "parking_project") or die("conection failed!");
  $sql = "iNSERT INTO vehicle_info(Owner_name, Vehicle_name, Vehicle_number, Entry_date, Exit_date , Amount, Pay_now, Status, Update_record) VALUES('{$owner_name}','{$vehicle_name}','{$vehicle_number}','{$entry_date}','{$exit_date}','{$amount}','{$pay_now}','{$status}','{$update_record}')";
  $result = mysqli_query($conn, $sql) or die("query Failed");
  
  /*header("location: http://localhost/project/index.php");
  mysqli_close($conn);*/

?>