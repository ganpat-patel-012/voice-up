<?php

include('session-script.php');
$res = $_SESSION["sessionid"];
$u_mobile = $res;
if (!isset($_SESSION['login_dept'])) {
    header("location: login.php"); // Redirecting To Profile Page
}
error_reporting(0);
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Personal Feed</title>
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
    <link rel="stylesheet" href="../assets/css/card-hover.css">
    <link rel="stylesheet" href="../assets/css/feed.css">
    <style>
        @media(max-width: 992px) {
            .lap {
                display: none;
            }
        }

        @media(min-width: 992px) {
            .mob {
                display: none;
            }
        }
    </style>
</head>

<body id="page-top">
    <nav class="navbar navbar-light navbar-expand-lg fixed-top" id="mainNav" style="background: #1A4E85;">
        <div class="container-fluid">
            <a class="navbar-brand js-scroll-trigger" data-bs-hover-animate="pulse" href="../index.php" style="font-family: Montserrat, sans-serif;">VOICE UP</a>
            <button data-toggle="collapse" data-target="#navbarResponsive" class="navbar-toggler navbar-toggler-right rounded" data-aos="fade" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation" style="background: #fff;"><i class="fa fa-bars" style="color: #1A4E85;;"></i></button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="nav navbar-nav ml-auto">
                    <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" data-bs-hover-animate="pulse" href="areafeed.php">Area Feed</a></li>
                    <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" data-bs-hover-animate="pulse" href="publicfeed.php">Public Feed</a></li>
                    <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" data-bs-hover-animate="pulse" href="personalfeed.php">Personal Feed</a></li>
                    <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" data-bs-hover-animate="pulse" href="solvedissue.php">Solved Issues</a></li>
                    <li class="nav-item mx-0 mx-lg-1"><a href="../dept/agencyprofile.php"><button class="btn btn-dark text-monospace" data-bs-hover-animate="pulse" type="button" style="margin: 10px;background: rgb(255,255,255);color: #1A4E85;margin-left: 0;border-radius: 10px;">Profile</button></a></li>
                    <li class="nav-item mx-0 mx-lg-1"><a href="../dept/logout-script.php"><button class="btn btn-dark text-monospace" data-bs-hover-animate="pulse" type="button" style="margin: 10px;background: rgb(255,255,255);color: #1A4E85;margin-left: 0;border-radius: 10px;">Log Out</button></a></li>
                </ul>
            </div>
        </div>
    </nav>

    <?php
     $con = mysqli_connect("localhost", "root", "", "voiceup");
    if (!$con) {
        die(" Connection Error ");
    }

    $query = " select * from dept where d_mobile=".$u_mobile."";
    $result = mysqli_query($con, $query);

    while ($res = mysqli_fetch_assoc($result)) {
        $d_approve =  $res['d_approve'];
        $d_pincode = $res['d_pincode'];
        $d_type = $res['d_type'];
    }
    ?>

    <?php
    if ($d_approve == 1 || $d_approve == 3 || $d_approve == 4 || $d_approve == 5 || $d_approve == NULL) { ?>
        <div class="container" style="margin-top:150px;">
            <div class="jumbotron" style="text-align: center; background-color:#1A4E85; color:#fff;">
                <h2>Status : <?php if ($d_approve == "1") {
                                    echo "No Action";
                                } else if ($d_approve == "2") {
                                    echo " Accepted";
                                } else if ($d_approve == "3") {
                                    echo "Review";
                                } else if ($d_approve == "4") {
                                    echo "Rejected";
                                } else if ($d_approve == "5") {
                                    echo "Resubmitted";
                                } else if ($d_approve == NULL) {
                                    echo "Multiple Login State";
                                } ?></h4>
                    <hr>
                    <?php
                    if ($d_approve == 1) { ?>
                        <h3>Your profile is not approved by Voice Up.
                </h2>
                <h5>You have registerd successfully. We are checking your details.</h5>
                <h5>Please wait for sometime.</h5>
                <h5>Thank You</h5>
            <?php
                    }
                    if ($d_approve == 3) { ?>
                <h3>Your profile is not approved by Voice Up.</h2>
                    <h5>Your application have some problem. We will contact you soon</h5>
                    <h5>Please wait for for our call.</h5>
                    <h5>Thank You</h5>
                <?php
                    }
                    if ($d_approve == 4) { ?>
                    <h3>Your profile is not approved by Voice Up.</h2>
                        <h5>Your application got rejected due to not following rules.</h5>
                        <h5>You can contact our customer care for more details.</h5>
                        <h5>Thank You</h5>
                    <?php
                    }
                    if ($d_approve == 5) { ?>
                        <h3>Your profile is not approved by Voice Up.</h2>
                            <h5>Your have resubmitted application successfully. We are checking your details.</h5>
                            <h5>Please wait for sometime.</h5>
                            <h5>Thank You</h5>
                        <?php
                    } else if ($d_approve == NULL) { ?>
                            <h4> You Have logged in to multiple dept Accounts. Please Logout from all other accounts and then login to Farmer Profile.
                            <?php
                        } ?>
                            <h6><strong>Go to home <a href="../index.php">HERE</a></strong></a></h6>
            </div>
        </div>
    <?php }

    ?>

    <?php
    if ($d_approve == 2) { ?>

        <div class="features-boxed " style="background: #ffffff;>
            <div class="container" style="background: #ffffff;">
                <div class="intro" style="background: #1A4E85;margin-top: 120px;margin-bottom: 30px;">
                    <h2 class="text-center" data-aos="fade" style="color: rgb(255,255,255);padding: 30px;margin-bottom: 0px;">Personal Feed</h2>
                </div>
            </div>
        </div>


        <?php

        $con = mysqli_connect("localhost", "root", "", "voiceup");

        $count = $con->query("SELECT * from issue i, user u where i.i_type='$d_type' and u.u_id=i.i_u_id and u.u_pincode=$d_pincode and i.i_status=0 and i_privacy='Personal' ")->num_rows;
        if($count==0){ ?>
        <center><h3 style="border:5px solid black;width:70%;text-align:center; margin:20px;padding:20px;"> No Data available</h3></center>
        <?php } ?>


        <?php
        $q = "SELECT * from issue i, user u where i.i_type='$d_type' and u.u_id=i.i_u_id and u.u_pincode=$d_pincode and i.i_status=0 and i_privacy='Personal' ";
        $query = mysqli_query($con, $q);
        $c = 1;

        while ($res = mysqli_fetch_array($query)) {
        ?>
            <div class="post">
                <div class="post-image">
                    <img src="../user/<?php echo $res['i_img1'];?>"" alt="">
                </div>
                <div class="post-content">
                    <p class="post-date">Posted on <?php echo $res['i_date'];  ?></time> by <?php echo $res['u_name'];  ?></p>
                    <h4 class="post-title"><?php echo $res['i_title'];  ?></h4>
                    <div class="post-excerpt">
                    <p><?php echo $res['i_sum'];  ?></p>
                    </div>
                    <li class="post-link"><a href="#"><button class="btn btn-light " data-bs-hover-animate="pulse" type="button" style="margin: -5px;background: #1A4E85;color: #fff;margin-left: -5px;border-radius: 5px;">Read More</button></a></li>
                    <li class="post-link" style="background:#059618; margin-top:10px;"><a href="markedsolved.php?i_id=<?php echo $res['i_id'];  ?>"><button class="btn btn-light " data-bs-hover-animate="pulse" type="button" style="margin: -5px;background: #059618;color: #fff;margin-left: -5px;border-radius: 5px;">Issue Solved</button></a></li>
                </div>
                </div>
        <?php
        }
        ?>

    <?php } ?>



    <div class="footer-dark" style="background: #1A4E85;">
        <footer>
            <div class="container-fluid">
                <p style="text-align: center;  color:#fff;"><strong>© 2021 Voice Up.&nbsp; All rights reserved.</strong><br></p>
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