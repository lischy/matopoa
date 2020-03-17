<!doctype html>
<?php
include "includes/check_user.php"
?>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <link rel="icon" type="image/png" href="assets/img/favicon.ico">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

    <title>create technician</title>

   <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
   <meta name="viewport" content="width=device-width" />
    
        <link href="../assets/plugins/pace-master/themes/blue/pace-theme-flash.css" rel="stylesheet"/>
        <link href="../assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link rel="stylesheet" type="text/css" href="../css/light-bootstrap-dashboard.css" />
        <link rel="stylesheet" type="text/css" href="../css/dashboard.css" />
        <link href="../assets/css/modern.min.css" rel="stylesheet" type="text/css"/>
        <link rel="stylesheet" type="text/css" href="../css/tech.css" />
        <link href="../assets/css/themes/green.css" class="theme-color" rel="stylesheet" type="text/css"/>
        <link href="../fontawesome/css/all.css" rel="stylesheet" />

</head>

<body>

<div class="wrapper">
    <div class="sidebar" data-color="blue" data-image="assets/img/sideba-5.jpg">

    
        <div class="sidebar-wrapper">
            <div class="logo">

               <h5 style="margin-left: 0.9em; color: white; font-size: 15px"><b>SUPPORT CENTRE</b></h5>
                    
            </div>

            <ul class="nav">
               
            <li><a href="index.php"><i class="fas fa-home"></i>Home</a></li>
                
            <li> <a  href="CreateTech.php"><i class="fas fa-users-cog"></i>Technicians</a></li>

            <li> <a  href="clients.php"><i class="fas fa-users"></i>Clients</a></li>
                
            <li><a href="Report.php"><i class="fas fa-archive"></i>Generate Report</a></li>
                
            <li><a class="current" href="TechKPIs.php"><i class="fas fa-signal"></i>Technician KPIs</a></li>
                    
                
            </ul>
        </div>
    </div>


    <div class="main-panel">
        <nav class="navbar navbar-default navbar-fixed">
            <div class="container-fluid">
                <div class="navbar-header">
                    
                    <h class="navbar-brand" ><b>Technician's Perfomance</b></h>
                </div>
                <div class="collapse navbar-collapse">
                    
                    <ul class="nav navbar-nav navbar-right">
                        <li>
                           <a href="">
                               <p>Profile</p>
                            </a>
                        </li>
                        <li>
                            <a href="logout.php">
                                <p>Logout</p>
                            </a>
                        </li>
                        
                    </ul>
                </div>
            </div>
        </nav>



    <div style="background-color: #ccc" class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="header">
                                <h4 class="title">Technicians</h4>
                                
                            </div>
                            <div class="content table-responsive table-full-width">
                                <table class="table table-hover table-striped">
                                    <thead>
                                        <th>PNumber</th>
                                    	<th>Name</th>
                                    	<th>Location</th>
                                    	<th>Email</th>
                                    	<th>Phone Number</th>
                                    </thead>
                                    <tbody>
                                        <tr>
                                        	<td>T33858963</td>
                                        	<td>Wycliff Kituri</td>
                                        	<td>Times Towers</td>
                                        	<td>kiturijonathan9@gmail.com</td>
                                        	<td>0716911540</td>
                                          
                                        </tr>
                                        <tr>
                                        	<td>T30589632</td>
                                        	<td>Daniel Kutwa</td>
                                        	<td>Wilson Airport</td>
                                        	<td>danielkutwa@gmail.com</td>
                                        	<td>0712055959</td>
                                        </tr>

                                        
                                    </tbody>
                                </table>

                            </div>
                        </div>
                    </div>
        </body>
        <!--   Core JS Files   -->
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
        
    

                 

    

</html>
