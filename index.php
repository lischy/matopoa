<?php 
if (!isset($_SESSION)) {
  session_start();
  }

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <title>MatPoa 3N TO SACCO</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Montserrat:200,300,400,500,600,700&display=swap" rel="stylesheet">

    <link rel="icon" type="image/png" href="favicon.ico"/>

    <link rel="stylesheet" href="css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="css/animate.css">
    
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">

    <link rel="stylesheet" href="css/aos.css">

    <link rel="stylesheet" href="css/ionicons.min.css">
		
		<link rel="stylesheet" href="css/bootstrap-datetimepicker.min.css">
		<link rel="stylesheet" href="css/nouislider.css">

    
    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/icomoon.css">
    <link rel="stylesheet" href="css/style.css">
    <style>
    #results{
      display:none;
      border: 1px solid black;
    }
    #psearchresults{
      display:none;
    }
  
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

    </style>
  </head>
  <body>
		
  <div class="main-section">

		<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
	    <div class="container">
	      <a class="navbar-brand" href="index.php" style="font-size:25px;">MatPoa 3N TO SACCO</a>
	      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="oi oi-menu"></span> Menu
	      </button>
	      <div class="collapse navbar-collapse" id="ftco-nav">
	        <ul class="navbar-nav ml-auto">
	        	<li class="nav-item"><a onMouseOver="this.style.color='#5cb85c'" onMouseOut="this.style.color='#fff'" href="index.php" class="nav-link icon d-flex align-items-center"></i> Home</a></li>
	        	<li class="nav-item"><a onMouseOver="this.style.color='#5cb85c'" onMouseOut="this.style.color='#fff'" href="commuter_sign_up/Comutter_regForm/index.php" class="nav-link icon d-flex align-items-center"></i> Register</a></li>
	        	<li class="dropdown nav-item">
              <a onMouseOver="this.style.color='#5cb85c'" onMouseOut="this.style.color='#fff'" href="#" class="dropdown-toggle nav-link icon d-flex align-items-center" data-toggle="dropdown">
                Login
                <b class="caret"></b>
              </a>
              <div class="dropdown-menu dropdown-menu-left">
                <a href="login/clogin.html" class="dropdown-item"> Commuter</a>
                <a href="login/index.html" class="dropdown-item"></i> System Admin</a>
              </div>
            </li>
	          <li class="nav-item"><a onMouseOver="this.style.color='#5cb85c'" onMouseOut="this.style.color='#fff'" href="about.html" class="nav-link icon d-flex align-items-center"></i> About us</a></li>
	          <li class="nav-item"><a onMouseOver="this.style.color='#5cb85c'" onMouseOut="this.style.color='#fff'" href="contact.html" class="nav-link icon d-flex align-items-center"></i> Contact us</a></li>
	        </ul>
	      </div>
		  </div>
	  </nav>
    <!-- END nav -->

  	<section class="hero-wrap js-fullheight" style="background-image: url(assets/images/mat12.png);" data-stellar-background-ratio="0.5">
  		<div class="overlay"></div>
  		<div class="container">
  			<div class="row description js-fullheight align-items-center justify-content-center">
  				<div class="col-md-8 text-center">
  					<div class="text">
  						<h1 class="mb-4"><span>MatPoa 3N TO SACCO</span></h1>
  						<br>
  						<h2 class="mb-5 mt-2" style="color:white;">Providing commuter services at unbeatable prices.</h2>
  					</div>
  				</div>
  			</div>
  		</div>
  		<div class="mouse">
				<a href="#" class="mouse-icon rounded-circle bg-success">   <!-- Bootstrap color code -->
					<div class="mouse-wheel"><span class="ion-ios-arrow-round-down text-light"></span></div>
				</a>
			</div>
  	</section>

	<section class="ftco-section goto-here pb-0">
	  	<div class="container">
	  		<div class="row">
	  			<br>
	  			<br>
	  			<div class="col-md-12 heading-title">
	          <h1>Transit booking</h1>
	        </div>
	  		</div>
	  	</div> <hr>
  	</section>
  			<section class="ftco-section" id="buttons">
			<div class="container">
				<div class="row mb-5">
				<div class="container">
                <div class="row">
                    <div class="col-lg-5">
                        <div class="book-a-car">
                            <form method="post" action="search.php">
                                <!--== Select route ==-->
                                <div class="pickup-location book-item" >
                                    <h4>SELECT TRAVEL ROUTE:</h4>
                                    <select class="custom-select" name="route" id="area">
                                      <option value="" selected disabled>Select</option>
                                      <?php 
                                      //get the routes 
                                        include './database/config.php';
                                        $getRoutes = 'SELECT id, routename,amount FROM routes';

                                        $routes = $conn->query($getRoutes);
                                        while ($row = $routes->fetch_assoc()) {
                                      ?>
                                                      <option name="amount" value="<?= $row['routename']; ?>"><?= $row['routename']; ?></option>
                                        <?php }?>
                                    </select>
                                </div>
                                <!--== Select route ==-->

                                <!--== Pick Up Date ==-->
                                <div class="pick-up-date book-item">
                                    <h4>PICK TRAVEL DATE:</h4>
                                    <input type="date" name="travelDate" required id="travelDate">
                                </div> <br><br>
                                <!--== pick date end ==-->

                                <div class="book-button text-center">
                                    
                                    <input name="search" onMouseOver="this.style.color='gray'" onMouseOut="this.style.color='#fff'" style="float: right; color: #fff; background: #5cb85c; border: 1px solid transparent; display: inline-block; outline: none; line-height: 40px;padding: 0 30px; font-size: .8em; text-align: center; text-decoration: none; font-weight: 500; cursor: pointer; -webkit-transition: all 0.3s ease 0s; -moz-transition: all 0.3s ease 0s; -o-transition: all 0.3s ease 0s; transition: all 0.3s ease 0s; font-size: 15px; border-radius: 40px" type="submit">
                                </div>
                            </form>
                        </div>
                    </div>

                    <div class="col-lg-7 text-right">
                        <div class="display-table">
                            <div class="display-table-cell">
                                <div class="slider-right-text">
                                    <h2>EASY AND CONVENIENT BOOKING!</h2>
                                    <p>"One stop shop for all your transport needs <br>book with us today."</p>
                                </div>
                            </div>
                            <p id="psearchresults">No Mattatu Scheduled</p>
                              <table id="results" class="results">
                                <thead>
                                  <tr><td>REG NO</td>
                                    <td>Capacity(Availabel)</td>
                                    <td>Fare</td>
                                    <td>Action</td>
                                  </tr>

                                </thead>
                                <tbody>
                                  <tr class="tablebody" id="tablebody">
                                    <td id="noplate">Peter</td>
                                    <td id="seats">Peter</td>
                                    <td id="fare">Peter</td>
                                    <td><input type="button" value="Book"></td>
                                  </tr>
                                </tbody>
                                <tfoot>
                                <tr><td>REG NO</td>
                                    <td>Capacity(Availabel)</td>
                                    <td>Fare</td>
                                    <td>Action</td>
                                  </tr>
                                </tfoot>
                              </table>
                        </div>
                    </div>
                </div>
            </div>
				</div>
      </div>
    <!-- The Modal -->
        <div id="myModal" class="modal">

        <!-- Modal content -->
        <div class="modal-content">
          <div class="modal-header">
            <span class="close">&times;</span>
            <h2>Modal Header</h2>
          </div>
          <div class="modal-body" id="modal-body">
          <form action="">
    <p>
    <label for="noPlate">Reg no:</label>
    <input type="text" id="noPlate" > 
    </p>
    <p>
    <label for="seats">Select seats:</label>
    <input type="number" id="seats" max="14" min=1 class="target" placeholder="0" required onkeydown="return false">
    </p>
    <p>
    <label for="totalcharges">Total charges:</label>
    <input type="text" id="totalcharges" readonly>
    </p>
        <input type="hidden" id="seatsavailable"  >
  

</form>
          </div>
          <div class="modal-footer">
          <button type="button" class="btn btn-default"  id="bookticket" style="width:100%" background-color: #5cb85c; ><h6>Book ticket.</h6></button>  
            
          </div>
        </div>

        </div>

	  </section>
	  <!-- - - - - -end- - - - -  -->
    <br><br> <br>
		

	  <footer class="ftco-section ftco-section-2" style="padding: 40px; background-color: black;">
	  	<div class="col-md-12 text-center">
          <p style="color: #fff" class="mb-0">
            Copyright &copy;<script>
              document.write(new Date().getFullYear());

            </script> All rights reserved | <a onMouseOver="this.style.color='#5cb85c'" onMouseOut="this.style.color='#007bff'" style="color: #007bff;" href="">MatPoa 3N TO SACCO</a> 
          </p>
        </div>
	  </footer>

  </div>

  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


  <script src="js/jquery.min.js"></script>
  <script src="js/jquery-migrate-3.0.1.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery.easing.1.3.js"></script>
  <script src="js/jquery.waypoints.min.js"></script>
  <script src="js/jquery.stellar.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/aos.js"></script>

  <script src="js/nouislider.min.js"></script>
  <script src="js/moment-with-locales.min.js"></script>
  <script src="js/bootstrap-datetimepicker.min.js"></script>
  <script src="js/main.js"></script>
    <script>

  
      var modal = document.getElementById("myModal");

// Get the button that opens the modal
var btn = document.getElementById("tablebody");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks on the button, open the modal
btn.onclick = function() {
  $routeID= '<?php echo $_SESSION['routeid']; ?>';
  $date_time= '<?php echo $_SESSION['date_time']; ?>';
  $.ajax({
    url:"Bookings.php",  
    method:"POST",  
    data:{
            id:$routeID,
            time:$date_time
          },  
          success:function(res){  
               $parsed=JSON.parse(res);
               //$('#modal-body').html($parsed.registration_no); 
               $('#noPlate').val($parsed.registration_no); 
               $('#seats').val($parsed.seatsAvailable); 
               $('#seatsavailable').val($parsed.seatsAvailable); 
               console.log(jQuery.type($parsed));

               modal.style.display = "block";
                }  
  });
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
  modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "block";
  }
}
var bookbtn = document.getElementById("bookticket");
//when the booking button is clicked do the neccessary functionalities ie, sanitize then update the db(no of seats available).
bookbtn.onclick = function() {
  $NoPlate= '<?php echo $_SESSION['registration_no']; ?>';
  $seatsAvailable= $('#seatsavailable').val();
  $payable= $('#totalcharges').val();
  $date_time='<?php echo $_SESSION['date_time']; ?>';
  $seatsselected=$('#seats').val();
  console.log($seatsselected);
  $.ajax({
    url:"search.php",  
    method:"POST",  
    data:{
            numberPlate:$NoPlate,
            seatsBooking:$seatsAvailable,
            bookingtime:$date_time,
            seatsselected:$seatsselected,
            payable:$payable,
            view:"update"
          },  
          success:function(data){  
              $('#modal-body').html(data);  
              modal.style.display = "block";
                }  
  });
}

$( ".target" ).on('input',function() {
        $seats = $('.target').val();
        var costPerSeat = 50;
        $total = $seats * parseInt(costPerSeat);
        $('#totalcharges').val($total) 

});
    </script>
  </body>
</html>