<?php
$pnumber = $_POST['client_id'];
include '../../database/config.php';

$first_name = ucwords(mysqli_real_escape_string($conn, $_POST['first_name']));
$last_name = ucwords(mysqli_real_escape_string($conn, $_POST['last_name']));
$pnumber = mysqli_real_escape_string($conn, $_POST['pnumber']);
$email = mysqli_real_escape_string($conn, $_POST['email']);
$phone = mysqli_real_escape_string($conn, $_POST['phone']);
$gender = mysqli_real_escape_string($conn, $_POST['gender']);
$location = mysqli_real_escape_string($conn, $_POST['location']);
$address = ucwords(mysqli_real_escape_string($conn, $_POST['address']));
$priority = mysqli_real_escape_string($conn, $_POST['priority']);

$sql = "SELECT * FROM clients WHERE email = '$email' AND pnumber !='$pnumber'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {

    while($row = $result->fetch_assoc()) {
    $sem = $row['email'];
	$sph = $row['phone'];
	if ($sem == $email) {
	 header("location:../edit_client.php?sid=$pnumber");	
	}else{
	
	if ($sph == $phone) {
	 header("location:../edit_client.php?sid=$pnumber");	
	}else{
		
	}
	
	}
	
    }
} else {

$sql = "UPDATE clients SET first_name = '$first_name', last_name = '$last_name', pnumber='$pnumber', email='$email',phone = '$phone', gender = '$gender', location = '$location', address='$address', priority = '$priority' WHERE pnumber='$pnumber'";

if ($conn->query($sql) === TRUE) {
  header("location:../clients.php?sid=$pnumber");
} else {
  header("location:../edit_client.php?sid=$pnumber");
}


}

$conn->close();
?>