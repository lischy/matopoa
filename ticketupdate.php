<?php
$sqlticket = "INSERT INTO ticket(T_date, T_dest, T_payable, T_seats) VALUES ('$travelDate','$travelDest','$payableFare','$seatsselected')";

if ($conn->query($sqlticket) === TRUE) {
    echo "Updated successfully";
    //redirect to ticket on success;
    header("Location:./ticket.php");
} else {
    echo "Error updating record: " . $conn->error;
  }