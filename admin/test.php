<!doctype html>

<html lang="en">
<head>
    <meta charset="utf-8" />
    <link rel="icon" type="image/png" href="bus_icon_white.png">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

    <title>Matatu scheduler</title>

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
                
            <li> <a  href="vehicles.php"><i class="fas fa-bus"></i>Vehicles</a></li>

            <li> <a class="current" href="test.php"><i class="fas fa-bus"></i>Test</a></li>

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
                    
                    <h class="navbar-brand" ><img style="float: left; width:45px; height:45px;" src="bus_icon_white.png"> <b style="float: right; margin-top: 12px">Matatu Scheduler</b></h>
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
                                                
                                                <li role="presentation" class="active"><a href="#tab6" role="tab" data-toggle="tab">Trips</a></li>

                                                <li role="presentation" ><a href="#tab5" role="tab" data-toggle="tab">Schedule Matatu</a></li>

                                            </ul>
                                    
                                            <div class="tab-content">
                                                <div role="tabpanel" class="tab-pane active fade in" id="tab6">
                                           <div class="table-responsive">
                                           <?php
                                           include '../database/config.php';
                                           $sql = "SELECT * FROM trip";
                                           $result = $conn->query($sql);

                                           if ($result->num_rows > 0) {
                                        print '
                                       
                                        <table id="example" class="display table" style="width: 100%; cellspacing: 0;">
                                        <thead>
                                            <tr>
                                                <th>Trip ID</th>
                                                <th>Vehicle Reg</th>
                                                <th>DateTime</th>
                                                <th>Route Name</th>
                                                <th>Seats Availabe</th>
                                                <th>Status</th>
                                                <th>Action</th>
                                                
                                                
                                            </tr>
                                        </thead>
                                        
                                        <tbody>';
     
                                           while($row = $result->fetch_assoc()) 
                                           {
                                               

                                          print '
                                               <tr>
                                                
                                                <td>'.$row['trip_id'].'</td>
                                                <td>'.$row['registration_no'].'</td>
                                                <td>'.$row['date_time'].'</td>
                                                <td>'.$row['routeid'].'</td>
                                                <td>'.$row['seatsAvailable'].'</td>
                                                 <td>'.$row['bookingstatus'].'</td>
                                               
                                                
                                                <td><div class="dropdown">
                                                <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                                                    Select Action
                                                    <span class="caret"></span>
                                                </button>
                                                <ul class="dropdown-menu">
                                                
                                                    <li>'.$stl.'
                                                    <li><a href="pages/edit_trip.php?sid='.$row['trip_id'].'">Edit Trip</a></li>
                                                    <li><a'; ?> onclick = "return confirm('Delete Trip ID: <?php echo $row['trip_id']; ?> ?')" <?php print ' href="pages/delete_trip.php?id='.$row['trip_id'].'">Delete Trip</a></li>
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
                <form action="test34.php" method="POST">                    
                <div class="form-group">
                <label for="exampleLastName"><b>Route Name</b></label> <br>
                <select name="routeid" required  id="amount" onchange="getFare(this.value)" style="font-size: 17px; width: 330px">
                <option  value="" selected disabled>-Select vehicle route-</option>
                <?php 
                //get the routes 
                include '../database/config.php';
                $getRoutes = 'SELECT id, routename,amount FROM routes';

                $routes = $conn->query($getRoutes);
                while ($row = $routes->fetch_assoc()) {
                ?>
                <option name="route" value="<?= $row['routename']; ?>"><?= $row['routename']; ?></option>
                <?php } ?>
            </select>
                </div>
                                       
                                        
                    <div class="form-group">
                    <label for="exampleInputEmail1"><b>Vehicle Registration Number</b></label>
                    <select class="form-control" name="registration_no" required>
                    <option value="" selected disabled>-Select vehicle-</option>
                    <?php 
                //get the routes 
                include '../database/config.php';
                $getRoutes = 'SELECT * FROM matatu';

                $routes = $conn->query($getRoutes);
                while ($row = $routes->fetch_assoc()) {
                ?>
                <option name="regno" value="<?= $row['regno']; ?>"><?= $row['regno']; ?></option>
                <?php } ?>
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
                    </div>
                </div>
                        
                        </div>
                    </div>

                </div>
            </div>
        </div>
        


       

    </div>
</div>
<script
  src="https://code.jquery.com/jquery-3.4.1.min.js"
  integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
  crossorigin="anonymous"></script>

    <!-- <script>
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
<pre>
<?php if ($_POST) { print_r($_POST); } ?>
</pre>
                                
                          
   
                        



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

