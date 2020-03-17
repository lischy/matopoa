

<?php
include "config.php";

$fname = ucwords(mysqli_real_escape_string($conn, $_POST['fname']));
$lname = ucwords(mysqli_real_escape_string($conn, $_POST['lname']));
$username = mysqli_real_escape_string($conn, $_POST['username']);
$phoneNumber = mysqli_real_escape_string($conn, $_POST['phoneNumber']);
$password = mysqli_real_escape_string($conn, $_POST['password']);
$kinName = mysqli_real_escape_string($conn, $_POST['kinName']);
$kinPhone = mysqli_real_escape_string($conn, $_POST['kinPhone']);



$sql = "SELECT * FROM commuter WHERE cellNumber = '$phoneNumber' OR UserName ='$username'";
$result = $conn->query($sql);

if ($result->num_rows > 0) { 

    while($row = $result->fetch_assoc()) {
    $samephone = $row['cellNumber'];
	$sameusername = $row['UserName'];
	if ($samephone == $phoneNumber) {
	 echo "there's such a phone number";	
	}else{
	
	if ($sameusername == $username) {
	 echo "such a user already exists";
	}else{
		
	}
	
	}
	
    }
} else {

$sql = "INSERT INTO commuter(`CellNumber`, `FirstName`, `LastName`, `UserName`, `CommuterPassword`, `KinName`, `KinCellPhone`) VALUES ('$phoneNumber','$fname','$lname','$username','$password','$kinName','$kinPhone')";

if ($conn->query($sql) === TRUE) {
  echo "User created";
} else {
  echo "could not create user";
}


}

$conn->close();
?>