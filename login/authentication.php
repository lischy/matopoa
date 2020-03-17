<?php
include '../database/config.php';
if(isset($_POST['admin'])){
	$myusername = trim(mysqli_real_escape_string($conn, $_POST['name']));
	$mypassword = trim(mysqli_real_escape_string($conn, $_POST['password']));
	
	$sql = "SELECT * FROM adminis WHERE name ='$myusername 'AND password ='$mypassword'";
	$result = $conn->query($sql);
	
	if ($result->num_rows > 0) {
	
		while($row = $result->fetch_assoc()) {
	   
		session_start();
		$_SESSION['login'] = true;
		$_SESSION['name'] = $row['name'];
		$_SESSION['email'] = $row['email'];
		
	
		
		header("location:../admin/vehicles.php");
		
	
		}
	} else {
		 header("location:http://localhost/MatPoa/login/index.html");
	
		$error = $conn->error;
		echo $error;
	
	}
}
elseif(isset($_POST['commuterSignin'])){
	$commuterusername = trim(mysqli_real_escape_string($conn, $_POST['username']));
	$commuterpassword = trim(mysqli_real_escape_string($conn, $_POST['commpass']));
	echo $myusername."  " . $commuterusername;

	$sqlcomm = "SELECT * FROM commuter WHERE UserName ='$commuterusername 'AND CommuterPassword ='$commuterpassword'";
	$result = $conn->query($sqlcomm);
	
	if ($result->num_rows > 0) {
	
		while($row = $result->fetch_assoc()) {
			$_SESSION['logged_in']="yes";
			echo "success";
			header("location:http://localhost/MatPoa/Bookings.php");
		}
	}else{
		$error = $conn->error;
		echo $error;
	}



}


$conn->close();

?>