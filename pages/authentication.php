<?php
include '../database/config.php';
$myusername = mysqli_real_escape_string($conn, $_POST['name']);
$mypassword = mysqli_real_escape_string($conn, $_POST['password']);


$sql = "SELECT * FROM admin WHERE name = '$myname' AND password = '$mypassword' ";
$result = $conn->query($sql);

if ($result->num_rows > 0) {

    while($row = $result->fetch_assoc()) {
   
	session_start();
	$_SESSION['login'] = true;
	$_SESSION['name'] = $row['name'];
	$_SESSION['email'] = $row['email'];
	

	
	header("location:../admin/index.php");

	

    }
} else {echo "hghg";
	// header("location:../index.php?message=invalid_details");



}}

$conn->close();

?>