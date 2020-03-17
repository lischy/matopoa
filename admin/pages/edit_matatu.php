<?php 


if (isset($_GET['sid'])) {
    include '../../database/config.php';
    $regno = mysqli_real_escape_string($conn, $_GET['sid']);
    $sql = "SELECT * FROM matatu WHERE regno = '$regno'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {

    while($row = $result->fetch_assoc()) {
    $sdregno = $row['regno'];
    $sdcapacity = $row['capacity'];
    $sdowner = $row['Vname'];
    $sdphone = $row['phone'];
    
    
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

    <title>Edit Matatu</title>

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
            <span><?php echo "$myfname"; ?> <?php echo "$mylname"; ?></span></div>
                <div class="profile-menu-list">
                    <div class="main-panel">
        <nav class="navbar navbar-default navbar-fixed">
            <div class="container-fluid">
          <!--       <div class="navbar-header"> -->
                <div class="collapse navbar-collapse">
                    <h class="navbar-brand" ><b>Edit Matatu</b></h>
                    
                    <ul class="nav navbar-nav navbar-right">
                        <li class="dropdown">
                                    
                                </li>
                        
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
                
            <li> <a class="current" href="vehicles.php"><i class="fas fa-bus"></i>Vehicles</a></li>

            <li> <a  href="test.php"><i class="fas fa-bus"></i>Test</a></li>

            <li><a href="addRoute.php"><i class="fas fa-road"></i>Route Manager</a></li>

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
                                         <form action="update_matatu.php" method="POST">

										<div class="form-group">
                                            <label for="exampleInputEmail1"><b>Vehicle Registration Number</b></label>
                                            <input type="text" value="<?php echo "$sdregno"; ?>" class="form-control" placeholder="Change Matatu Number Plate" name="regno" required autocomplete="off">
                                        </div>
										<div class="form-group">
                                            <label for="exampleInputEmail1"><b>Vehicle Capacity</b></label>
                                            <input type="text" value="<?php echo "$sdcapacity"; ?>" class="form-control" placeholder="Change Vehicle capacity" name="capacity" required autocomplete="off">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputpnUMBER"><b>Vehicle Owner</b></label>
                                            <input type="text" value="<?php echo "$sdowner"; ?>" class="form-control" placeholder="Enter New Owner" name="Vname" required autocomplete="off">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1"><b>Owner Phone Number</b></label>
                                            <input type="text" value="<?php echo "0$sdphone"; ?>" class="form-control" placeholder="Enter New Phone Number" name="phone" required autocomplete="off">
                                        </div>
                                        <input type="hidden" name="technician_id" value="<?php echo "$sdpnumber"; ?>">

                                        <button onclick="return confirm('<?php echo "Are you sure you want to edit $sdregno?";?>')" type="submit" class="btn btn-primary" style="float: left; color: #fff; background: #5cb85c; border: 1px solid transparent; display: inline-block; outline: none; line-height: 40px;padding: 0 30px; font-size: .8em; text-align: center; text-decoration: none; font-weight: 500; cursor: pointer; -webkit-transition: all 0.3s ease 0s; -moz-transition: all 0.3s ease 0s; -o-transition: all 0.3s ease 0s; transition: all 0.3s ease 0s; font-size: 15px; border-radius: 40px">Update <?php echo "$sdregno"; ?></button>
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