<?php
if (!isset($_SESSION)) {
  session_start();
if(isset($_SESSION['bookingJson'])){
$data= json_decode($_SESSION['bookingJson']);
$seats=$data->SeatsAvailable;
$seatsselected=$data->SeatsSelected;
$numberPlate=$data->BusPlate;
$travelDate=$data->TravelDate;
$travelDest=$data->Destination;
$payableFare=$data->Fare;
     }
}
include './database/config.php';
if(isset($_POST['ConfirmPayment'])){
  $update_query = "UPDATE trip SET seatsAvailable =$seats-$seatsselected WHERE registration_no='$numberPlate' AND date_time='$travelDate'";
  if($conn->query($update_query )===TRUE){
  include './print.php';
  include './ticketupdate.php'; 
} else {
  echo "Error updating record: " . $conn->error;
}

}


// if (isset($_POST['submit'])) {

//   $id = $_POST['id'];
//   $phone = $_POST['phone'];
//   $code = $_POST['code'];
//   $date = $_POST['date'];
  
//   $result =  $conn->query("SELECT Request_ID FROM requesttable ORDER BY Request_ID DESC limit 1");

//   if ($row = $result->fetch_assoc()) {
//     $last_id = $row['Request_ID'];
//     $last_id = intval($last_id);
//     $new_id = $last_id ;
//   }
//    else {
//     $new_id = 1;
//   }
//   $sql = "INSERT INTO paymentrecords (National_id, phonenumber,MpesaCode,transactiondate,requestid_fk) VALUES ('$id', '$phone', '$code', '$date','$new_id')";
//   if ($conn->query($sql) === TRUE) {

//     echo "New record created successfully";
//   } else {
//     echo "Error: " . $sql . "<br>" . $conn->error;
//   }
//   $sql2 = "INSERT INTO mpesarecords (mpesacode,transactiondate) SELECT mpesacode,transactiondate FROM paymentrecords";
//   if ($conn->query($sql2) === TRUE) {

//     echo "New record created successfully";
//   } else {
//     echo "Error: " . $sql2 . "<br>" . $conn->error;
//   }
// }

?>
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!-->
<!--<![endif]-->

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title></title>
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
  <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script> -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
  <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
  <script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
  <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
  <style>
    .container {
      display: block;
      width: 1200px;
      position: absolute;
      left: 800px;
      top: 250px;

    }

    .secondrowtitle about {
      text-align: center;
    }

    .firstrowtitle h1 {
      text-align: center;
    }

    .firstrowtitle h5 {
      text-align: center;
    }

    .navbar {
      max-height: 100px;
      position: relative;
    }

    .vl {
      border-left: 4px;
      height: 300px;
      color: orange;
    }

    .card {
      left: 300px;
      width: 500px;
      text-align: justify;
      height: 300px;
      border-radius: 10px;
      background-color: greywhite;
      bottom: 25px;
    }

    h4 {
      color: navy;
      text-decoration: underline;
    }

    #steps {
      text-decoration-style: solid;
      color: navy;
    }

    body {
      background-size: contain;
      background-image: url(images/paint.png);
      background-repeat: no-repeat;
      }
  </style>
</head>
<body>
  <div class="rowfirstrow">
    <div class="firstrowtitle">
    <img src="bus_icon_white.png" width="100" height="100" alt="" style="left:350px;  position:absolute;">
      <h1>MatPoa 3N TO SACCO</h1>
      <h5>Providing commuter services at unbeatable prices.</h5>
    </div>
  </div><br>
  <nav class="navbar navbar-expand-lg navbar-light bg-light" id="navbar">
    
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <form method="post" action="payment.php"> 
      <input type="submit" name="home" value="Home"/>
    </form>
    <?php 

if(isset($_POST['home'])){
$_SESSION["customer_id"] = "";
session_destroy();
header("Location: index.php");
$conn->close();
}?>
    </div>
    <form method="post" action="payment.php"> 
      <input type="submit" name="back" value="Cancel"/>
    </form>
    <?php 

if(isset($_POST['back'])){
$_SESSION["customer_id"] = "";
session_destroy();
header("Location: index.php");
$conn->close();
}?>
  </nav>
  <div class="big-container">
    <br><br>
    <div class="card">
      <div class="card-body">
        <h4><strong>STEPS TO MAKE PAYMENT</strong></h4>
        <p id="steps">
          <b>1.Input your valid MPESA registered ID number.<br>
            1.You will be prompted to enter your Mpesa Pin to authorise your payment request.<br>
            1.Choose Mpesa.<br>
            1.Go to your simtoolkit enter Paybill.<br>
            1.Use Account number IRKPHEJK.<br>
            1.Enter 857988 as your business number.<br>
            1.Pay amount.<br>
            1.In case of any queries/ inquiries contact....<br>
            2.Input your valid corresponding Phone number<br>
            3.Open your SIM ToolKit on your mobile phone and select MPESA.<br>
            4.Select Lipa Na MPESA and input MotherGoose MPESA Paybill No.: 123456
            and Account Number: 0755678833<br>
            5.Complete MPESA transaction and input MPESA code received in the form to the side.<br>
            6.Finish Payment
          </b>
        </p>
      </div>
    </div>
    <div class="vl"></div>
    <div class="container">
      <div class="row">
        <div class="col-xs-12 col-md-4">
          <div class="panel panel-default">
            <div class="panel-heading">
              <h3 class="panel-title">
                Payment Details
              </h3>
            </div>
            <div class="panel-body">


              <form role="form" method="POST" action="payment.php">
                <!-- <div class="form-group">
                  <label for="idNumber">
                  TRANSACTION ID NUMBER</label>
                  <div class="input-group">
                    <input type="text" class="form-control" id="cardNumber" placeholder="Valid ID Number" required autofocus name="id" />
                  </div>
                </div> -->
                <div class="form-group">
                  <label for="PhoneNumber">
                   TRANSACTION PHONE NUMBER</label>
                  <div class="input-group">
                    <input type="text" class="form-control" id="phone" placeholder="eg. 07*********" required autofocus name="phone" />
                  </div>
                </div>
                <div class="form-group">
                  <label for="mpesacode">
                    MPESA CODE</label>
                  <div class="input-group">
                    <input type="text" class="form-control" id="code" placeholder="eg. OBB0ZGHJN9" autofocus name="code" required />
                  </div>
                </div>
                <div class="form-group">
                  <label for="date">
                    DATE OF TRANSACTION</label>
                  <div class="input-group">
                    <input type="date" class="form-control" id="date" placeholder="eg. 24/04/2020" required autofocus name="date" />
                  </div>
                </div>
                <input type="submit" value="Confirm Payment" name="ConfirmPayment" class="btn btn-success btn-lg btn-block" role="button">
              </form>
            </div>
          </div>
          <br />
        </div>
      </div>
    </div>
  </div>
  <script>
    var today = new Date();
    var dd = today.getDate();
    var mm = today.getMonth() + 1; //January is 0!
    var yyyy = today.getFullYear();
    if (dd < 10) {
      dd = '0' + dd
    }
    if (mm < 10) {
      mm = '0' + mm
    }

    today = yyyy + '-' + mm + '-' + dd;
    document.getElementById("date").setAttribute("max", today);
  </script>
</body>
</html>