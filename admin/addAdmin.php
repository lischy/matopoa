<!doctype html>

<html lang="en">

<head>
    <meta charset="utf-8" />
    <link rel="icon" type="image/png" href="bus_icon_white.png">
    <link rel="icon" type="image/png" href="assets/img/favicon.ico">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

    <title>Admin manager</title>

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

            <li><a  href="schedule.php"><i class="fas fa-shuttle-van"></i>Schedule Vehicle</a></li>
                
            <li> <a  href="vehicles.php"><i class="fas fa-bus"></i>Vehicles</a></li>

            <li> <a  href="test.php"><i class="fas fa-bus"></i>Test</a></li>

            <li><a href="addRoute.php"><i class="fas fa-road"></i>Route Manager</a></li>

            <li><a class="current" href="addAdmin.php"><i class="fas fa fa-user"></i>Add Admin</a></li>

            <li><a href="Report.php"><i class="fas fa-archive"></i>Analytics</a></li>


                </ul>
            </div>
        </div>


        <div class="main-panel">
            <nav class="navbar navbar-default navbar-fixed">
                <div class="container-fluid">
                    <div class="navbar-header">

                        <h style="margin-top: 0px" class="navbar-brand"><img
                                style="float: left; width:45px; height:45px;" src="bus_icon_white.png"> <b
                                style="float: right; margin-top: 12px">Admin Manager</b></h>
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
                                    <h3 class="title">MatPoa Registration:</h3> <br>

                                    <section class="signup">
                                        <!-- <img src="images/signup-bg.jpg" alt=""> -->
                                        <div class="container">
                                            <div class="signup-content">
                                                <form action="regAdmin.php" method="POST" id="signup-form" class="signup-form"
                                                    >
                                                    <h2 class="form-title">Admin Registration</h2><br>

                                                    <div class="form-group">
                                                        <input type="text" class="form-input" name="name" id="name"
                                                            placeholder="Enter Username" required pattern="(?=.*\d)(\d|\w){6,12}" title="Username must be at least 6 characters long with at least one digit"/>
                                                    </div>

                                                    <div class="form-group">
                                                        <input type="password" class="form-input" name="password"
                                                            id="password" placeholder="Enter Password" required maxlength="10"
                                                            pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one  number and one uppercase and lowercase letter, and at least 8 or more characters" />
                                                        <span toggle="#password"
                                                            class="zmdi zmdi-eye field-icon toggle-password"></span>
                                                    </div>

                                                   

                                                    <div class="form-group">
                                                        <input type="email" class="form-input" name="email"
                                                            id="email" placeholder="Enter Email Address" pattern="[A-Za-z0-9._%+-]+@[A-Za-z0-9.-]+\.[A-Za-z]{1,63}$" required title="Input correct Email Address" />
                                                    </div>

                                                    <br>

                                                    <div class="form-group">
                                                        <input type="submit" name="submit" id="form-submit"
                                                            class="form-submit" value="Register Admin" onMouseOver="this.style.color='gray'" onMouseOut="this.style.color='#fff'" style="float: left; color: #fff; background: #5cb85c; border: 1px solid transparent; display: inline-block; outline: none; line-height: 40px;padding: 0 30px; font-size: .8em; text-align: center; text-decoration: none; font-weight: 500; cursor: pointer; -webkit-transition: all 0.3s ease 0s; -moz-transition: all 0.3s ease 0s; -o-transition: all 0.3s ease 0s; transition: all 0.3s ease 0s; font-size: 15px; border-radius: 40px"/>
                                                    </div>
                                                </form>
                        
                                            </div>
                                        </div>
                                    </section>
                                </div>
                            </div>
                        </div>
                    </div>
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
<!-- <script>
    $(document).ready(function () {
        $("#form-submit").click(function (e) {
            e.preventDefault();
            $.ajax({
                url: "regAdmin.php",
                type: "POST",
                data: {
                    name: $("#name").val(),
                    password: $("#password").val(),
                    email: $("#email").val()
                },
                success: function (data) {
                    alert(data);
                    $('#signup-form')[0].reset();
                }
            });
        });
    });
</script> -->


</html>