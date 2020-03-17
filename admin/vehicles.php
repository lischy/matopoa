<!doctype html>

<html lang="en">
<head>
    <meta charset="utf-8" />
    <link rel="icon" type="image/png" href="bus_icon_white.png">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

    <title>Vehicles</title>

   <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />
    
    <link href="../assets/plugins/pace-master/themes/blue/pace-theme-flash.css" rel="stylesheet"/>
    <link href="../assets/plugins/uniform/css/uniform.default.min.css" rel="stylesheet"/>
    <link href="../assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>   
    <link href="../assets/plugins/datatables/css/jquery.datatables.min.css" rel="stylesheet" type="text/css"/> 
    <link href="../assets/css/modern.min.css" rel="stylesheet" type="text/css"/>
    <link href="../assets/css/themes/green.css" class="theme-color" rel="stylesheet" type="text/css"/>
    <link rel="stylesheet" type="text/css" href="../css2/dashboard.css" />
    <link rel="stylesheet" type="text/css" href="../css2/tech.css" />
    <link href="../fontawesome/css/all.css" rel="stylesheet" />


</head>

<body>

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


    <div class="main-panel">
        <nav class="navbar navbar-default navbar-fixed">
            <div class="container-fluid">
                <div class="navbar-header">
                    
                    <h class="navbar-brand" ><img style="float: left; width:45px; height:45px;" src="bus_icon_white.png"> <b style="float: right; margin-top: 12px">Vehicles</b></h>
                </div>
                <div class="collapse navbar-collapse">
                    
                    <ul class="nav navbar-nav navbar-right">
                        
                       <!--  <li class="dropdown">
                                    <a href="pages/profile.php" class="dropdown-toggle waves-effect waves-button waves-classic" data-toggle="dropdown">
                                        
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


    <div style="background-color: #ccc" class="content">   <!-- Background color grey  -->
            <div class="container-fluid">
            <div id="main-wrapper">
                    <div class="row">
                        <div class="col-md-12">
                        <div class="row">
                            <div class="col-md-12">

                                <div class="panel panel-white">
                                    <div class="panel-body">
                                        <div role="tabpanel">
                                   
                                            <ul class="nav nav-tabs" role="tablist">
                                                
                                                <li role="presentation" class="active"><a href="#tab6" role="tab" data-toggle="tab">Vehicles</a></li>

                                                <li role="presentation" ><a href="#tab5" role="tab" data-toggle="tab">Register Vehicle</a></li>

                                            </ul>
                                    
                                            <div class="tab-content">
                                                <div role="tabpanel" class="tab-pane active fade in" id="tab6">
                                           <div class="table-responsive">
                                           <?php
                                           include '../database/config.php';
                                           $sql = "SELECT * FROM matatu";
                                           $result = $conn->query($sql);

                                           if ($result->num_rows > 0) {
                                        print '
                                       
                                        <table id="example" class="display table" style="width: 100%; cellspacing: 0;">
                                        <thead>
                                            <tr>
                                                <th>REG NO</th>
                                                <th>Capacity</th>
                                                <th>Owner Name</th>
                                                <th>Owner Phone</th>
                                                <th>Action</th>
                                                
                                                
                                            </tr>
                                        </thead>
                                        
                                        <tbody>';
     
                                           while($row = $result->fetch_assoc()) 
                                           {
                                               

                                          print '
                                               <tr>
                                                
                                                <td>'.$row['regno'].'</td>
                                                <td>'.$row['capacity'].'</td>
                                                <td>'.$row['Vname'].'</td>
                                                <td>0'.$row['phone'].'</td>
                                               
                                                
                                                <td><div class="dropdown">
                                                <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                                                    Select Action
                                                    <span class="caret"></span>
                                                </button>
                                                <ul class="dropdown-menu">
                                                
                                                    <li>'.$stl.'
                                                    <li><a href="pages/edit_matatu.php?sid='.$row['regno'].'">Edit Matatu</a></li>
                                                    <li><a'; ?> onclick = "return confirm('Delete Matatu <?php echo $row['regno']; ?>?')" <?php print ' href="pages/delete_matatu.php?id='.$row['regno'].'">Delete Matatu</a></li>
                                                </ul>
                                            </div></td>

          
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
                                                       
                                                </div>
                                                
                                                <div role="tabpanel" class="tab-pane  fade " id="tab5">
                                         <form action="pages/add_vehicles.php" method="POST">
                                        
                                        <div class="form-group">
                                            <label for="exampleLastName">License Plate Number</label>
                                            <input type="text" class="form-control" placeholder="Input number plate" name="regno" required autocomplete="off" required maxlength="8" required multiple pattern="^K[A-Z]{2}\s\d{3}[A-Z]$" >
                                        </div>
                                       
                                        
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Matatu capacity</label>
                                            <input type="text" class="form-control" placeholder="Capacity 14 (default)" name="capacity" required autocomplete="off" readonly value="14">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputPhoneNumber">Owner Name</label>
                                            <input type="text" class="form-control" placeholder="Enter Owner Name" name="name" required autocomplete="off" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputPhoneNumber">Owner Phone Number</label>
                                            <input type="text" class="form-control" placeholder="Enter Owner Phone Number" name="phone" required autocomplete="off" required maxlength="10" required>
                                        </div>
                                        <div>
                                       </style>
                                        <button onMouseOver="this.style.color='gray'" onMouseOut="this.style.color='#fff'" style="float: left; color: #fff; background: #5cb85c; border: 1px solid transparent; display: inline-block; outline: none; line-height: 40px;padding: 0 30px; font-size: .8em; text-align: center; text-decoration: none; font-weight: 500; cursor: pointer; -webkit-transition: all 0.3s ease 0s; -moz-transition: all 0.3s ease 0s; -o-transition: all 0.3s ease 0s; transition: all 0.3s ease 0s; font-size: 15px; border-radius: 40px" type="submit" >Register Matatu
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
                    </div>
                </div>
                        
                        </div>
                    </div>

                </div>
            </div>
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
        
    
       



    
</html