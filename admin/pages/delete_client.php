<?php
include '../../database/config.php';
$ntid = mysqli_real_escape_string($conn, $_GET['id']);

$sql = "DELETE FROM clients WHERE pnumber='$ntid'";

if ($conn->query($sql) === TRUE) {
    header("location:../clients.php");
} else {
    header("location:../clients.php");
}

$conn->close();
?>
