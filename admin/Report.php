<!doctype html>

<html lang="en">

<head>
    <meta charset="utf-8" />
    <link rel="icon" type="image/png" href="bus_icon_white.png">
    <link rel="icon" type="image/png" href="assets/img/favicon.ico">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

    <title>Analytics</title>

    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />

    <link rel="stylesheet" type="text/css" href="../css2/dashboard.css" />
    <link rel="stylesheet" type="text/css" href="../css2/light-bootstrap-dashboard.css" />
    <link href="../assets/plugins/pace-master/themes/blue/pace-theme-flash.css" rel="stylesheet" />
    <link href="../assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="../assets/css/modern.min.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" type="text/css" href="../css2/tech.css" />
    <link href="../assets/css/themes/green.css" class="theme-color" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" type="text/css" href="../css2/report.css" />
    <link href="../fontawesome/css/all.css" rel="stylesheet" />



</head>

<body>

    <div class="wrapper">
        <div class="sidebar" data-color="blue" data-image="assets/img/sideba-5.jpg">

            <!--   you can change the color of the sidebar using: data-color="blue | azure | green | orange | red | purple" -->
            <div class="sidebar-wrapper">
                <div class="logo">
                    <h3 style="margin-left: auto; margin-right: auto; color: white; font-size: 19px"><b>Admin
                            Dashboard</b></h3>

                </div>

                <ul class="nav">

                    <li><a href="schedule.php"><i class="fas fa-shuttle-van"></i>Schedule Vehicle</a></li>

                    <li> <a href="vehicles.php"><i class="fas fa-bus"></i>Vehicles</a></li>

                    <li><a class="current" href="Report.php"><i class="far fa-chart-bar"></i>Analytics</a></li>

                    <li><a href="addAdmin.php"><i class="fas fa fa-user"></i>Add Admin</a></li>

                    <li><a href="addRoute.php"><i class="fas fa-road"></i>Route Manager</a></li>


                </ul>
            </div>
        </div>


        <div class="main-panel">
            <nav class="navbar navbar-default navbar-fixed">
                <div class="container-fluid">
                    <div class="navbar-header">

                        <h style="margin-top: 0px" class="navbar-brand"><img
                                style="float: left; width:45px; height:45px;" src="bus_icon_white.png"> <b
                                style="float: right; margin-top: 12px">Matatu Analytics</b></h>
                    </div>
                    <div class="collapse navbar-collapse">

                        <ul class="nav navbar-nav navbar-right">
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
                <!--  background color grey -->
                <div class="container-fluid" style="background-color: white; width: 1000px; margin-left: 35px;">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="header">
                                    <h3 class="title">Generate Reports:</h3> <br>
       
                                    <table>
                                        <tbody>
                                            <tr>
                                                <td style="display: inline-block;" width="150"><b>License Plate
                                                        number:</b> </td>
                                                <td width="80%">
                                                    <select name="noplate" required id="noplate">
                                                        <option selected disabled="">-Select number plate-</option>
                                                        <?php 
                                                            //get the routes 
                                                            include '../database/config.php';
                                                            $getRoutes = 'SELECT regno FROM matatu';

                                                            $routes = $conn->query($getRoutes);
                                                            while ($row = $routes->fetch_assoc()) {
                                                        ?>
                                                        <option name="noPlate" value="<?= $row['regno']; ?>">
                                                            <?= $row['regno']; ?></option>
                                                        <?php } ?>

                                                    </select></td>
                                        </tbody>
                                    </table>
                                   


                                    <b>Select Date:</b> <input style="margin-left: 73px" type="date" name="rday"
                                        id="scheduledDay">
              

                                    <br>
                                    <br>

                                    <!-- <button onMouseOver="this.style.color='gray'" onMouseOut="this.style.color='#fff'" style="margin-bottom: : 10px; background-color: #5cb85c; border-radius:50px; color: white; height:40px;" type="submit" class="btn btn-info btn-fill pull-right">Generate Report</button> -->
                                    <input onMouseOver="this.style.color='gray'" onMouseOut="this.style.color='#fff'"
                                        style="margin-bottom: : 10px; background-color: #5cb85c; border-radius:50px; color: white; height:40px;"
                                        type="submit" class="btn btn-info btn-fill pull-right" value="Generate Report"
                                        id="reportbtn">

                                    <br><br>
                                </div>
                            </div>
                        </div>
                    </div>
                    <table id="results" class="results" style="width:100%">
                        <thead>
                            <tr>
                                <td>REG NO</td>
                                <td>Fare(Totoal)</td>
                                <td>Route</td>
                            </tr>

                        </thead>
                        <tbody>
                            <tr class="tablebody" id="tablebody">
                                <td id="regNo">KCD 131X</td>
                                <td id="fare"> 0</td>
                                <td id="route">0</td>
                            </tr>
                        </tbody>
                        <tfoot>
                            <tr>
                                <td>REG NO</td>
                                <td>Fare(Totoal)</td>
                                <td>Route</td>
                            </tr>
                        </tfoot>
                    </table>
                </div>
            </div>
        </div>
    </div>



</body>

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
    $(document).ready(function () {
        $("#reportbtn").click(function (e) {
            e.preventDefault();
            $.ajax({
                url: "reportgen.php",
                type: "POST",
                data: {
                    numberplate: $("#noplate").val(),
                    dayForReport: $("#scheduledDay").val()
                },
                dataType:"json",
                success: function (data) {
                    $("#tablebody").html(data.notification);
                }
            });
        });
    });
</script>


</html>