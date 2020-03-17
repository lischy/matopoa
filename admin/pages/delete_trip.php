<?php
include '../../database/config.php';
$trip_id = mysqli_real_escape_string($conn, $_GET['id']);

$sql = "DELETE FROM trip WHERE trip_id='$trip_id'";

if ($conn->query($sql) === TRUE) {
    header("location:../test.php");
} else {
    header("location:../test.php");
}

$conn->close();
?>
