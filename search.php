<?php 
if (!isset($_SESSION)) {
    session_start();
    }
include './database/config.php';
$seats =  $_POST['seats'];
if(isset($_POST["view"]))
{
    $seats = intval($_POST['seatsBooking']);
    $numberPlate =  $_POST['numberPlate'];
    $travelDate =  $_POST['bookingtime'];
    $seatsselected =  intval($_POST['seatsselected']);
    $payableAmount =$_POST['payable'];

   $update_query = "UPDATE trip SET seatsAvailable =$seats-$seatsselected WHERE registration_no='$numberPlate' AND date_time='$travelDate'";
   if($conn->query($update_query )===TRUE){
    echo "Booked Successfuly";
    
} else {
    echo "Error updating record: " . $conn->error;
}
   
}
if(isset($_POST['search'])){
    $route =  $_POST['route'];
    $travelDate =  $_POST['travelDate'];
    $sql = "SELECT * FROM `trip` WHERE date_time LIKE '%$travelDate%' AND routeid='$route' AND seatsAvailable >0";
$result = $conn->query($sql);
?>
       <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
       <style>
       input {
      border-top-style: hidden;
      border-right-style: hidden;
      border-left-style: hidden;
      border-bottom-style: hidden;
      background-color: #eee;
       }
    input:focus, textarea:focus, select:focus{
        outline: none;
    }
</style>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>


<?php

if ($result->num_rows > 0) {
    // output data of each row
    echo'<table class="table">';
    echo'<thead>';
        echo'<tr>';
            echo'<th scope="col">Number Plate</th>';
            echo'<th scope="col">Route</th>';
            echo'<th scope="col">Seats Available</th>';
            echo'<th scope="col">Fare</th>';
            echo'<th scope="col">Time</th>';
            echo'<th scope="col">Action</th>';
        echo'</tr>';
    echo'</thead>';
     
                                           while($row = $result->fetch_assoc()) 
                                           {
                                            $time = $row["date_time"];
                                            
                                     echo'<form action="Bookings.php" method="post">';
        
    echo'<tbody>';
        echo'<tr>';
            echo'<td ><input type="text" name="numberPlate" value="'.$row['registration_no'].'" readonly></td>';
            echo'<td ><input type="text" name="route" value="'.$row["routeid"].'" readonly></td>';
            echo'<td ><input type="text" name="seatsAvailable" value="'.$row["seatsAvailable"].'" readonly></td>';
            echo'<td ><input type="text" name="fare" value="'.$row["fare"].'" readonly></td>';
            echo'<td ><input type="text" name="time" value="'.$time = date("H:i:s",strtotime($time)).'" readonly></td>';
            echo'<input type="hidden" name="dateTime" value="'.$row["date_time"].'">';
            echo'<td><input type="submit" value="Book" name="bookseat"></td>';
        echo'</form>';
        echo'</tr>';
    echo'</tbody>';
  

                                            
                                            
                                           };
  echo'<tfoot>';
        echo'<tr>';
            echo'<th scope="col">Number Plate</th>';
            echo'<th scope="col">Route</th>';
            echo'<th scope="col">Seats Available</th>';
            echo'<th scope="col">Fare</th>';
            echo'<th scope="col">Time</th>';
            echo'<th scope="col">Action</th>';
        echo'</tr>';
    echo'</tfoot>';
echo'</table>';

                                           


} else {
    echo '<li style="list-style:none;"><a href="#" class="text-bold text-italic"><h1>No Mattatu Scheduled</h1></a></li>';
    echo'<a href="index.php">Home</a>';

}


}
else{
    header("Location:http://localhost/MatPoa/index.php");
}

 
$conn->close();