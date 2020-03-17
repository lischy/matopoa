<?php
date_default_timezone_set('Africa/Nairobi');
include '../../database/config.php';
$regno = trim(mysqli_real_escape_string($conn, $_POST['regno']));
$capacity = trim(mysqli_real_escape_string($conn, $_POST['capacity']));
$name = trim(mysqli_real_escape_string($conn, $_POST['name']));
$phone = trim(mysqli_real_escape_string($conn, $_POST['phone']));




$sql = "INSERT INTO matatu (regno, capacity, Vname, phone) VALUES ('$regno', '$capacity', '$name','$phone')";


if ($conn->query($sql) === TRUE) {
  header("location:../vehicles.php");
} else {
  $error = $conn->error;
  echo  "Error" . $error;
  header("location:../vehicles.php");
}



$conn->close();
?>