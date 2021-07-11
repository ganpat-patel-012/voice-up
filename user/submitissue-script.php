<?php
include('session-script.php');
$res = $_SESSION["sessionid"];
if (!isset($_SESSION['login_user'])) {
    header("location: login.php"); // Redirecting To Profile Page
}
error_reporting(0);
$con = mysqli_connect("lbbdpklnafwiw9pb9rhb2-mysql.services.clever-cloud.com", "uttrd2cgktfzdsye", "wtpltLGKuSJnqNr78d13", "bbdpklnafwiw9pb9rhb2");

        $q = "SELECT * from user where u_mobile=$res ";
        $query = mysqli_query($con, $q);

        while ($res = mysqli_fetch_array($query)) {
            $u_id =  $res['u_id'];
        }


//Create Connection

if (isset($_POST["submit"])) {
    #retrieve file title
    $i_title = $con->real_escape_string($_POST['i_title']);
    $i_type = $con->real_escape_string($_POST['i_type']);
    $i_privacy = $con->real_escape_string($_POST['i_privacy']);
	$i_exactloc = $con->real_escape_string($_POST['i_exactloc']);
    $i_sum = $con->real_escape_string($_POST['i_sum']);
    $i_des = $con->real_escape_string($_POST['i_des']);
    $i_status = 0;
	$i_date = date("Y/m/d");
            
                #file name with a random number so that similar dont get replaced
                $i_img1 = rand(10000,99999). "-" . $_FILES["i_img1"]["name"];
                $i_img2 = rand(10000,99999). "-" . $_FILES["i_img2"]["name"];
                $i_img3 = rand(10000,99999). "-" . $_FILES["i_img3"]["name"];

                #temporary file name to store file
                $tname1 = $_FILES["i_img1"]["tmp_name"];
                $tname2 = $_FILES["i_img2"]["tmp_name"];
                $tname3 = $_FILES["i_img3"]["tmp_name"];

                #target path
                $target_path1 = "issue/" . $i_img1;
                $target_path2 = "issue/" . $i_img2;
                $target_path3 = "issue/" . $i_img3;


                #TO move the uploaded file to specific location
                move_uploaded_file($tname1, $target_path1);
                move_uploaded_file($tname2, $target_path2);
                move_uploaded_file($tname3, $target_path3);

                #sql query to insert into database
                $query = "INSERT into issue(i_u_id,i_type,i_title,i_sum,i_des,i_exactloc,i_date,i_img1,i_img2,i_img3,i_privacy,i_status) VALUES('$u_id','$i_type','$i_title','$i_sum','$i_des','$i_exactloc','$i_date','$target_path1','$target_path2','$target_path3','$i_privacy','$i_status')";
                $success = $con->query($query);
            }
            header("Location:activeissue.php");
?>
