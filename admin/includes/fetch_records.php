<?php
include '../database/config.php';

$schools = 0;
$students = 0;
$drivers = 0;
$routes = 0;
$buses = 0;
$notice = 0;

$sql = "SELECT * FROM schools";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
   
    while($row = $result->fetch_assoc()) {
     $schools++;
    }
} else {

}

$sql = "SELECT * FROM users WHERE role = 'student'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
   
    while($row = $result->fetch_assoc()) {
     $students++;
    }
} else {

}


$sql = "SELECT * FROM drivers";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
   
    while($row = $result->fetch_assoc()) {
     $drivers++;
    }
} else {

}

$sql = "SELECT * FROM routes";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
   
    while($row = $result->fetch_assoc()) {
     $routes++;
    }
} else {

}

$sql = "SELECT * FROM buses";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
   
    while($row = $result->fetch_assoc()) {
     $buses++;
    }
} else {

}


$sql = "SELECT * FROM notices";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
   
    while($row = $result->fetch_assoc()) {
     $notice++;
    }
} else {

}



$conn->close();
?>