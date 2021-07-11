<!doctype html>
<html>

<head>
    <meta charset='utf-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <title>View Issue</title>
    <link rel="icon" href="assets/img/fav.png" type="image/png">
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:400,700">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic">
    <link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="assets/fonts/ionicons.min.css">
    <link rel="stylesheet" href="assets/css/Article-List.css">
    <link rel="stylesheet" href="assets/css/Footer-Dark.css">
    <link rel="stylesheet" href="assets/css/Highlight-Blue.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.2.0/aos.css">
    <link rel="stylesheet" href="assets/css/Login-Form-Clean.css">
    <link rel="stylesheet" href="assets/css/table-style.css">
    <link rel="stylesheet" href="assets/css/profile.css">
    <link href='https://cdnjs.cloudflare.com/ajax/libs/MaterialDesign-Webfont/3.6.95/css/materialdesignicons.css' rel='stylesheet'>

    <script type='text/javascript' src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js'></script>


</head>

<body oncontextmenu='return false' class='snippet-body'>
    <div class="page-content page-container" id="page-content">
        <nav class="navbar navbar-light navbar-expand-lg fixed-top" id="mainNav" style="background: #1A4E85;">
            <div class="container-fluid">
                <a class="navbar-brand js-scroll-trigger" data-bs-hover-animate="pulse" href="index.php" style="font-family: Montserrat, sans-serif;">VOICE UP</a>
                <button data-toggle="collapse" data-target="#navbarResponsive" class="navbar-toggler navbar-toggler-right rounded" data-aos="fade" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation" style="background: #fff;"><i class="fa fa-bars" style="color: #0c3823;;"></i></button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="nav navbar-nav ml-auto">
                    <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" data-bs-hover-animate="pulse" href="index.php" style="filter: contrast(100%) grayscale(0%) hue-rotate(0deg) invert(0%) sepia(0%);">HOME</a></li>
                    <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" data-bs-hover-animate="pulse" href="contact.php">CONTACT</a></li>
                    <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" data-bs-hover-animate="pulse" href="about.php">About</a></li>
                    <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" data-bs-hover-animate="pulse" href="faq.php">FAQ</a></li>
                    <li class="nav-item mx-0 mx-lg-1"><a href="login-choice.php"><button class="btn btn-dark text-monospace" data-bs-hover-animate="pulse" type="button" style="margin: 10px;background: rgb(255,255,255);color: #1A4E85;margin-left: 0;border-radius: 10px;">Log in</button></a></li>
                    <li class="nav-item mx-0 mx-lg-1"><a href="signup-choice.php"><button class="btn btn-dark text-monospace" data-bs-hover-animate="pulse" type="button" style="margin: 10px;background: rgb(255,255,255);color: #1A4E85;margin-left: 0;border-radius: 10px;">Sign Up</button></a></li>
                    <li class="nav-item mx-0 mx-lg-1"><a href="admin/login.php"><button class="btn btn-dark text-monospace" data-bs-hover-animate="pulse" type="button" style="margin: 10px;background: rgb(255,255,255);color: #1A4E85;margin-left: 0;border-radius: 10px;">Admin</button></a></li>
</ul>
                </div>
            </div>
        </nav>

       <div class="article-list" style="background: rgb(252,252,252);">
        <div class="container">
            <div class="intro">
                <h2 class="text-center">Latest Articles</h2>
                <h2 class="text-center" style="background: #1A4E85;color: rgb(255,255,255);padding: 20px;padding-top: 20px;margin-bottom: 10px;margin-top: 50px;">Raised Issue Details</h2>
            </div>
       </div>


        <?php
         $con = mysqli_connect("localhost", "root", "", "voiceup");

         $i_id = $_GET['i_id'];

         
        $q = "SELECT * from issue where i_id=$i_id";
        $query = mysqli_query($con, $q);
        $c = 1;

        while ($res = mysqli_fetch_array($query)) {
            $i_id =  $res['i_id'];
            $i_type =  $res['i_type'];
            $i_title =  $res['i_title'];
            $i_sum =  $res['i_sum'];
            $i_des = $res['i_des'];
            $i_exactloc =  $res['i_exactloc'];
            $i_date =  $res['i_date'];
            $i_img1 =  $res['i_img1'];
            $i_img2 =  $res['i_img2'];
            $i_img3 = $res['i_img3'];
			$i_upvote =  $res['i_upvote'];
            $i_downvote =  $res['i_downvote'];
            
        }
        ?>

        <div>
            <div class="container">
                <div class="cust_bloglistintro">
                    <p style="margin-left:34px;color:rgba(255,255,255,0.5);font-size:14px;"></p>
                </div>
                <div class="row">
                    <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12 cust_blogteaser" data-bs-hover-animate="bounce" style="padding-bottom:20px;margin-bottom:32px;"><a href="#"><img class="img-fluid" style="width:100%;" src="../voiceup/user/<?php echo   $i_img1;?>"></a>

                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12 cust_blogteaser" style="padding-bottom:20px;margin-bottom:32px;"><a href="#"><img class="img-fluid" data-bs-hover-animate="bounce" style="width:100%;" src="../voiceup/user/<?php echo  $i_img2; ?>"></a>
                        <a class="h4" href="#"></a>
                    </div>
                    <div class=" col-lg-4 col-md-12 col-sm-12 col-xs-12 cust_blogteaser" style="padding-bottom:20px;margin-bottom:32px;"><a href="#"><img class="img-fluid" data-bs-hover-animate="bounce" style="width:100%;" src="../voiceup/user/<?php echo  $i_img3; ?>"></a>
                        <a class="h4" href="#"></a>
                    </div>
                </div>

            </div>
            <div class="padding">
                <div class="row container d-flex justify-content-center">
                    <div class="col-xl-12 col-md-12">
                        <div class="card user-card-full">
                            <div class="row m-l-0 m-r-0">

                                <div class="col-sm-12 col-md-12 col">
                                    <div class="card-block">
                                        <h4 class="m-b-20 p-b-5 f-w-600" style="color: #000;"><strong>Issue : <?php echo "$i_title" ?></strong></h4>
										<h6 class="m-b-20 p-b-5 b-b-default f-w-600" style="color: #000;">Summary : <?php echo "$i_sum" ?></h6>
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <p class="m-b-10 f-w-600" style="color: #0f0f0f;">Issue ID</p>
                                                <h6 class="text-muted f-w-400"><?php echo "$i_id" ?></h6>
                                            </div>
                                            <div class="col-sm-6">
                                                <p class="m-b-10 f-w-600" style="color: #000;">Department Type</p>
                                                <h6 class="text-muted f-w-400"><?php echo "$i_type" ?></h6>
                                            </div>
                                            <div class="col-sm-6">
                                                <p class="m-b-10 f-w-600" style="color: #000;">Issue Date</p>
                                                <h6 class="text-muted f-w-400"><?php echo "$i_date" ?></h6>
                                            </div>
										</div>
                                          <br>
                                            <h4 class="m-b-20 p-b-5 b-b-default f-w-600"><strong>Voting Details</strong></h4>
                                            <div class="row">
                                                <div class="col-sm-6">
                                                    <p class="m-b-10 f-w-600" style="color: #000;">Upvote Count</p>
                                                    <h6 class="text-muted f-w-400"><?php echo "$i_upvote" ?></h6>
                                                </div>
                                                <div class="col-sm-6">
                                                    <p class="m-b-10 f-w-600" style="color: #000;">Downvote Count</p>
                                                    <h6 class="text-muted f-w-400"><?php echo "$i_downvote" ?></h6>
                                                </div>
                                            </div><br>
                                            <h4 class="m-b-20 p-b-5 b-b-default f-w-600"><strong>Description</strong></h4>
                                            <div class="row">
                                                <div class="col-sm-6">
                                                    <p class="m-b-10 f-w-600" style="color: #000;">Issue Decription</p>
                                                    <h6 class="text-muted f-w-400"><?php echo "$i_des" ?></h6>
                                                </div>
                                                <div class="col-sm-6">
                                                    <p class="m-b-10 f-w-600" style="color: #000;">Exact Location</p>
                                                    <h6 class="text-muted f-w-400"><?php echo "$i_exactloc" ?></h6>
                                                </div>
											</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</div></div></div>
        <div class="footer-dark" style="background: #1A4E85;">
            <footer>
                <div class="container-fluid">
                    <p style="text-align: center; color: #fff;" ><strong>© 2021 Voice Up.&nbsp; All rights reserved.</strong><br></p>
                </div>
            </footer>
        </div>
        <script src="assets/js/jquery.min.js"></script>
        <script src="assets/bootstrap/js/bootstrap.min.js"></script>
        <script src="assets/js/bs-init.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.2.0/aos.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
        <script src="assets/js/freelancer.js"></script>
    </div>
</body>

</html>