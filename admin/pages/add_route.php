<?php
date_default_timezone_set('Africa/Nairobi');
include '../../database/config.php';
$id = trim(mysqli_real_escape_string($conn, $_POST['id']));
$name = trim(mysqli_real_escape_string($conn, $_POST['routename']));
$amount = trim(mysqli_real_escape_string($conn, $_POST['amount']));




$sql = "INSERT INTO routes (id, routename, amount) VALUES ('$id', '$name', '$amount')";


if ($conn->query($sql) === TRUE) {
  header("location:../addRoute.php");
} else {
  $error = $conn->error;
  echo  "Error" . $error;
  header("location:../addRoute.php");
}



$conn->close();
?>