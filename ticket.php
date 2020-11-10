<?php
// session_start();
// if(!isset($_SESSION['customer_id'])){
//   header("Location: requestform.php");
// }
if (!isset($_SESSION)) {
  session_start();
  }
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "matpoa";

//create connection
$conn = new mysqli($servername, $username, $password, $dbname);

//check connection
if ($conn->connect_error) {
  die("connection failed:" . $conn->connect_error);
}
// echo "Successfully Connected";
echo "<br>";

if (isset($_POST['submit'])) {

  $id = $_POST['id'];
  $phone = $_POST['phone'];
  $code = $_POST['code'];
  $date = $_POST['date'];
  
  $result =  $conn->query("SELECT Request_ID FROM requesttable ORDER BY Request_ID DESC limit 1");

  if ($row = $result->fetch_assoc()) {
    $last_id = $row['Request_ID'];
    $last_id = intval($last_id);
    $new_id = $last_id ;
  }
   else {
    $new_id = 1;
  }
  $sql = "INSERT INTO paymentrecords (National_id, phonenumber,MpesaCode,transactiondate,requestid_fk) VALUES ('$id', '$phone', '$code', '$date','$new_id')";
  if ($conn->query($sql) === TRUE) {

    echo "New record created successfully";
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }
  $sql2 = "INSERT INTO mpesarecords (mpesacode,transactiondate) SELECT mpesacode,transactiondate FROM paymentrecords";
  if ($conn->query($sql2) === TRUE) {

    echo "New record created successfully";
  } else {
    echo "Error: " . $sql2 . "<br>" . $conn->error;
  }
}

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
      position: static;
      left: 800px;
      top: 250px;
      margin-left: 800px;

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
/*      background-size: contain;*/
      background-image: url(images/paint.png);
      background-repeat: no-repeat;
      }
  </style>
</head>
<body>
  <!-- <div class="rowfirstrow">
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
    </div> -->
    <div class="container">
      <div class="row">
        <div class="col-xs-12 col-md-4">
          <div class="panel panel-default">
            <div class="panel-heading">
              <h3 class="panel-title" style="text-align: center;">
                3N TO SACCO Booking receipt
              </h3>
            </div>
            <div class="panel-body">

<?php
include './database/config.php';
$last_id = $_SESSION['last_id'];
$sql = "SELECT * FROM `ticket` WHERE T_id= $last_id";
$result = $conn->query($sql);
$row=$result->fetch_assoc();


?>
              <form role="form" method="POST" action="payment.php">
                <div class="form-group">
                  <label for="idNumber">
                  Ticket ID</label>
                  <div class="input-group">
                    <input type="text" class="form-control" id="cardNumber" readonly value="<?php echo $row['T_id']?>" placeholder="Valid ID Number" required autofocus name="id" />
                  </div>
                </div>
                <div class="form-group">
                  <label for="PhoneNumber">
                   Vehicle Registration number</label>
                  <div class="input-group">
                    <input type="text" class="form-control" id="phone" readonly value="<?php echo $row['reg_no']?>" placeholder="eg. 07*********" required autofocus name="phone" />
                <div class="form-group">
                  <label for="PhoneNumber">
                   Travel Route</label>
                  <div class="input-group">
                    <input type="text" class="form-control" id="phone" readonly value="<?php echo $row['T_dest']?>" placeholder="eg. 07*********" required autofocus name="phone" />
                  </div>
                </div>
                <div class="form-group">
                  <label for="mpesacode">
                    Amount payable</label>
                  <div class="input-group">
                    <input type="text" class="form-control" id="code" readonly value="<?php echo $row['T_payable'] * $row['T_seats'] ?>" placeholder="eg. OBB0ZGHJN9" autofocus name="code" required />
                  </div>
                </div>
                <div class="form-group">
                  <label for="mpesacode">
                    Seats Booked</label>
                  <div class="input-group">
                    <input type="text" class="form-control" id="code" readonly value="<?php echo $row['T_seats']?>" placeholder="eg. OBB0ZGHJN9" autofocus name="code" required />
                  </div>
                </div>
                <div class="form-group">
                  <label for="date">
                    DATE and Time</label>
                  <div class="input-group">
                  <?php 
                  $rowtime = $row['T_date'];
                  $date = date('Y-m-d',strtotime($rowtime));
                  $time = date('H-i-s',strtotime($rowtime));
                  ?>
                  
                    <input type="text" class="form-control" id="date"  readonly value="<?php echo $date?>" placeholder="eg. 24/04/2020" required autofocus name="date" />
                    <input type="text" class="form-control" id="date"  readonly value="<?php echo $time?>" placeholder="eg. 24/04/2020" required autofocus name="date" />
                  </div>
                </div>
                <input type="submit" value="Print e-ticket" name="submit" class="btn btn-success btn-lg btn-block" role="button" id="printTicket">
                <h5 style="text-align: center;">Tickets once purchased cannot be refunded</h5>
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

    var print_ticket = document.getElementById("printTicket");
            // When the user clicks on <span> (x), close the modal
                print_ticket.onclick = function() {
                window.print();
                };
  </script>
</body>
</html>