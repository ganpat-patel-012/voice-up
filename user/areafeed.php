<?php

include('session-script.php');
$res = $_SESSION["sessionid"];
$u_mobile = $res;
if (!isset($_SESSION['login_user'])) {
    header("location: login.php"); // Redirecting To Profile Page
}
error_reporting(0);
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Area Feed</title>
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
                    <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" data-bs-hover-animate="pulse" href="allfeed.php">All Feed</a></li>
                    <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" data-bs-hover-animate="pulse" href="submitissue.php">Submit An Issue</a></li>
                    <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" data-bs-hover-animate="pulse" href="activeissue.php">Active Issues</a></li>
                    </li><li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" data-bs-hover-animate="pulse" href="solvedissue.php">Solved Issues</a></li>
					<li class="nav-item mx-0 mx-lg-1"><a href="../user/citizensprofile.php"><button class="btn btn-dark text-monospace" data-bs-hover-animate="pulse" type="button" style="margin: 10px;background: rgb(255,255,255);color: #1A4E85;margin-left: 0;border-radius: 10px;">Profile</button></a></li>
                    <li class="nav-item mx-0 mx-lg-1"><a href="../user/logout-script.php"><button class="btn btn-dark text-monospace" data-bs-hover-animate="pulse" type="button" style="margin: 10px;background: rgb(255,255,255);color: #1A4E85;margin-left: 0;border-radius: 10px;">Log Out</button></a></li>
                </ul>
            </div>
        </div>
    </nav>

    <?php
     $con = mysqli_connect("localhost", "root", "", "voiceup");
    if (!$con) {
        die(" Connection Error ");
    }

    $query = " select * from user where u_mobile=".$u_mobile."";
    $result = mysqli_query($con, $query);

    while ($res = mysqli_fetch_assoc($result)) {
        $u_approve =  $res['u_approve'];
        $u_pincode = $res['u_pincode'];
    }
    ?>

    <?php
    if ($u_approve == 1 || $u_approve == 3 || $u_approve == 4 || $u_approve == 5 || $u_approve == NULL) { ?>
        <div class="container" style="margin-top:150px;">
            <div class="jumbotron" style="text-align: center; background-color:#1A4E85; color:#fff;">
                <h2>Status : <?php if ($u_approve == "1") {
                                    echo "No Action";
                                } else if ($u_approve == "2") {
                                    echo " Accepted";
                                } else if ($u_approve == "3") {
                                    echo "Review";
                                } else if ($u_approve == "4") {
                                    echo "Rejected";
                                } else if ($u_approve == "5") {
                                    echo "Resubmitted";
                                } else if ($u_approve == NULL) {
                                    echo "Multiple Login State";
                                } ?></h4>
                    <hr>
                    <?php
                    if ($u_approve == 1) { ?>
                        <h3>Your profile is not approved by Voice Up.
                </h2>
                <h5>You have registerd successfully. We are checking your details.</h5>
                <h5>Please wait for sometime.</h5>
                <h5>Thank You</h5>
            <?php
                    }
                    if ($u_approve == 3) { ?>
                <h3>Your profile is not approved by Voice Up.</h2>
                    <h5>Your application have some problem. We will contact you soon</h5>
                    <h5>Please wait for for our call.</h5>
                    <h5>Thank You</h5>
                <?php
                    }
                    if ($u_approve == 4) { ?>
                    <h3>Your profile is not approved by Voice Up.</h2>
                        <h5>Your application got rejected due to not following rules.</h5>
                        <h5>You can contact our customer care for more details.</h5>
                        <h5>Thank You</h5>
                    <?php
                    }
                    if ($u_approve == 5) { ?>
                        <h3>Your profile is not approved by Voice Up.</h2>
                            <h5>Your have resubmitted application successfully. We are checking your details.</h5>
                            <h5>Please wait for sometime.</h5>
                            <h5>Thank You</h5>
                        <?php
                    } else if ($u_approve == NULL) { ?>
                            <h4> You Have logged in to multiple user Accounts. Please Logout from all other accounts and then login to Farmer Profile.
                            <?php
                        } ?>
                            <h6><strong>Go to home <a href="../index.php">HERE</a></strong></a></h6>
            </div>
        </div>
    <?php }

    ?>

    <?php
    if ($u_approve == 2) { ?>

        <div class="features-boxed" style="background: #ffffff;>
            <div class="container" style="background: #ffffff;">
                <div class="intro" style="background: #1A4E85;margin-top: 120px;margin-bottom: 30px;">
                    <h2 class="text-center" data-aos="fade" style="color: rgb(255,255,255);padding: 30px;margin-bottom: 0px;">Area Feed</h2>
                </div>
            </div>
        </div>


        <?php

        $con = mysqli_connect("localhost", "root", "", "voiceup");

        $count = $con->query("SELECT * from issue i,user u  where u.u_id=i.i_u_id and i_privacy='Public' and u.u_pincode=$u_pincode and u_mobile!=$u_mobile and i.i_status=0")->num_rows;
        if($count==0){ ?>
        <center><h3 style="border:5px solid black;width:70%;text-align:center; margin:20px;padding:20px;"> No Data available</h3></center>
        <?php } ?>


        <?php
        $q = "SELECT * from issue i,user u  where u.u_id=i.i_u_id and i_privacy='Public' and u.u_pincode=$u_pincode and u_mobile!=$u_mobile and i.i_status=0";
        $query = mysqli_query($con, $q);
        $c = 1;

        while ($res = mysqli_fetch_array($query)) {
        ?>
            <div class="post">
                <div class="post-image">
                    <img src="<?php echo $res['i_img1'];?>" alt="">
                </div>
                <div class="post-content">
                    <p class="post-date">Posted on <?php echo $res['i_date'];  ?></time> by <?php echo $res['u_name'];  ?></p>
                    <h4 class="post-title"><?php echo $res['i_title'];  ?></h4>
                    <div class="post-excerpt">
                    <p><?php echo $res['i_sum'];  ?></p>
                    <?php $i_id=$res['i_id'];  ?>
                    </div>
                    
                    <li class="post-link"><a href="viewissue.php?i_id=<?php echo $res['i_id'];  ?>"><button class="btn btn-light " data-bs-hover-animate="pulse" type="button" style="margin: -5px;background: #1A4E85;color: #fff;margin-left: -5px;border-radius: 5px;">Read More</button></a></li>

                    <?php
                        $upvoteCount = ($con->query("select * from vote where v_u_mobile=".$u_mobile." and v_i_id=".$i_id." and v_type=1")->num_rows);
                        $downvoteCount = ($con->query("select * from vote where v_u_mobile=".$u_mobile." and v_i_id=".$i_id." and v_type=2")->num_rows);
                    ?>
                                        <?php
                                        if ($upvoteCount == 1) {
                                        ?>
                                            <div style="display:block; padding-top:20px;padding-bottom:20px;">
                                            <img src="../assets/img/upvoted.png" style="width:35px;height:35px;margin-left:0px;">
                                            <h5 style="display:inline; margin-left:40px; padding:5px;"><?php echo $res['i_upvote'];  ?></h5>
                                            <a href="downvotearea.php?u_mobile=<?php echo $u_mobile?>&&i_id=<?php echo $res['i_id'];  ?>"><img src="../assets/img/down.png" style="width:35px;height:35px;margin-left:10px;"></a>
                                            <h5 style="display:inline; margin-left:55px;"><?php echo $res['i_downvote'];  ?></h5>
                                            <a href="removevotearea.php?u_mobile=<?php echo $u_mobile?>&&i_id=<?php echo $res['i_id'];  ?>"><img src="../assets/img/remove.png" style="width:35px;height:35px;margin-left:10px;"></a>
                                            </div>
                                        <?php
                                        }
                                        else if ($downvoteCount == 1) {
                                        ?>
                                            <div style="display:block; padding-top:20px;padding-bottom:20px;">
                                            <a href="upvotearea.php?u_mobile=<?php echo $u_mobile?>&&i_id=<?php echo $res['i_id'];  ?>"><img src="../assets/img/up.png" style="width:35px;height:35px;margin-left:0px;"></a>
                                            <h5 style="display:inline; margin-left:40px; padding:5px;"><?php echo $res['i_upvote'];  ?></h5>
                                            <img src="../assets/img/downvoted.png" style="width:35px;height:35px;margin-left:10px;">
                                            <h5 style="display:inline; margin-left:55px;"><?php echo $res['i_downvote'];  ?></h5>
                                            <a href="removevotearea.php?u_mobile=<?php echo $u_mobile?>&&i_id=<?php echo $res['i_id'];  ?>"><img src="../assets/img/remove.png" style="width:35px;height:35px;margin-left:10px;"></a>
                                            </div>
                                        <?php
                                        }
                                        else{
                                            ?>
                                                <div style="display:block; padding-top:20px;padding-bottom:20px;">
                                                <a href="upvotearea.php?u_mobile=<?php echo $u_mobile?>&&i_id=<?php echo $res['i_id'];  ?>"><img src="../assets/img/up.png" style="width:35px;height:35px;margin-left:0px;"></a>
                                                <h5 style="display:inline; margin-left:40px; padding:5px;"><?php echo $res['i_upvote'];  ?></h5>
                                                <a href="downvotearea.php?u_mobile=<?php echo $u_mobile?>&&i_id=<?php echo $res['i_id'];  ?>"><img src="../assets/img/down.png" style="width:35px;height:35px;margin-left:10px;"></a>
                                                <h5 style="display:inline; margin-left:55px;"><?php echo $res['i_downvote'];  ?></h5>
                                                </div>
                                            <?php
                                            }
                                        ?>
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