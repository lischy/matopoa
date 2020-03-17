<?php 

include '../database/config.php';
$name = mysqli_real_escape_string($conn, $_POST['name']);
$password= mysqli_real_escape_string($conn, $_POST['password']);
$email = mysqli_real_escape_string($conn, $_POST['email']);
    
    $sql = "INSERT INTO adminis (name, password, email) VALUES ('$name', '$password', '$email')";


   if ($conn->query($sql) === TRUE) {
      header("location:addAdmin.php");
    } else {
      echo "$password";
    }
    

?>