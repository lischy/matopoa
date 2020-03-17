<!doctype html>

<html lang="en">
<head>
    <meta charset="utf-8" />
    <link rel="icon" type="image/png" href="bus_icon_white.png">
    <link rel="icon" type="image/png" href="assets/img/favicon.ico">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

    <title>Matatu scheduler</title>

   <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />
 
        <link href="../assets/plugins/pace-master/themes/blue/pace-theme-flash.css" rel="stylesheet"/>
        <link href="../assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link rel="stylesheet" type="text/css" href="../css2/light-bootstrap-dashboard.css" />
        <link rel="stylesheet" type="text/css" href="../css2/dashboard.css" />
        <link href="../assets/css/modern.min.css" rel="stylesheet" type="text/css"/>
        <link rel="stylesheet" type="text/css" href="../css2/tech.css" />
        <link href="../assets/css/themes/green.css" class="theme-color" rel="stylesheet" type="text/css"/>
        <link href="../fontawesome/css/all.css" rel="stylesheet" />
        <link href="../css2/webform.css" rel="stylesheet" />


   </head>

<body>

<div class="wrapper">
    <div class="sidebar" data-color="blue" data-image="assets/img/sideba-5.jpg">

   
        <div class="sidebar-wrapper">
            <div  class="logo">
                <h5 style="margin-left: auto; margin-right: auto; color: white; font-size: 19px"><b>Admin Dashboard</b></h5>
        
            </div>

            <ul class="nav">
               
            <li><a  class="current" href="schedule.php"><i class="fas fa-shuttle-van"></i>Schedule Vehicle</a></li>
                
            <li> <a  href="vehicles.php"><i class="fas fa-bus"></i>Vehicles</a></li>
                
            <li><a href="Report.php"><i class="fas fa-archive"></i>Analytics</a></li>

            <li><a href="addAdmin.php"><i class="fas fa fa-user"></i>Add Admin</a></li>

            <li><a href="addRoute.php"><i class="fas fa-road"></i>Route Manager</a></li>

    
            </ul>
        </div>
    </div>

<div class="main-panel">
        <nav class="navbar navbar-default navbar-fixed">
            <div class="container-fluid">
                <div class="navbar-header">
                    
                    <h style="margin-top: 0px" class="navbar-brand"><img style="float: left; width:45px; height:45px;" src="bus_icon_white.png"> <b style="float: right; margin-top: 12px">Matatu Scheduler</b></h>

                </div>
                <div class="collapse navbar-collapse">
                    
                    <ul class="nav navbar-nav navbar-right">
                        
                        <!-- <li class="dropdown">
                                    <a href="pages/myprofile.php" class="dropdown-toggle waves-effect waves-button waves-classic" data-toggle="dropdown">
                                        
                                        
                        
                                        <p>profile</p>
                                    </a>
                                    
                                </li> -->

                        <li>
                            <a href="logout.php">
                                <p>Logout</p>
                            </a>
                        </li>
                        
                    </ul>
                </div>
            </div>
        </nav>


             
              
                       
                    
        

 <table border="0" width="100%">
    <tbody><tr>
        <td style="text-align:right; margin-left: 10px" width="150"><label><b>Route Name:</b></label><font class="required"></font></td>
        <td width="0%">
            <select name="amount" required  id="amount" onchange="getFare(this.value)" style="font-size: 17px; width: 330px">
                <option value="" selected disabled>-Select vehicle route-</option>
                <?php 
                //get the routes 
                include '../database/config.php';
                $getRoutes = 'SELECT id, routename,amount FROM routes';

                $routes = $conn->query($getRoutes);
                while ($row = $routes->fetch_assoc()) {
                ?>
                <option name="route" value="<?= $row['id']; ?>"><?= $row['routename']; ?></option>
                <?php } ?>
            </select>
        </td>
    </tbody>
 </table>
 <div class="row"><label class="control-label" for="NoPlate"><b>Vehile Reg Number:</b></label><span class ="required"></span>
 <input type="text" size="40"  placeholder="Enter Number Plate" required maxlength="8" id="NoPlate" name="NoPlate"></div>
 
 
 <label><b>Date:</b></label> <input  type="date" required id="regDay" name="regDay"> <br>
 <label><b>Time:</b></label> <input  type="Time"  required id="regTime" name="regTime">

 <div class="row"><label class="control-label" for="fare"> <b>Fare:</b></label><span class ="required"></span>
 <!-- <input type="text" size="40" id="phone number" required maxlength="3"> --> 
            <input type="text" size="40" id="fare" name="fare" placeholder="Amount charged" required maxlength="7" >
</div>
    
    <br>
    
 
        <div style ="padding-bottom: 15px; text-align: center;"> 
            <input onMouseOver="this.style.color='gray'" onMouseOut="this.style.color='#fff'" style="float: center; color: #fff; background: #5cb85c; border: 1px solid transparent; display: inline-block; outline: none; line-height: 40px;padding: 0 30px; font-size: .8em; text-align: center; text-decoration: none; font-weight: 500; cursor: pointer; -webkit-transition: all 0.3s ease 0s; -moz-transition: all 0.3s ease 0s; -o-transition: all 0.3s ease 0s; transition: all 0.3s ease 0s; font-size: 15px; border-radius: 40px" type="submit" id="submit"value="Register Matatu"> </input>
        </div>

</form>
</div>
</div>
</div>

</body>
        <!-- <script src="../assets/plugins/jquery-ui/jquery-ui.min.js"></script>
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
        <script src="../assets/js/pages/form-elements.js"></script> -->
        <script
  src="https://code.jquery.com/jquery-3.4.1.min.js"
  integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
  crossorigin="anonymous"></script>

<!-- 	<script>
		$(document).ready(function(){
			$("#submit").click(function(e){
				e.preventDefault();
				alert("Clicked");
				$.ajax({
					url:"schedulematt.php",
					type:"POST",
					data:{
                        Route: $("#routeName").val(),
                        NoPlate: $("#NoPlate").val(),
                        Day: $("#regDay").val(),
                        Time: $("#regTime").val(),
                        Fare: $("#fare").val()
                        },
					sucess:function(results){
						console.log(results);
						$("#results").html(results);
					}
				});
			});
		});
    </script> -->
    <script>
        function getFare($route) {
alert("select changed."  + $route);
            $.ajax({
					url:"getFare.php",
					type:"POST",
					data: {
                        amount: $route
                    },
					success:function(data){
                        console.log(data)
						$('#results').html(data);
                        $('#fare').val(data);
                    }
            });
					
            
        }
    </script>
</html>
<pre>
<?php if ($_POST) { print_r($_POST); } ?>
</pre>