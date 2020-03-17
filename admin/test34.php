<?php 
include '../database/config.php';
$route =  $_POST['routeid'];
$NoPlate =  $_POST['registration_no'];
 $day =  $_POST['regDay'];
$time =  $_POST['regTime'];
$fare =  $_POST['fare'];
$d=strtotime("$time $day");




$sql = "insert into trip (routeid,registration_no,date_time,fare) values ('$route','$NoPlate','$day $time','$fare')";

if ($conn->query($sql)===TRUE) {
	header("location:test.php");

	# code...
}else{
	header("location:test.php");

}

$conn->close();
?>
