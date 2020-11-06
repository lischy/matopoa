<?php 
if (!isset($_SESSION)) {
    session_start();
if(isset($_SESSION['json'])){
  // echo $_SESSION['json'];
  $data= json_decode($_SESSION['json']);
  // echo "\n";
 
  // echo "\n";
  // echo $data->routeid;
  // echo "\n";
  // echo $data->registration_no;
  // echo "\n";
  // echo $data->date_time;
  // echo "\n";
  // echo $data->fare;
  // echo "\n";
  // echo $data->bookingstatus;
  // echo "\n";
  // echo $data->seatsAvailable;
}
    }
    include './database/config.php';
    if(isset($_POST['continue'])){
      
      $seats=$_POST['seatsAvailable'];
      $seatsselected=$_POST['selectedSeats'];
      $numberPlate=$_POST['noPlate'];
      $travelDate=$_POST['date_time'];
      $fare=$_POST['fare'];
      $fromTo=$_POST['route'];
      
      $obj1=(object)[
        "SeatsAvailable"=>$seats,
        "SeatsSelected"=>$seatsselected,
        "BusPlate"=>$numberPlate,
        "TravelDate"=>$travelDate,
        "Destination"=>$fromTo,
        "Fare"=>$fare
      ];
      $constructedJson =json_encode($obj1);
      $_SESSION['bookingJson'] = $constructedJson;

      //redirect to payment.
      header("Location:./payment.php");

    }else{
      //destroy the whole session and completely destroy the session.
      if(isset($_SESSION['json'])){
        $_SESSION = array();
// If it's desired to kill the session, also 
// delete the session cookie. 
// Note: This will destroy the session, and 
// not just the session data! 
if (ini_get("session.use_cookies")) { 
  $params = session_get_cookie_params(); 
  setcookie(session_name(), '', time() - 42000, 
      $params["path"], $params["domain"], 
      $params["secure"], $params["httponly"] 
  ); 
} 

// Finally, destroy the session. 
session_destroy();
      }

    }
    ?>
    <head>
	<title>Commuter Login</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="./login/images/icons/loginicon.png"/> 
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="./login/vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="./login/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="./login/vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="./login/vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="./login/vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="./login/vendor/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="./login/vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="./login/css/util.css">
	<link rel="stylesheet" type="text/css" href="./login/css/main.css">
<!--===============================================================================================-->
     <style type="text/css">
    /* The Modal (background) */
.modal {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  padding-top: 100px; /* Location of the box */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
}

/* Modal Content */
.modal-content {
  position: relative;
  background-color: #fefefe;
  margin: auto;
  padding: 0;
  border: 1px solid #888;
  width: 80%;
  box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2),0 6px 20px 0 rgba(0,0,0,0.19);
  -webkit-animation-name: animatetop;
  -webkit-animation-duration: 0.4s;
  animation-name: animatetop;
  animation-duration: 0.4s
}

/* Add Animation */
@-webkit-keyframes animatetop {
  from {top:-300px; opacity:0} 
  to {top:0; opacity:1}
}

@keyframes animatetop {
  from {top:-300px; opacity:0}
  to {top:0; opacity:1}
}

/* The Close Button */
.close {
  position:absolute;
  right: 0px;
  color: white;
  float: right;
  font-size: 28px;
  font-weight: bold;
}

.close:hover,
.close:focus {
  color: #000;
  text-decoration: none;
  cursor: pointer;
}

.modal-header {
  padding: 2px 16px;
  background-color: #5cb85c;
  color: white;
}

.modal-body {padding: 2px 16px;}

.modal-footer {
  padding: 2px 16px;
  background-color: #5cb85c;
  color: white;
  justify-content: center;
}
a{
  style:none;
}
.button {
  font: bold 11px Arial;
  text-decoration: none;
  background-color: #EEEEEE;
  color: #333333;
  padding: 2px 6px 2px 6px;
  border-top: 1px solid #CCCCCC;
  border-right: 1px solid #333333;
  border-bottom: 1px solid #333333;
  border-left: 1px solid #CCCCCC;
}
a.login ,a.sign_up{
  display: block; padding: 15px 20px; line-height: .8em;   border: 2px solid rgba(0,0,0,.2);
    font-weight: 700; font-size: 15px;display: flex; justify-content: center;margin: 10px auto;
}
#tripdetails{
  display:block;
}
form{
  width:100%;
  display:flex;
  justify-content:center;
}
input{
  display:block;
  text-align:center;
  width:80%;
  margin: 20px 100px;
}
input[type=number]::-webkit-inner-spin-button,
input[type=number]::-webkit-outer-spin-button{
  opacity:1;
  -webkit-appearance: inner-spin-button !important;
}

    </style>
    </head>
    <body>
      
<!-- The Modal -->
<div id="myModal" class="modal">

  <!-- Modal content -->
  <div class="modal-content">
    <div class="modal-header" style="display: flex; justify-content: center;">
      <span class="close">&times;</span>
      <h2>Book a seat.</h2>
    </div>
    <div class="modal-body" id="modal-body" style="display: flex; justify-content: center; padding-top: 50px; padding-bottom: 50px;">
      <form method="post">
        <P><h3>Please login to continue.</h3></P>
        <a href="./login/clogin.html" class="button login" style="display: block; padding: 15px 20px; line-height: .8em;   border: 2px solid rgba(0,0,0,.2);
    font-weight: 700; font-size: 15px;display: flex; justify-content: center;">Login</a>
        <a href="./commuter_sign_up/Comutter_regForm" class="button sign_up">Sign up</a>      
      </form>
    </div>
    <div class="modal-footer" style="text-align:center">
      <button type="button" id="btn" class="btn btn-default" id="bookticket"  background-color: #5cb85c;>
      <a href="" class="button sign_up">Continue as guest.</a>
      </button>

    </div>
  </div>

</div>
<section>
<form action="" id="tripdetails" method="post"> 
<input type="text" readonly  name="route" id="route" value="<?php echo $data->routeid ; ?>" >
<input type="text" readonly  name="noPlate" id="noPlate" value="<?php  echo $data->registration_no;?>">
<input type="text" readonly  name="date_time" id="date_time" value="<?php  echo $data->date_time;?> ">
<input type="text" readonly name="fare" id="fare" value="<?php  echo $data->fare;?> ">
<input type="number" min=1 max="<?php echo $data->seatsAvailable;?>" required name="selectedSeats">
<input type="hidden" value="<?php echo $data->seatsAvailable;?>" name="seatsAvailable">
<input type="submit" value="continue" name="continue">
</form>

</section>
<!-- - - - - -end- - - - -  -->
<br><br> <br>


    <?php
if(isset($_POST['bookseat'])){
    $id=$_POST['route'];
    $time=$_POST['dateTime'];

$sql ="SELECT * FROM `trip` WHERE routeid ='$id' AND date_time LIKE '%$time%'";
$results =$conn->query($sql);

if(!$results){
    $error = $conn->error;
    echo $error;
}else{
    $numRows = $results->num_rows;
    // echo $numRows;
    
}
while ($row = $results->fetch_assoc()) { 
    echo " the json " .json_encode($row);
    $myJSON = json_encode($row);
    $_SESSION['json'] = $myJSON;
    ?>


<?php

}
if(!isset($_SESSION['logged_in'])){
    echo '<script type="text/JavaScript">
            var modal = document.getElementById("myModal");
            modal.style.display = "block";           
            </script>';
        }

      
        ?>
        
        <script>
            // Get the <span> element that closes the modal
            var span = document.getElementsByClassName("close")[0];
            var btnguest = document.getElementById("btn");
            // When the user clicks on <span> (x), close the modal
                span.onclick = function() {
                modal.style.display = "none";
                };
                btnguest.onclick = function() {
                modal.style.display = "none";
                };

                // When the user clicks anywhere outside of the modal, close it
                window.onclick = function(event) {
                if (event.target == modal) {
                    modal.style.display = "block";
                };
                };
        </script>
        <?php } ?>




