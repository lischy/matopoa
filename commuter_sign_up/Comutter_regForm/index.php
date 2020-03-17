<!DOCTYPE html> 
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" type="image/png" href="bus_icon_white.png">
    <title>MatPoa Sign up</title>

    <!-- Font Icon -->
    <link rel="stylesheet" href="fonts/material-icon/css/material-design-iconic-font.min.css">

    <!-- Main css -->
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

    <div class="main">

        <section class="signup">
            <!-- <img src="images/signup-bg.jpg" alt=""> -->
            <div class="container">
                <div class="signup-content">
                    <form method="POST" id="signup-form" class="signup-form" action="add_user.php">
                        <h2 class="form-title">MatPoa Sign up</h2>

                        <div class="form-group">
                            <input type="text" class="form-input" name="fname" id="fname" placeholder="First Name" required pattern="[A-Za-z]{1,20}" title="Enter correct name formart" />
                        </div>

                        <div class="form-group">
                            <input type="text" class="form-input" name="lname" id="lname" placeholder="Last Name" required pattern="[A-Za-z]{1,20}" title="Enter correct name formart" />
                        </div>

                        <div class="form-group">
                            <input type="text" class="form-input" name="username" id="username" placeholder="Username" required maxlength="12" pattern="(?=.*\d)(\d|\w){6,12}" title="Username must be at least 6 characters long with at least one digit" />
                        </div>

                        <div class="form-group">
                            <input class="form-input" name="phoneNumber" id="phoneNumber" placeholder="Phone Number" required pattern="07\d{8}" title="Please enter a valid phone number (07-)" />
                        </div>

                        <div class="form-group">
                            <input type="text" class="form-input" name="password" id="password" placeholder="Password" required maxlength="10" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one  number and one uppercase and lowercase letter, and at least 8 or more characters" />
                            <span toggle="#password" class="zmdi zmdi-eye field-icon toggle-password"></span>
                        </div>

                        <div class="form-group">
                            <input type="text" class="form-input" name="kinName" id="kinName" placeholder="Next of Kin" required />
                        </div>

                        <div class="form-group">
                            <input type="number" class="form-input" name="kinPhone" id="kinPhone" placeholder="Kin Phone number" required/>
                        </div>
    
                        <br>

                        <div class="form-group">
                            <input type="submit" name="submit" id="submit" class="form-submit" value="Register"/>
                        </div>
                    </form>
                    <p class="loginhere">
                        Already have an account ? <a href="#" class="loginhere-link">Login here</a>
                    </p>
                </div>
            </div>
        </section>

    </div>

    <!-- JS -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="js/main.js"></script>
</body>
</html>