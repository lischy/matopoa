<?php
include '../includes/check_user.php';
include '../../database/config.php';



$sql = "UPDATE technicians SET password='pass1' WHERE pnumber='$mypnumber'";

if ($conn->query($sql) === TRUE) {
	header("location:myprofile.php");
} else {
   header("location:myprofile.php");
}

$conn->close();
?>
