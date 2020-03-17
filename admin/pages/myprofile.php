<?php 
include '../includes/check_user.php'; 
include '../includes/check_reply.php';


?>
<!DOCTYPE html>
<html>
   
<head>
        
         <meta charset="utf-8" />
    <link rel="icon" type="image/png" href="assets/img/favicon.ico">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

    <title>my profile</title>

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
                    <h class="navbar-brand" ><b>My Profile</b></h>
                    
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
                
        <li> <a class="current" href="../CreateTech.php"><i class="fas fa-users-cog"></i>Technicians</a></li>

            <li> <a  href="../clients.php"><i class="fas fa-users"></i>Clients</a></li>
                
            <li><a href="../Report.php"><i class="fas fa-archive"></i>Generate Report</a></li>
                
           
                    
                
            </ul>
        </div>
    </div>

            <div class="page-inner">
                <div class="page-title">
                    <h3>Update Your Profile - <?php echo "$myfname"; ?> <?php echo "$mylname"; ?></h3>



                </div>
                </div>
                <div id="main-wrapper">
                    <div class="row">
                        <div class="col-md-7">
						<div class="row">
                            <div class="col-md-10">

                                <div class="panel panel-white">
                                    <div class="panel-body">
                                         <form action="update_technician.php" method="POST">

										<div class="form-group">
                                            <label for="exampleInputEmail1"><b>First Name</b></label>
                                            <input type="text" value="<?php echo "$myfname"; ?>" class="form-control" placeholder="Enter first name" name="first_name" required autocomplete="off">
                                        </div>
										<div class="form-group">
                                            <label for="exampleInputEmail1"><b>Last Name</b></label>
                                            <input type="text" value="<?php echo "$mylname"; ?>" class="form-control" placeholder="Enter last name" name="last_name" required autocomplete="off">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputpnUMBER"><b>Personal Number</b></label>
                                            <input type="text" value="<?php echo "$mysid"; ?>" class="form-control" placeholder="Enter Personal Number" name="pnumber" required autocomplete="off">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1"><b>Email Address</b></label>
                                            <input type="email" value="<?php echo "$myemail"; ?>" class="form-control" placeholder="Enter email address" name="email" required autocomplete="off">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1"><b>Phone</b></label>
                                            <input type="text" value="<?php echo "0$myphone"; ?>" class="form-control" placeholder="Enter phone" name="phone" required autocomplete="off">
                                        </div>
										<div class="form-group">
										  <label for="exampleInputEmail1">Male</label>
                                            <input type="radio"  <?php if ($mygender == "Male") { print ' checked '; } ?> name="gender" value="Male" required>
                                            <label for="exampleInputEmail1">Female</label>
                                            <input type="radio" <?php if ($mygender == "Female") { print ' checked '; } ?> name="gender" value="Female" required>
                                        </div>
										
										
                                       
                                        <div class="form-group">
                                            <label for="exampleInputEmail1"><b>Location</b></label>
                                            <select class="form-control" name="location" required>
                                            <option value="" selected disabled>-Select Location-</option>
                                            <option <?php if($mylocation=="TimesTowers"){print 'selected';}?> value="TimesTowers">TimesTowers</option>
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
                                            <textarea style="resize: none;" rows="4" class="form-control" placeholder="Enter address" name="address" required autocomplete="off"><?php echo "$myaddress"; ?></textarea>
                                     </div>
                                      <input type="hidden" name="technician_id" value="<?php echo "$sdpnumber"; ?>">

                                        <button type="submit" class="btn btn-primary">Save Changes <?php echo "$sdfname"; ?></button>
                                       </form>
                                    </div>
                                </div>  
  
                            </div>
                        </div>
                        <div class="col-md-5">

                                <div class="panel panel-white">
                                    <div class="panel-body">
                                    <h3>Update display picture</h3>
                                <form action="new_dp.php" method="POST" enctype="multipart/form-data">
                                <div class="form-group">
                                <label for="exampleInputEmail1">Select image to upload</label>
                                <input type="file" name="fileToUpload" required autocomplete="off">
                                </div>
                                <input type="submit"/>
                                <?php 
                                if ($myavatar == NULL) {
                                
                                }else{
                                print '<a';?> onclick="return confirm('Delete image ?')" <?php print ' class="btn btn-danger" href="pages/drop_dp.php">Delete Image</a>'; 
                                }
                        
                                ?>
                                </form>
                                    
                             </div></div></div>
                             
                             
                                <div class="col-md-5">

                                <div class="panel panel-white">
                                    <div class="panel-body">
                                    <h3>Update login password</h3>
                                <form action="change_password.php" method="POST">
                                <div class="form-group">
                                <label for="exampleInputEmail1">Enter new password</label>
                                <input type="password" id="password" class="form-control" name="pass1" required placeholder="Enter new password">
                                </div>
                                
                                <div class="form-group">
                                <label for="exampleInputEmail1">Confirm new password</label>
                                <input type="password" id="confirm_password" class="form-control" name="pass2" required placeholder="Confirm new password">
                                </div>
                                <button type="submit" class="btn btn-primary">Change Password</button>
                                <script>
                                            var password = document.getElementById("password")
                                           , confirm_password = document.getElementById("confirm_password");

                                           function validatePassword(){
                                            if(password.value != confirm_password.value) {
                                           confirm_password.setCustomValidity("Passwords Don't Match");
                                           } else {
                                           confirm_password.setCustomValidity('');
                                            }
                                               }

                                            password.onchange = validatePassword;
                                            confirm_password.onkeyup = validatePassword;
                                 </script>
                                </form>
                                    
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