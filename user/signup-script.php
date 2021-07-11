<?php
error_reporting(0);
$con = mysqli_connect("lbbdpklnafwiw9pb9rhb2-mysql.services.clever-cloud.com", "uttrd2cgktfzdsye", "wtpltLGKuSJnqNr78d13", "bbdpklnafwiw9pb9rhb2");

if (isset($_POST["submit"])) {
    #retrieve file title
    $user_mobile = $con->real_escape_string($_POST['user_mobile']);
    $user_name = $con->real_escape_string($_POST['user_name']);
    $user_gender = $con->real_escape_string($_POST['user_gender']);
    $user_age = $con->real_escape_string($_POST['user_age']);
    $user_street = $con->real_escape_string($_POST['user_street']);
    $user_city = $con->real_escape_string($_POST['user_city']);
    $user_state = $con->real_escape_string($_POST['user_state']);
    $user_pincode = $con->real_escape_string($_POST['user_pincode']);
    $user_aadhar = $con->real_escape_string($_POST['user_aadhar']);
    $user_password = $con->real_escape_string($_POST['user_password']);
    $user_approve = 1;

    $sql = "Select * from user";
    $result = $con->query($sql);

    if (mysqli_num_rows($result) > 0) {
        while ($res = mysqli_fetch_assoc($result)) {
            if ($res["u_mobile"] == $user_mobile) {
                header("location: alreadyregistered.php");
            } else {
                #file name with a random number so that similar dont get replaced
                $user_aadharpdf = $user_mobile . "-" . $user_name . "-" . $_FILES["user_aadharpdf"]["name"];
                $user_photo = $user_mobile . "-" . $user_name . "-" . $_FILES["user_photo"]["name"];

                #temporary file name to store file
                $tname1 = $_FILES["user_aadharpdf"]["tmp_name"];
                $tname2 = $_FILES["user_photo"]["tmp_name"];

                #target path
                $target_path1 = "../user/aadhar/" . $user_aadharpdf;
                $target_path2 = "../user/photos/" . $user_photo;


                #TO move the uploaded file to specific location
                move_uploaded_file($tname1, $target_path1);
                move_uploaded_file($tname2, $target_path2);

                #sql query to insert into database
                $query = "INSERT into user(u_mobile,u_name,u_gender,u_age,u_street,u_city,u_state,u_pincode,u_aadhar,u_aadharpdf,u_photo,u_password,u_approve) VALUES('$user_mobile','$user_name','$user_gender','$user_age','$user_street','$user_city','$user_state','$user_pincode','$user_aadhar','$target_path1','$target_path2','$user_password','$user_approve')";
                $success = $con->query($query);
            }
        }
    }
}

$con->close();

?>


<html>

<head>
    <title>Success - Farmer Signup</title>

    <link rel="shortcut icon" type="image/png" href="../assets/img/fav.png">
    <link rel="stylesheet" type="text/css" href="../assets/css/manager_registered_success.css">
    <link rel="stylesheet" type="text/css" href="../assets/bootstrap/css/bootstrap.min.css">
    <script type="text/javascript" src="../assets/js/jquery.min.js"></script>
    <script type="text/javascript" src="../assets/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="../assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:400,700">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic">
    <link rel="stylesheet" href="../assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="../assets/css/Article-List.css">
    <link rel="stylesheet" href="../assets/css/Features-Boxed.css">
    <link rel="stylesheet" href="../assets/css/Footer-Dark.css">
    <link rel="stylesheet" href="../assets/css/Highlight-Blue.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.2.0/aos.css">
</head>

<style>
    .footer-dark {
        position: fixed;
        left: 0;
        bottom: 0;
        width: 100%;
        background-color: red;
        color: white;
        text-align: center;
    }
</style>

<body>
    <nav class="navbar navbar-light navbar-expand-lg fixed-top" id="mainNav" style="background: #1A4E85;">
        <div class="container-fluid">
            <a class="navbar-brand js-scroll-trigger" data-bs-hover-animate="pulse" href="../index.php" style="font-family: Montserrat, sans-serif;">VOICE UP</a>
            <button data-toggle="collapse" data-target="#navbarResponsive" class="navbar-toggler navbar-toggler-right rounded" data-aos="fade" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation" style="background: #fff;"><i class="fa fa-bars" style="color: #1A4E85;;"></i></button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="nav navbar-nav ml-auto">
                    <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" data-bs-hover-animate="pulse" href="../index.php" style="filter: contrast(100%) grayscale(0%) hue-rotate(0deg) invert(0%) sepia(0%);">HOME</a></li>
                    <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" data-bs-hover-animate="pulse" href="../contact.php">CONTACT</a></li>
                    <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" data-bs-hover-animate="pulse" href="../about.php">About</a></li>
                    <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" data-bs-hover-animate="pulse" href="../faq.php">FAQ</a></li>
                    <li class="nav-item mx-0 mx-lg-1"><a href="../login-choice.php"><button class="btn btn-dark text-monospace" data-bs-hover-animate="pulse" type="button" style="margin: 10px;background: rgb(255,255,255);color: #1A4E85;margin-left: 0;border-radius: 10px;">Log in</button></a></li>
                    <li class="nav-item mx-0 mx-lg-1"><a href="../signup-choice.php"><button class="btn btn-dark text-monospace" data-bs-hover-animate="pulse" type="button" style="margin: 10px;background: rgb(255,255,255);color: #1A4E85;margin-left: 0;border-radius: 10px;">Sign Up</button></a></li>
                </ul>
            </div>
        </div>
    </nav>

    
    <div class="container" style="margin-top:150px;">
        <div class="jumbotron" style="text-align: center; background-color:#1A4E85; color:#fff;">
            <h2> <?php echo "Welcome $user_name!" ?> </h2>
            <br>
            <h3>Your details for user account has been submitted Successfully.</h3>
            <h5>We are reviewing your details and documents. Please have a little patience.</h5>
            <br>
            <h6><strong>Go to home <a href="../index.php">HERE</a></strong> <span>&nbsp&nbsp&nbsp</span><strong>Try to login <a href="login.php">HERE</strong></a></h6>
        </div>
    </div>

    <div class="footer-dark" style="background: #1A4E85;">
        <footer>
            <div class="container">
                <p style="text-align: center;"><strong>© 2021 Voice Up.&nbsp; All rights reserved.</strong><br></p>
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