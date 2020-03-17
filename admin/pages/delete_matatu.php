<?php
include '../../database/config.php';
$ntid = mysqli_real_escape_string($conn, $_GET['id']);

$sql = "DELETE FROM matatu WHERE regno='$ntid'";

if ($conn->query($sql) === TRUE) {
    header("location:../vehicles.php");
} else {
    header("location:../vehicles.php");
}

$conn->close();
?>
