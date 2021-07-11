<?php

include('session-script.php');
$res = $_SESSION["sessionid"];
$a_name = $res;
if (!isset($_SESSION['login_admin'])) {
    header("location: login.php"); // Redirecting To Profile Page
}
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Manage Citizens</title>
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
    <link rel="stylesheet" href="../assets/css/table-style.css" />
</head>

<body id="page-top">
    <nav class="navbar navbar-light navbar-expand-lg fixed-top" id="mainNav" style="background: #1A4E85;">
        <div class="container-fluid">
            <a class="navbar-brand js-scroll-trigger" data-bs-hover-animate="pulse" href="../index.php" style="font-family: Montserrat, sans-serif;">VOICE UP</a>
            <button data-toggle="collapse" data-target="#navbarResponsive" class="navbar-toggler navbar-toggler-right rounded" data-aos="fade" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation" style="background: #fff;"><i class="fa fa-bars" style="color: #1A4E85;;"></i></button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="nav navbar-nav ml-auto">
                    <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" data-bs-hover-animate="pulse" href="index.php" style="filter: contrast(100%) grayscale(0%) hue-rotate(0deg) invert(0%) sepia(0%);">DASHBOARD</a></li>
                    <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" data-bs-hover-animate="pulse" href="../about.php">ABOUT</a></li>
                    <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" data-bs-hover-animate="pulse" href="../faq.php">FAQ</a></li>
                    <li class="nav-item mx-0 mx-lg-1"><a href="../admin/logout-script.php"><button class="btn btn-dark text-monospace" data-bs-hover-animate="pulse" type="button" style="margin: 10px;background: rgb(255,255,255);color: #1A4E85;margin-left: 0;border-radius: 10px;">Log Out</button></a></li>

                </ul>
            </div>
        </div>
    </nav>


    <div class="features-boxed">
        <div class="container-fluid" style="background: #ffffff;">
            <div class="intro" style="background: #1A4E85;margin-top: 120px;margin-bottom: 30px;">
                <h2 class="text-center" data-aos="fade" style="color: rgb(255,255,255);padding: 30px;margin-bottom: 0px;">Manage Citizens</h2>
            </div>
        </div>
    </div>

    <table id="tabledata" class=" table table-striped table-hover table-bordered">

        <tr class="bg-dark text-white text-center" style="display:none;">
            <thead>
                <th>Sr. No.</th>
                <th>ID</th>
                <th> Name </th>
                <th> Mobile </th>
                <th> City </th>
                <th> Status </th>
                <th> Photo </th>
                <th> Profile </th>
            </thead>
        </tr>

        <?php

         $con = mysqli_connect("sql6.freesqldatabase.com", "sql6424236", "m7r3yyZ1Jr", "sql6424236");
        


        $q = "select u_id, u_name, u_mobile, u_city, u_approve, u_photo from user ORDER BY u_id DESC";
        $query = mysqli_query($con, $q);
        $c = 1;

        while ($res = mysqli_fetch_array($query)) {
        ?>
            <tr class="text-center">
                <td data-label="Sr. No."> <?php echo $c;
                                            $c += 1 ?> </td>
                <td data-label="ID"> <?php echo $res['u_id']; ?> </td>
                <td data-label="Name"> <?php echo $res['u_name'];  ?> </td>
                <td data-label="Mobile"> <?php echo $res['u_mobile'];  ?> </td>
                <td data-label="City"> <?php echo $res['u_city'];  ?> </td>
                <td data-label="Status"> <?php if ($res['u_approve'] == "1") {
                                                echo "No Action";
                                            } else if ($res['u_approve'] == "2") {
                                                echo " Accepted";
                                            } else if ($res['u_approve'] == "3") {
                                                echo "Review";
                                            } else if ($res['u_approve'] == "4") {
                                                echo "Rejected";
                                            } else if ($res['u_approve'] == "5") {
                                                echo "Resubmitted";
                                            }  ?> </td>
                <td data-label="Photo"> <img src="../user/<?php echo $res['u_photo'];  ?>" width="50" height="60"> </td>
                <td data-label="Profile"> <button class="btn" style="background-color:#1A4E85;"> <a href="citizensprofile.php?u_mobile=<?php echo $res['u_mobile']; ?>" class="text-white"> View </a> </button> </td>

            </tr>

        <?php
        }
        ?>

    </table>



    <div class="footer-dark" style="background: #1A4E85;">
        <footer>
            <div class="container-fluid">
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