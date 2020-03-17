<?php
$id = $_POST['id'];
include '../../database/config.php';

$id = mysqli_real_escape_string($conn, $_POST['id']);
$route = mysqli_real_escape_string($conn, $_POST['routename']);
$amount = mysqli_real_escape_string($conn, $_POST['amount']);





$sql = "UPDATE routes SET id = '$id', routename = '$route', amount='$amount' WHERE id='$id'";

if ($conn->query($sql) === TRUE) {
  header("location:../addRoute.php");
} else {
  header("location:../addRoute.php");
}




$conn->close();
?>