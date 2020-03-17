<?php 
include '../includes/check_user.php'; 
include '../includes/check_reply.php';

if (isset($_GET['sid'])) {
	include '../../database/config.php';
	$technician_id = mysqli_real_escape_string($conn, $_GET['sid']);
	$sql = "SELECT * FROM technicians WHERE pnumber = '$technician_id'";
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

    <title>view technician</title>

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
                    <h class="navbar-brand" ><b>Technician Profile</b></h>
                    
                    <ul class="nav navbar-nav navbar-right">
                        <li class="dropdown">
                                    <a href="profile.php" class="dropdown-toggle waves-effect waves-button waves-classic" data-toggle="dropdown">
                                        <span class="user-name">Welcome,<?php echo "$myfname"; ?> <?php echo "$mylname"; ?></span>
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
                
        <li> <a class="current" href="../CreateTech.php"><i class="fas fa-users-cog"></i>Technicians</a></li>

            <li> <a  href="../clients.php"><i class="fas fa-users"></i>Clients</a></li>
                
            <li><a href="../Report.php"><i class="fas fa-archive"></i>Generate Report</a></li>
                
           
                    
                
            </ul>
        </div>
    </div>

            <div class="page-inner">
                <div class="page-title">
                    <h3>Technician - <?php echo "$sdfname"; ?> <?php echo "$sdlname"; ?></h3>



                </div>
                <div id="main-wrapper">
                    <div class="row">
                        <div class="col-md-12">
						<div class="row">
                            <div class="col-md-5">

                                <div class="panel panel-white">
                                    <div class="panel-body">
									<div class="col-md-12">
                                <?php 
						        if ($sdavatar == NULL) {
						        print' <img width="180"  class="img-responsive" src="../../images/'.$sdgender.'.jpg" alt="'.$sdfname.'">';
						        }else{
						        echo '<img src="data:image/jpeg;base64,'.base64_encode($sdavatar).'" class="img-responsive"  alt="'.$sdfname.'"/>';	
						        }
						
						        ?></div>
								
								
                                    </div>
									<table class="table">
                                        <tbody>
                                            
                                            <tr>
                                                <th scope="row">1</th>
                                                <td>First Name</td>
                                                <td><b><?php echo "$sdfname"; ?></b></td>
                                                
                                            </tr>
                                            <tr>
                                                <th scope="row">2</th>
                                                <td>Last Name</td>
                                                <td><b><?php echo "$sdlname"; ?></b></td>
                                               
                                            </tr>
                                            <tr>
                                                <th scope="row">3</th>
                                                <td>Personal Number</td>
                                                <td><b><?php echo "$technician_id"; ?></b></td>
                                             
                                            </tr>
                                            
											<tr>
                                                <th scope="row">4</th>
                                                <td>Gender</td>
                                                <td><b><?php echo "$sdgender"; ?></b></td>
                                               
                                            </tr>
											
											
											<tr>
                                                <th scope="row">5</th>
                                                <td>Email Address</td>
                                                <td><b><?php echo "$sdemail"; ?></b></td>
                                               
                                            </tr>
											<tr>
                                                <th scope="row">6</th>
                                                <td>Phone Number</td>
                                                <td><b><?php echo "0$sdphone"; ?></b></td>
                                               
                                            </tr>
											
											<tr>
                                                <th scope="row">7</th>
                                                <td>Location</td>
                                                <td><b><?php echo "$sdlocation"; ?></b></td>
                                               
                                            </tr>
                                            <tr>
                                                <th scope="row">8</th>
                                                <td>Address</td>
                                                <td><b><?php echo "$sdaddress"; ?></b></td>
                                          
                                               
                                            </tr>
                                            
                                        </tbody>
                                    </table>
                                </div>  
  
                            </div>
							
							<div class="col-md-7">

                                <div class="panel panel-white">
                                    <div class="panel-body">
									<h3><?php echo "$sdfname"; ?>'s Perfomance</h3>
									 <div class="table-responsive">
									 <?php
									 include '../database/config.php';
									 $sql = "SELECT * FROM tbl_assessment_records WHERE student_id = '$student_id'";
                                     $result = $conn->query($sql);

                                     if ($result->num_rows > 0) {
									print '
									   <table id="example" class="display table" style="width: 100%; cellspacing: 0;">
                                        <thead>
                                            <tr>
                                                <th>Exam</th>
                                                <th>Date</th>
                                                <th>Score</th>
                                                <th>Status</th>
                                            </tr>
                                        </thead>
                                        <tfoot>
                                            <tr>
                                                <th>Exam</th>
                                                <th>Date</th>
                                                <th>Score</th>
                                                <th>Status</th>
                                            </tr>
                                        </tfoot>
                                        <tbody>';
 
                                     while($row = $result->fetch_assoc()) {
                                     print '
									        <tr>
                                                <td>'.$row['exam_name'].'</td>
                                                <td>'.$row['date'].'</td>
                                                <td>'.$row['score'].'%</td>
                                                <td>'.$row['status'].'</td>
                                            </tr>';
                                     }
									 print '
									   </tbody>
                                       </table>  ';
                                     } else {
     												print '
												<div class="alert alert-info" role="alert">
                                        Nothing was found in database.
                                    </div>';
                                     }
                                     $conn->close();
									 
									 ?>


                                          
  
                                    </div>
									
                             </div></div></div>
							
							
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
    </body>

</html>