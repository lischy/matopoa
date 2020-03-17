<?php
$regno = $_POST['regno'];
include '../../database/config.php';

$regno = ucwords(mysqli_real_escape_string($conn, $_POST['regno']));
$capacity = mysqli_real_escape_string($conn, $_POST['capacity']);
$owner = mysqli_real_escape_string($conn, $_POST['Vname']);
$phone = mysqli_real_escape_string($conn, $_POST['phone']);




$sql = "UPDATE matatu SET regno = '$regno', capacity = '$capacity', Vname='$owner', phone='$phone' WHERE regno='$regno'";

if ($conn->query($sql) === TRUE) {
  header("location:../vehicles.php?sid=$pnumber");
} else {
  header("location:../vehicles.php?sid=$pnumber");
}




$conn->close();
?>