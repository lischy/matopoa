<!doctype html>

<html lang="en">
<head>
    <meta charset="utf-8" />
    <link rel="icon" type="image/png" href="assets/img/favicon.ico">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

    <title>create ticket</title>

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
    <link rel="stylesheet" type="text/css" href="../css/ticket.css" />


</head>

<body>

<div class="wrapper">
    <div class="sidebar" data-color="blue" data-image="assets/img/sideba-5.jpg">

    <!--   you can change the color of the sidebar using: data-color="blue | azure | green | orange | red | purple" -->
        <div class="sidebar-wrapper">
            <div class="logo">

               <h5 style="margin-left: 0.9em; color: white; font-size: 15px"><b>SUPPORT CENTRE</b></h5>
                    
            </div>

            <ul class="nav">
               
            <li><a href="index.php"><i class="fas fa-home"></i>Home</a></li>
                
        <li> <a class="current" href="createticket.php"><i class="fas fa-users-cog"></i>Create Ticket</a></li>

            
                
            </ul>
        </div>
    </div>


    <div class="main-panel">
        <nav class="navbar navbar-default navbar-fixed">
            <div class="container-fluid">
                <div class="navbar-header">
                    
                    <h class="navbar-brand" ><b>Create Ticket</b></h>
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
            <form action="/action_page.php">

<h3> ICT Support Request Form</h3>
<!-- <h4> <i>Create New Ticket</i></h4> -->

<p style="text-align:center"><i>Required fields are marked with</i> <font class="required"> *</font></p>


 <!-- <div class="row"><label class="control-label" for="pnumber">Name:</label><span class ="required">*</span>
 <input type="text" size="40" id="name" name="name" required></div>

 <div class="row"><label class="control-label" for="pnumber">PNumber:</label><span class ="required">*</span>
 <input type="text" size="40" id="pnumber" required></div>
 
 <div class="row"><label class="control-label" for="e-mail">E-mail:</label><span class ="required">*</span>
 <input type="text" size="40" id="e-mail" required></div>
 

 <div class="row"><label class="control-label" for="phone number">Phone Number:</label><span class ="required">*</span>
 <input type="tel" size="40" id="phone number" required></div>
    
    <hr>
    
 <table border="0" width="100%">
        <tbody><tr>
        <td style="text-align:right" width="150">Location: <font class="required">*</font></td>
        <td width="80%">
        <select name="Location" required>
        <option value="" selected disabled>-select your location-</option>
        <option value="TimesTowers">Times Towers</option>
        <option value="CBC">CBC</option>
        <option value="KESRA">KESRA</option>
        <option value="JKIA">JKIA</option>
        <option value="Wilson Airport">Wilson Airport</option>
        <option value="Thika">Thika</option>
        <option value="Voi">Voi</option>
 
    </select></td></tbody>
 </table>
 
  
  --> <div class="row"><label class="control-label" for="FloorNo">FloorNo:</label><span class ="required">*</span>
  <input type="number" width="50" id="name" required></div>

    

 <table border="0" width="100%">
        <tbody><tr>
        <td style="text-align:right; margin-left: 10px" width="150">Incident Category: <font class="required">*</font></td>
        <td width="80%"><select name="priority" required>
        <option value="" selected disabled>-select category-</option>
        <option value="Infrastructure Services">Infrastructure Services</option>
        <option value="Application Services">Application Services</option>
        <option value="Standard IT Services">Standard IT Services</option>
        <option value="HR Services">HR Services</option>
        <option value="Facilities&Logistics Services">Facilities&Logistics Services</option>
 
    </select></td></tbody>
 </table>

 <div style="margin-left: 73px; margin-bottom: 10px"  valign="top"> Incident Details:</label><span class ="required">*</span>
 <textarea name="incidentdetails" rows="12" cols="60" required></textarea></div>

        

<div style ="text-align: left"></style><input type="submit" value="Submit Ticket" id="submit" /></div>

</form>
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