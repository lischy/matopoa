<?php 


if (isset($_GET['sid'])) {
    include '../../database/config.php';
    $id = mysqli_real_escape_string($conn, $_GET['sid']);
    $sql = "SELECT * FROM trip WHERE trip_id = '$id'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {

    while($row = $result->fetch_assoc()) {
    
    $sdroutename = $row['routeid'];
    $sdreg_no = $row['registration_no'];
    $sddate_time = $row['date_time'];

    
    
    
    }
} else {
    header("location:./");
}
    
}else{
    header("location:./");
}
?>
<!DOCTYPE html>
<html>
   
<head>
        
         <meta charset="utf-8" />
    <link rel="icon" type="image/png" href="assets/img/favicon.ico">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

    <title>Edit Route</title>

   <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />
    
    <link href="../../assets/plugins/pace-master/themes/blue/pace-theme-flash.css" rel="stylesheet"/>
    <link href="../../assets/plugins/uniform/css/uniform.default.min.css" rel="stylesheet"/>
    <link href="../../assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>   
    <link href="../../assets/plugins/datatables/css/jquery.datatables.min.css" rel="stylesheet" type="text/css"/> 
    <link href="../../assets/css/modern.min.css" rel="stylesheet" type="text/css"/>
    <link href="../../assets/css/themes/green.css" class="theme-color" rel="stylesheet" type="text/css"/>
    <link rel="stylesheet" type="text/css" href="../../css2/dashboard.css" />
    <link rel="stylesheet" type="text/css" href="../../css2/tech.css" />
    <link href="../../fontawesome/css/all.css" rel="stylesheet" />


    </head>
    <body>
                <div class="profile-menu-list">
                    <div class="main-panel">
        <nav class="navbar navbar-default navbar-fixed">
            <div class="container-fluid">
          <!--       <div class="navbar-header"> -->
                <div class="collapse navbar-collapse">
                    <h class="navbar-brand" ><b>Edit Trip</b></h>
                    
                    <ul class="nav navbar-nav navbar-right">
                        <li class="dropdown"></li>
                        
                        <li><a href="../logout.php"><p>Logout</p></a></li>
                        
                    </ul>
                </div>
            </div>
        </nav>

        
            <div class="navbar">
                <div class="navbar-inner">
                    <div class="sidebar-pusher">
                        
                    </div>
                    
                    
                    <div class="topmenu-outer">
                        <div class="top-menu">
                            
                                

                                

                               
                        </div>
                    </div>
                </div>
            </div>
             
    <div class="wrapper">
    <div class="sidebar" data-color="blue" data-image="assets/img/sideba-5.jpg">

    <!--   you can change the color of the sidebar using: data-color="blue | azure | green | orange | red | purple" -->
        <div class="sidebar-wrapper">
            <div class="logo">
                <h3 style="margin-left: auto; margin-right: auto; color: white; font-size: 19px"><b>Admin Dashboard</b></h3>
                 
            </div>

            <ul class="nav">
               
            <li><a  href="schedule.php"><i class="fas fa-shuttle-van"></i>Schedule Vehicle</a></li>
                
            <li> <a  href="vehicles.php"><i class="fas fa-bus"></i>Vehicles</a></li>

            <li> <a class="current"  href="../test.php"><i class="fas fa-bus"></i>Test</a></li>

            <li><a  href="addRoute.php"><i class="fas fa-road"></i>Route Manager</a></li>

            <li><a href="addAdmin.php"><i class="fas fa fa-user"></i>Add Admin</a></li>

            <li><a href="Report.php"><i class="fas fa-archive"></i>Analytics</a></li>
                
           
                    
                
            </ul>
        </div>
    </div>

            
                <div id="main-wrapper">
                    <div class="row">
                        <div class="col-md-12">
						<div class="row">
                            <div class="col-md-12">

                                <div class="panel panel-white">
                                    <div class="panel-body">
                                         <form action="test34.php" method="POST">                    
                <div class="form-group">
                <label for="exampleLastName"><b>Route Name</b></label> <br>
                <select name="routeid" required  id="amount" onchange="getFare(this.value)" style="font-size: 17px; width: 330px">
                <option  value="" selected disabled>-Select vehicle route-</option>
                <?php 
                //get the routes 
                include '../../database/config.php';
                $sql = 'SELECT * FROM trip';
                $result= $conn->query($sql);

                if($result->num_rows >0){
                    while($row=$result->fetch_assoc()){
                        if($sdroutename==$row['routeid']) {
                            print'<option selected value="'.$row['routeid'].'">'.$row['routeid'].'</option>';
                        }else{
                            print'<option value="'.$row['routeid'].'">'.$row['routeid'].'<option';
                        }                    }
                }
            else{

            }
            $conn->close();
            ?>
                 

            </select>
                </div>
                                       
                                        
                    <div class="form-group">
                    <label for="exampleInputEmail1"><b>Vehicle Registration Number</b></label>
                    <select class="form-control" name="registration_no" required>
                    <option value="" selected disabled>-Select vehicle-</option>
                    <?php 
                //get the routes 
                include '../../database/config.php';
                $sql = 'SELECT * FROM trip';
                $result= $conn->query($sql);

                if($result->num_rows >0){
                    while($row=$result->fetch_assoc()){
                        if($sdreg_no==$row['registration_no']) {
                            print'<option selected value="'.$row['registration_no'].'">'.$row['registration_no'].'</option>';
                        }else{
                            print'<option value="'.$row['registration_no'].'">'.$row['registration_no'].'<option';
                        }                    }
                }
            else{

            }
            $conn->close();
            ?>

               
                </select>
                </div>
                       
                       <div class="form-group">
                        <label><b>Date:</b></label>
                        <br>
                     <input  type="date" required id="regDay" name="regDay"> 
                    </div>
                    
                        <div class="form-group">
                        <label><b>Time:</b></label> <br> <input  type="Time"  required id="regTime" name="regTime">
                    </div>
                                       <div class="form-group">
                                            <label for="exampleInputEmail1"><b>Fare</b></label>
                                            <input type="text" id="fare" class="form-control" required name="fare" placeholder="Enter route amount" >
                                        </div>
    
    <br>
                                            
                                      
                                        <button onMouseOver="this.style.color='gray'" onMouseOut="this.style.color='#fff'" style="float: left; color: #fff; background: #5cb85c; border: 1px solid transparent; display: inline-block; outline: none; line-height: 40px;padding: 0 30px; font-size: .8em; text-align: center; text-decoration: none; font-weight: 500; cursor: pointer; -webkit-transition: all 0.3s ease 0s; -moz-transition: all 0.3s ease 0s; -o-transition: all 0.3s ease 0s; transition: all 0.3s ease 0s; font-size: 15px; border-radius: 40px" type="submit" >Schedule Vehicle
                                    </button>

                                        </div>
                                        
                                       </form>
                
                                    </div>
                                </div>  
  
                            </div>
                        </div>


                        </div>
                    </div>
                </div>
                
            </div>
        </main>
		<?php if ($ms == "1") {
?> <div class="alert alert-success" id="snackbar"><?php echo "$description"; ?></div> <?php	
}else{
	
}
?>

        <div class="cd-overlay"></div>

        <script src="../assets/plugins/jquery/jquery-2.1.4.min.js"></script>
        <script src="../assets/plugins/jquery-ui/jquery-ui.min.js"></script>
        <script src="../assets/plugins/pace-master/pace.min.js"></script>
        <script src="../assets/plugins/jquery-blockui/jquery.blockui.js"></script>
        <script src="../assets/plugins/bootstrap/js/bootstrap.min.js"></script>
        <script src="../assets/plugins/jquery-slimscroll/jquery.slimscroll.min.js"></script>
        <script src="../assets/plugins/switchery/switchery.min.js"></script>
        <script src="../assets/plugins/uniform/jquery.uniform.min.js"></script>
        <script src="../assets/plugins/offcanvasmenueffects/js/classie.js"></script>
        <script src="../assets/plugins/offcanvasmenueffects/js/main.js"></script>
        <script src="../assets/plugins/waves/waves.min.js"></script>
        <script src="../assets/plugins/3d-bold-navigation/js/main.js"></script>
        <script src="../assets/plugins/jquery-mockjax-master/jquery.mockjax.js"></script>
        <script src="../assets/plugins/moment/moment.js"></script>
        <script src="../assets/plugins/datatables/js/jquery.datatables.min.js"></script>
        <script src="../assets/plugins/x-editable/bootstrap3-editable/js/bootstrap-editable.js"></script>
        <script src="../assets/plugins/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>
        <script src="../assets/js/modern.min.js"></script>
        <script src="../assets/js/pages/table-data.js"></script>
		<script src="../assets/plugins/select2/js/select2.min.js"></script>
        <script src="../assets/plugins/summernote-master/summernote.min.js"></script>
        <script src="../assets/plugins/bootstrap-colorpicker/js/bootstrap-colorpicker.js"></script>
        <script src="../assets/plugins/bootstrap-tagsinput/bootstrap-tagsinput.min.js"></script>
        <script src="../assets/plugins/bootstrap-timepicker/js/bootstrap-timepicker.min.js"></script>
        <script src="../assets/js/pages/form-elements.js"></script>
		

		<script>
function myFunction() {
    var x = document.getElementById("snackbar")
    x.className = "show";
    setTimeout(function(){ x.className = x.className.replace("show", ""); }, 3000);
}
</script>

<script src="../assets/plugins/jquery/jquery.AreYouSure-master/jquery.are-you-sure.js"></script>

<script>
  $(function() {
    $('form').areYouSure(
      {
        message: 'It looks like you have been editing something. '
               + 'If you leave before saving, your changes will be lost.'
      }
    );
  });

</script>
    </body>

</html>