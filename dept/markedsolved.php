<?php 
 
 include('session-script.php');
 $res = $_SESSION["sessionid"];

 if(!isset($_SESSION['login_dept'])){
 header("location: login.php"); // Redirecting To Profile Page
 }
 
 $con = mysqli_connect("lbbdpklnafwiw9pb9rhb2-mysql.services.clever-cloud.com", "uttrd2cgktfzdsye", "wtpltLGKuSJnqNr78d13", "bbdpklnafwiw9pb9rhb2");
   if(!$con)
   {
       die(" Connection Error ");
   }

        $q = "SELECT * from dept where d_mobile=$res ";
        echo $q;
        $query = mysqli_query($con, $q);

        while ($res = mysqli_fetch_array($query)) {
            $d_id =  $res['d_id'];
        }

   $i_id = $_GET['i_id'];

     $query = " update issue set i_status = '1', i_d_id=$d_id where i_id='".$i_id."'";
     echo $query;
     $result = mysqli_query($con,$query);
   header("Location:solvedissue.php"); 
?>
