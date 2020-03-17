<?php
include '../../database/config.php';
$routeid = mysqli_real_escape_string($conn, $_GET['id']);

$sql = "DELETE FROM routes WHERE id='$routeid'";

if ($conn->query($sql) === TRUE) {
    header("location:../addRoute.php");
} else {
    header("location:../addRoute.php");
}

$conn->close();
?>
