<?php 
$update_status= "SELECT * FROM trip WHERE registration_no='$numberPlate' AND date_time='$travelDate'";
       $resultsupdate =$conn->query($update_status);
       if(!$resultsupdate){
        $error = $conn->error;
        echo $error;
    }else{
      $numRows = $results->num_rows;
       echo $numRows;
      
  }
       while($row=$resultsupdate->fetch_assoc()){
        if($row['seatsAvailable'] <= 0){
          $update_query_status = "UPDATE trip SET bookingstatus='closed' WHERE registration_no='$numberPlate' AND date_time='$travelDate'";
          if($conn->query($update_query_status )===TRUE){
            echo "bus full";
          }
          else{
            echo "Error updating record: " . $conn->error;
          }
        }
       }
  