<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>dept Signup</title>
    <link rel="icon" href="../assets/img/fav.png" type="image/png">
    <link rel="stylesheet" href="../assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:400,700">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic">
    <link rel="stylesheet" href="../assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="../assets/fonts/ionicons.min.css">
    <link rel="stylesheet" href="../assets/css/Article-List.css">
    <link rel="stylesheet" href="../assets/css/Features-Boxed.css">
    <link rel="stylesheet" href="../assets/css/Footer-Dark.css">
    <link rel="stylesheet" href="../assets/css/Highlight-Blue.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.2.0/aos.css">
    <link rel="stylesheet" href="../assets/css/Login-Form-Clean.css">
    <script language="Javascript" src="../assets/js/jquery.js"></script>
    <script type="text/JavaScript" src="../assets/js/dept_state_district.js"></script>
</head>

<body id="page-top">
    <nav class="navbar navbar-light navbar-expand-lg fixed-top" id="mainNav" style="background: #1A4E85;">
        <div class="container-fluid">
            <a class="navbar-brand js-scroll-trigger" data-bs-hover-animate="pulse" href="../index.php" style="font-family: Montserrat, sans-serif;">VOICE UP</a>
            <button data-toggle="collapse" data-target="#navbarResponsive" class="navbar-toggler navbar-toggler-right rounded" data-aos="fade" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation" style="background: #fff;"><i class="fa fa-bars" style="color: #1A4E85;;"></i></button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="nav navbar-nav ml-auto">
                    <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" data-bs-hover-animate="pulse" href="../index.php" style="filter: contrast(100%) grayscale(0%) hue-rotate(0deg) invert(0%) sepia(0%);">HOME</a></li>
                    <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" data-bs-hover-animate="pulse" href="../contact.php">CONTACT</a></li>
                    <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" data-bs-hover-animate="pulse" href="../about.php">ABOUT</a></li>
                    <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" data-bs-hover-animate="pulse" href="../faq.php">FAQ</a></li>
                    <li class="nav-item mx-0 mx-lg-1"><a href="../login-choice.php"><button class="btn btn-dark text-monospace" data-bs-hover-animate="pulse" type="button" style="margin: 10px;background: rgb(255,255,255);color: #1A4E85;margin-left: 0;border-radius: 10px;">Log in</button></a></li>
                    <li class="nav-item mx-0 mx-lg-1"><a href="../signup-choice.php"><button class="btn btn-dark text-monospace" data-bs-hover-animate="pulse" type="button" style="margin: 10px;background: rgb(255,255,255);color: #1A4E85;margin-left: 0;border-radius: 10px;">Sign Up</button></a></li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="features-boxed">
        <div class="container-fluid" style="background: #ffffff;">
            <div class="intro" style="background: #1A4E85;margin-top: 120px;margin-bottom: 30px;">
                <h2 class="text-center" data-aos="fade" style="color: rgb(255,255,255);padding: 30px;margin-bottom: 0px;">Government Agency Signup</h2>
            </div>
        </div>
    </div>
    <div class="login-clean" style="padding: 0px; background: rgb(255,255,255);margin-top: 30px; ">
        <form method="post" action="signup-script.php" enctype="multipart/form-data" style="background: #1A4E85;margin-bottom: 40px;">
            <h5 style="color:#fff;">Department</h5>
            <div class="form-group">
                <select class="form-control" id="dept_type" name="dept_type" required>
                    <option selected disabled value="">Choose Department</option>
                    <option value="Police">Police</option>
                    <option value="Municipal">Municipal</option>
                    <option value="Panchayat">Panchayat</option>
					<option value="Fire">Fire</option>
                </select>
            </div>
			
			<h5 style="color:#fff;">Dept. Logo</h5>
            <div class="form-group"><input class="form-control" id="dept_photo" type="file" accept="image/jpeg, image/jpg, image/png" name="dept_photo" placeholder="Department Logo" required="" autofocus=""></div>
			
			<h5 style="color:#fff;">Mobile Number</h5>
            <div class="form-group"><input class="form-control" id="dept_mobile" type="phone" name="dept_mobile" pattern="^[6-9]{1}[0-9]{9}$" title="Enter Valid 10 digit Mobile Number (Ex. 76435654XX)" placeholder="Your Mobile Number" required="" autofocus=""></div>

            <h5 style="color:#fff;">Apartment/Street</h5>
            <div class="form-group"><input class="form-control" id="dept_street" type="text" name="dept_street" placeholder="Your Apartment/Street" required="" autofocus=""></div>

			<h5 style="color:#fff;">District</h5>
			<div class="form-group"><input class="form-control" id="dept_city" type="text" name="dept_city" placeholder="District" required="" autofocus=""></div>
			
			<h5 style="color:#fff;">State</h5>
			<div class="form-group"><input class="form-control" id="dept_state" type="text" name="dept_state" placeholder="State" required="" autofocus=""></div>
			
			<h5 style="color:#fff;">Pincode</h5>
            <div class="form-group"><input class="form-control" id="dept_pincode" type="text" name="dept_pincode" pattern="^[1-9]{1}[0-9]{5}" title="Enter valid 6 digit Pincode (Ex. 5763XX)" placeholder="Your Pincode" required="" autofocus=""></div>
			
			<h5 style="color:#fff;">Employee Name</h5>
            <div class="form-group"><input class="form-control" id="dept_name" type="text" name="dept_name" placeholder="Emplyee Full Name" required="" autofocus=""></div>
			
			<h5 style="color:#fff;">Employee Id</h5>
			<div class="form-group"><input class="form-control" id="dept_cpeid" type="text" name="dept_cpeid" placeholder="Employee ID" required="" autofocus=""></div>
			
			<h5 style="color:#fff;">Employee Designation</h5>
			<div class="form-group"><input class="form-control" id="dept_cppos" type="text" name="dept_cppos" placeholder="Employee Designation" required="" autofocus=""></div>
			
			<h5 style="color:#fff;">Employee Id Card</h5>
            <div class="form-group"><input class="form-control" id="dept_cpepdf" type="file" accept="application/pdf" name="dept_cpepdf" required="" autofocus=""></div>
			
            <h5 style="color:#fff;">Aadhar Number</h5>
            <div class="form-group"><input class="form-control" id="dept_aadhar" type="text" name="dept_aadhar" pattern="^[2-9]{1}[0-9]{11}$" title="Enter 12 digit Aadhar Number (Ex. 2345678382XX)" placeholder="Your Aadhar Number" required="" autofocus=""></div>

            <h5 style="color:#fff;">Aadhar PDF</h5>
            <div class="form-group"><input class="form-control" id="dept_aadharpdf" type="file" accept="application/pdf" name="dept_aadharpdf" required="" autofocus=""></div>

            <h5 style="color:#fff;">Password</h5>
            <div class="form-group"><input class="form-control" id="dept_password" type="password" name="dept_password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" placeholder="Your Password" required="" autofocus=""></div>

            <input name="submit" class="btn btn-primary btn-block" type="submit" value=" Sign Up "><a class="forgot" href="../dept/login.php" style="color: rgb(255,255,255); margin-top:15px;">Already have account? Click here.</a>
        </form>
    </div>

    <div class="footer-dark" style="background: #1A4E85;">
        <footer>
            <div class="container-fluid">
                <p style="text-align: center; color:#fff;"><strong>© 2021 Voice Up.&nbsp; All rights reserved.</strong><br></p>
            </div>
        </footer>
    </div>
    <script src="../assets/js/jquery.min.js"></script>
    <script src="../assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="../assets/js/bs-init.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.2.0/aos.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
    <script src="../assets/js/freelancer.js"></script>
</body>

</html>