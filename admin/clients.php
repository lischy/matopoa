<!doctype html>
<?php
include "includes/check_user.php"
?>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <link rel="icon" type="image/png" href="assets/img/favicon.ico">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

    <title>create client</title>

   <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />
    
    <link href="../assets/plugins/pace-master/themes/blue/pace-theme-flash.css" rel="stylesheet"/>
    <link href="../assets/plugins/uniform/css/uniform.default.min.css" rel="stylesheet"/>
    <link href="../assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>   
    <link href="../assets/plugins/datatables/css/jquery.datatables.min.css" rel="stylesheet" type="text/css"/> <link href="../assets/css/modern.min.css" rel="stylesheet" type="text/css"/>
    <link href="../assets/css/themes/green.css" class="theme-color" rel="stylesheet" type="text/css"/>
    <link rel="stylesheet" type="text/css" href="../css/dashboard.css" />
    <link rel="stylesheet" type="text/css" href="../css/tech.css" />
    <link href="../fontawesome/css/all.css" rel="stylesheet" />


</head>

<body>

<div class="wrapper">
    <div class="sidebar" data-color="blue" data-image="assets/img/sideba-5.jpg">

    <!--   you can change the color of the sidebar using: data-color="blue | azure | green | orange | red | purple" -->
        <div class="sidebar-wrapper">
            <div class="logo">
<h3 style="margin-left: 2.3em; color: white; font-size: 15px"><b>Admin Dashboard</b></h3>
               
                    
            </div>

            <ul class="nav">
               
            <li><a   href="index.php"><i class="fas fa-shuttle-van"></i>Schedule Vehicle</a></li>
                
            <li> <a  href="CreateTech.php"><i class="fas fa-bus"></i>Vehicles</a></li>

            <li> <a class="current" href="clients.php"><i class="fas fa-users"></i>Clients</a></li>
                
            <li><a href="Report.php"><i class="fas fa-archive"></i>View Report</a></li>
                
            
                    
                
            </ul>
        </div>
    </div>


    <div class="main-panel">
        <nav class="navbar navbar-default navbar-fixed">
            <div class="container-fluid">
                <div class="navbar-header">
                    
                    <h class="navbar-brand" ><b>Clients</b></h>
                </div>
                <div class="collapse navbar-collapse">
                    
                    <ul class="nav navbar-nav navbar-right">
                        <li class="dropdown">
                                    <a href="pages/profile.php" class="dropdown-toggle waves-effect waves-button waves-classic" data-toggle="dropdown">
                                        <span class="user-name">Welcome,<?php echo "$myfname"; ?> <?php echo "$mylname"; ?></i></span>
                                        <?php 
                                         
                                        print' <img class="img-circle avatar"  width="40" height="40" src="../images/admin.jpg" alt="'.$myfname.'">';
                                        
                                        
                        
                                        ?>
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
            <div id="main-wrapper">
                    <div class="row">
                        <div class="col-md-12">
                        <div class="row">
                            <div class="col-md-12">

                                <div class="panel panel-white">
                                    <div class="panel-body">
                                        <div role="tabpanel">
                                   
                                            <ul class="nav nav-tabs" role="tablist">
                                                
                                                <li role="presentation" class="active"><a href="#tab6" role="tab" data-toggle="tab">Clients</a></li>

                                                
                                                
                        

                                            </ul>
                                    
                                            <div class="tab-content">
                                                <div role="tabpanel" class="tab-pane active fade in" id="tab6">
                                           <div class="table-responsive">
                                           <?php
                                           include '../database/config.php';
                                           $sql = "SELECT * FROM clients ";
                                           $result = $conn->query($sql);

                                           if ($result->num_rows > 0) {
                                        print '
                                       
                                        <table id="example" class="display table" style="width: 100%; cellspacing: 0;">
                                        <thead>
                                            <tr>
                                                <th>Name</th>
                                                <th>National ID</th>
                                                <th>Phone</th>
                                                <th>Email</>
                                                <th>action</th>
                                                
                                            </tr>
                                        </thead>
                                        
                                        <tbody>';
     
                                           while($row = $result->fetch_assoc()) {
                                               

                                          print '
                                               <tr>
                                                
                                                <td>'.$row['first_name'].' '.$row['last_name'].'</td>
                                                <td>'.$row['pnumber'].'</td>
                                                <td>'.$row['national_id'].'</td>
                                                <td>0'.$row['phone'].'</td>
                                                
                                                
                                                <td><div class="dropdown">
                                                <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                                                    Select Action
                                                    <span class="caret"></span>
                                                </button>
                                                <ul class="dropdown-menu">
                                                
                                                    <li>'.$stl.'</li>
                                                    <li><a href="pages/view_client.php?sid='.$row['pnumber'].'">View Client</a></li>
                                                    <li><a href="pages/edit_client.php?sid='.$row['pnumber'].'">Edit Client</a></li>
                                                    <li><a'; ?> onclick = "return confirm('Delete Client <?php echo $row['name']; ?> ?')" <?php print ' href="pages/delete_client.php?id='.$row['pnumber'].'">Delete Client </a></li>
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