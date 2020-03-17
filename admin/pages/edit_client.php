<?php 
include '../includes/check_user.php'; 
include '../includes/check_reply.php';

if (isset($_GET['sid'])) {
    include '../../database/config.php';
    $technician_id = mysqli_real_escape_string($conn, $_GET['sid']);
    $sql = "SELECT * FROM clients WHERE pnumber = '$technician_id'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {

    while($row = $result->fetch_assoc()) {
    $sdfname = $row['first_name'];
    $sdlname = $row['last_name'];
    $sdgender = $row['gender'];
    $sdaddress = $row['address'];
    $sdemail = $row['email'];
    $sdphone = $row['phone'];
    $sdavatar = $row['avatar'];
    $sdlocation=$row['location'];
    $sdpnumber=$row['pnumber'];
    $sdpriority=$row['priority'];
    
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

    <title>edit client</title>

   <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />
    
    <link href="../../assets/plugins/pace-master/themes/blue/pace-theme-flash.css" rel="stylesheet"/>
    <link href="../../assets/plugins/uniform/css/uniform.default.min.css" rel="stylesheet"/>
    <link href="../../assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>   
    <link href="../../assets/plugins/datatables/css/jquery.datatables.min.css" rel="stylesheet" type="text/css"/> <link href="../../assets/css/modern.min.css" rel="stylesheet" type="text/css"/>
    <link href="../../assets/css/themes/green.css" class="theme-color" rel="stylesheet" type="text/css"/>
    <link rel="stylesheet" type="text/css" href="../../css/dashboard.css" />
    <link rel="stylesheet" type="text/css" href="../../css/tech.css" />
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
                    <h class="navbar-brand" ><b>Client Profile</b></h>
                    
                    <ul class="nav navbar-nav navbar-right">
                        <li class="dropdown">
                                    <a href="profile.php" class="dropdown-toggle waves-effect waves-button waves-classic" data-toggle="dropdown">
                                        <span class="user-name">Welcome,<?php echo "$myfname"; ?> <?php echo "$mylname"; ?></i></span>
                                        <?php 
                                        if ($myavatar == NULL) {
                                        print' <img class="img-circle avatar"  width="40" height="40" src="../../images/admin.jpg" alt="'.$myfname.'">';
                                        }else{
                                        print' <img class="img-circle avatar" width="90" height="90" src="pages/'.$myavatar.'" alt="'.$myfname.'">';    
                                        }
                        
                                        ?>
                                    </a>
                                    
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
<h3 style="margin-left: 2.3em; color: white; font-size: 15px"><b>Administrator</b></h3>
               <h5 style="margin-left: 0.9em; color: white; font-size: 15px"><b>SUPPORT CENTRE</b></h5>
                    
            </div>

            <ul class="nav">
               
            <li><a href="../index.php"><i class="fas fa-home"></i>Home</a></li>
                
        <li> <a  href="../CreateTech.php"><i class="fas fa-users-cog"></i>Technicians</a></li>

            <li> <a class="current" href="../clients.php"><i class="fas fa-users"></i>Clients</a></li>
                
            <li><a href="../Report.php"><i class="fas fa-archive"></i>Generate Report</a></li>
                
            
                    
                
            </ul>
        </div>
    </div>

            <div class="page-inner">
                <div class="page-title">
                    <h3>Edit Client - <?php echo "$sdfname"; ?> <?php echo "$sdlname"; ?></h3>



                </div>
                </div>
                <div id="main-wrapper">
                    <div class="row">
                        <div class="col-md-12">
						<div class="row">
                            <div class="col-md-12">

                                <div class="panel panel-white">
                                    <div class="panel-body">
                                         <form action="update_client.php" method="POST">

										<div class="form-group">
                                            <label for="exampleInputEmail1"><b>First Name</b></label>
                                            <input type="text" value="<?php echo "$sdfname"; ?>" class="form-control" placeholder="Enter first name" name="first_name" required autocomplete="off">
                                        </div>
										<div class="form-group">
                                            <label for="exampleInputEmail1"><b>Last Name</b></label>
                                            <input type="text" value="<?php echo "$sdlname"; ?>" class="form-control" placeholder="Enter last name" name="last_name" required autocomplete="off">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputpnUMBER"><b>Personal Number</b></label>
                                            <input type="text" value="<?php echo "$sdpnumber"; ?>" class="form-control" placeholder="Enter Personal Number" name="pnumber" required autocomplete="off">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1"><b>Email Address</b></label>
                                            <input type="email" value="<?php echo "$sdemail"; ?>" class="form-control" placeholder="Enter email address" name="email" required autocomplete="off">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1"><b>Phone</b></label>
                                            <input type="text" value="<?php echo "0$sdphone"; ?>" class="form-control" placeholder="Enter phone" name="phone" required autocomplete="off">
                                        </div>
										<div class="form-group">
										  <label for="exampleInputEmail1">Male</label>
                                            <input type="radio"  <?php if ($sdgender == "Male") { print ' checked '; } ?> name="gender" value="Male" required>
                                            <label for="exampleInputEmail1">Female</label>
                                            <input type="radio" <?php if ($sdgender == "Female") { print ' checked '; } ?> name="gender" value="Female" required>
                                        </div>
										
										
                                       
                                        <div class="form-group">
                                            <label for="exampleInputEmail1"><b>Location</b></label>
                                            <select class="form-control" name="location" required>
                                            <option value="" selected disabled>-Select Location-</option>
                                            <option <?php if($sdlocation=="TimesTowers"){print 'selected';}?> value="Times Towers">TimesTowers</option>
                                            <option <?php if($sdlocation=="CBC"){print 'selected';}?> value="CBC">CBC</option>
                                            <option <?php if($sdlocation=="KESRA"){print 'selected';}?> value="KESRA">KESRA</option>
                                            <option <?php if($sdlocation=="JKIA"){print 'selected';}?> value="JKIA">JKIA</option>
                                            <option <?php if($sdlocation=="Wilson Airport"){print 'selected';}?> value="Wilson Airport">Wilson Airport</option>
                                            <option <?php if($sdlocation=="Thika"){print 'selected';}?> value="Thika">Thika</option>
                                            <option <?php if($sdlocation=="Voi"){print 'selected';}?> value="Voi">Voi</option>
                                            

                                            </select>
                                        </div>
										
									<div class="form-group">
                                            <label for="exampleInputEmail1"><b>Address</b></label>
                                            <textarea style="resize: none;" rows="4" class="form-control" placeholder="Enter address" name="address" required autocomplete="off"><?php echo "$sdaddress"; ?></textarea>
                                     </div>
                                     <div class="form-group">
                                            <label for="exampleInputPriority"><b>Priority</b></label>
                                            <select class="form-control" name="priority" required>
                                            <option value="" selected disabled>-Select Priority-</option>
                                            <option <?php if($sdpriority=="1"){print 'selected';}?> value="1">1</option>
                                            <option <?php if($sdpriority=="2"){print 'selected';}?> value="2">2</option>
                                            <option <?php if($sdpriority=="3"){print 'selected';}?> value="3">3</option>
                                            <option <?php if($sdpriority=="4"){print 'selected';}?> value="4">4</option>
                                            <option <?php if($sdpriority=="5"){print 'selected';}?> value="5">5</option>
                                    

                                            </select>
                                        </div>
                                      <input type="hidden" name="client_id" value="<?php echo "$sdpnumber"; ?>">

                                        <button type="submit" class="btn btn-primary">Update <?php echo "$sdfname"; ?></button>
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