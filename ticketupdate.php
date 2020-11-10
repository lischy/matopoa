<?php
if (!isset($_SESSION)) {
    session_start();
    }
$sqlticket = "INSERT INTO ticket(T_date, T_dest, T_payable, T_seats,reg_no) VALUES ('$travelDate','$travelDest','$payableFare','$seatsselected','$numberPlate')";

if ($conn->query($sqlticket) === TRUE) {
    echo "Updated successfully";
    $last_id= $conn->insert_id;
    $_SESSION['last_id'] = $last_id;
    //redirect to ticket on success;
    header("Location:./ticket.php");
} else {
    echo "Error updating record: " . $conn->error;
  }