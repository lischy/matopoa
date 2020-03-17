<?php
date_default_timezone_set('Africa/Nairobi');
include '../../database/config.php';
$first_name = ucwords(mysqli_real_escape_string($conn, $_POST['first_name']));
$last_name = ucwords(mysqli_real_escape_string($conn, $_POST['last_name']));
$pnumber = mysqli_real_escape_string($conn, $_POST['pnumber']);
$national_id = mysqli_real_escape_string($conn, $_POST['national_id']);
$email = mysqli_real_escape_string($conn, $_POST['email']);
$phone = mysqli_real_escape_string($conn, $_POST['phone']);
$location = mysqli_real_escape_string($conn, $_POST['location']);
$gender = mysqli_real_escape_string($conn, $_POST['gender']);
$address = ucwords(mysqli_real_escape_string($conn, $_POST['address']));
$priority = mysqli_real_escape_string($conn, $_POST['priority']);




$sql = "SELECT * FROM clients WHERE email = '$email'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {

    while($row = $result->fetch_assoc()) {
    $sameemail = $row['email'];
	if ($sameemail == $email) {
	 header("location:../clients.php");	
	 
	}
	else{
		
	}
	
	}
	
    }
 else {

$sql = "INSERT INTO clients (first_name, last_name, pnumber,national_id ,email, phone, location, gender, address,priority, role)
VALUES ('$first_name', '$last_name', '$pnumber','$national_id', '$email', '$phone', '$location', '$gender', '$address', '$priority', 'client' )";


if ($conn->query($sql) === TRUE) {
  header("location:../clients.php");
} else {
  header("location:../clients.php");
}


}

$conn->close();
?>