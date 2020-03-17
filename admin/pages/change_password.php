<?php
session_start();
$_SESSION["pnumber"] = "1";

if (count($_POST) > 0) {
    $result = mysqli_query($conn, "SELECT *from techniciana WHERE pnumber='" . $_SESSION["pnumber"] . "'");
    $row = mysqli_fetch_array($result);
    if ($_POST["currentPassword"] == $row["password"]) {
        mysqli_query($conn, "UPDATE technicians set password='" . $_POST["pass1"] . "' WHERE userId='" . $_SESSION["pnumber"] . "'");
        $message = "Password Changed";
    } else
        $message = "Current Password is not correct";
}
?>
