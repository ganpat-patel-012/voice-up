<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Voice Up</title>
    <link rel="icon" href="assets/img/fav.png" type="image/png">
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:400,700">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic">
    <link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/Article-List.css">
    <link rel="stylesheet" href="assets/css/Features-Boxed.css">
    <link rel="stylesheet" href="assets/css/Footer-Dark.css">
    <link rel="stylesheet" href="assets/css/Highlight-Blue.css">
    <link rel="stylesheet" href="assets/css/feed.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.2.0/aos.css">
</head>

<body id="page-top">
    <nav class="navbar navbar-light navbar-expand-lg fixed-top" id="mainNav" style="background: #1A4E85;">
        <div class="container-fluid">
            <a class="navbar-brand js-scroll-trigger" data-bs-hover-animate="pulse" href="index.php" style="font-family: Montserrat, sans-serif;">VOICE UP</a>
            <button data-toggle="collapse" data-target="#navbarResponsive" class="navbar-toggler navbar-toggler-right rounded" data-aos="fade" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation" style="background: #fff;"><i class="fa fa-bars" style="color: #1A4E85;;"></i></button>
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
                <h2 class="text-center" style="background: #1A4E85;color: rgb(255,255,255);padding: 20px;padding-top: 20px;margin-bottom: 10px;margin-top: 50px;">All Feed</h2>
            </div>
    </div>

    <?php

        $con = mysqli_connect("sql6.freesqldatabase.com", "sql6424236", "m7r3yyZ1Jr", "sql6424236");
        
        $count = $con->query("SELECT * from issue,user where u_id=i_u_id and i_privacy='Public'")->num_rows;
        if($count==0){ ?>
        <center><h3 style="border:5px solid black;width:70%;text-align:center; margin:20px;padding:20px;"> No Data available</h3></center>
        <?php } ?>


        <?php

        $q = "SELECT * from issue,user where u_id=i_u_id and i_privacy='Public'";
        $query = mysqli_query($con, $q);
        $c = 1;

        while ($res = mysqli_fetch_array($query)) {
        ?>
               <div class="post">
                <div class="post-image">
                    <img src="https://hack-voiceup.herokuapp.com/user/<?php echo $res['i_img1'];?>" alt="">
                </div>
                <div class="post-content">
                    <p class="post-date">Posted on <?php echo $res['i_date'];  ?></p>
                    <h4 class="post-title"><?php echo $res['i_title'];  ?></h4>
                    <div class="post-excerpt">
                    <p><?php echo $res['i_sum'];  ?></p>
                    </div>
                    <li class="post-link"><a href="viewissue.php?i_id=<?php echo $res['i_id'];  ?>"><button class="btn btn-light " data-bs-hover-animate="pulse" type="button" style="margin: -5px;background: #1A4E85;color: #fff;margin-left: -5px;border-radius: 5px;">Read More</button></a></li>
                </div>
                </div>
        <?php
        }
        ?>

    <div class="footer-dark" style="background: #1A4E85; color:#fff;" >
        <footer>
            <div class="container-fluid">
                <p style="text-align: center;  color:#fff;"><strong>© 2021 Voice Up.&nbsp; All rights reserved.</strong><br></p>
            </div>
        </footer>
    </div>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/bs-init.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.2.0/aos.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
    <script src="assets/js/freelancer.js"></script>
</body>

</html>