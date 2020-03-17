<?php 
include '../database/config.php';
$route =  $_POST['amount'];
$NoPlate =  $_POST['NoPlate'];
 $day =  $_POST['regDay'];
$time =  $_POST['regTime'];
$fare =  $_POST['fare'];
$d=strtotime("$time $day");

echo $route;
echo $NoPlate;
echo $day;
echo $time;
echo $fare;



$sql = "insert into trip (routeid,registration_no,date_time,fare) values ('$route','$NoPlate','$day $time','$fare')";
if (mysqli_query($conn, $sql)) {
   echo"<div>";
    echo "New record created successfully";
    echo" </div>";
     echo"<button><a href='http://localhost/MatPoa/admin/schedule.php'>Back</a></button>";
 } else {
    echo "Error: " . $sql . "" . mysqli_error($conn);
 }