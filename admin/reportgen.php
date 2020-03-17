<?php 
    include '../database/config.php';
    $noPlate =$_POST['numberplate'];
    $scheduled = $_POST['dayForReport'];
$sql = "SELECT * FROM trip WHERE registration_no='$noPlate' AND date_time LIKE '%$scheduled%'";
$result = $conn->query($sql);
$output = '';


if ($result->num_rows > 0) {
    // output data of each row
       
     
                                           while($row = $result->fetch_assoc()) 
                                           {
                                             $seats=14-$row['seatsAvailable'];
                                            $output .= '
                                                <td>'.$row["registration_no"].'</td>
                                                <td>'.$row["fare"]*$seats.'</td>
                                                <td>'.$row["routeid"].'</td>';
                                           };
    
} else {
    $output .= '<li><a href="#" class="text-bold text-italic"><h1>No Mattatu Scheduled</h1></a></li>';

}

$data = array(
    'notification' => $output,
 );
 echo json_encode($data);
 
$conn->close();

