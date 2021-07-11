<?php 
 
 include('session-script.php');
 $res = $_SESSION["sessionid"];

 if(!isset($_SESSION['login_admin'])){
 header("location: login.php"); // Redirecting To Profile Page
 }
 
 $con = mysqli_connect("lbbdpklnafwiw9pb9rhb2-mysql.services.clever-cloud.com", "uttrd2cgktfzdsye", "wtpltLGKuSJnqNr78d13", "bbdpklnafwiw9pb9rhb2");
   if(!$con)
   {
       die(" Connection Error ");
   }

   $d_mobile = $_GET['d_mobile'];

   if(isset($_POST['accept']))
   {        
        $query = " update dept set d_approve = '2' where d_mobile='".$d_mobile."'";
        $result = mysqli_query($con,$query);
   }
   if(isset($_POST['review']))
   {        
        $query = " update dept set d_approve = '3' where d_mobile='".$d_mobile."'";
        $result = mysqli_query($con,$query);
   }
   if(isset($_POST['reject']))
   {        
        $query = " update dept set d_approve = '4' where d_mobile='".$d_mobile."'";
        $result = mysqli_query($con,$query);
   }
   header("Location: agencyprofile.php?d_mobile=$d_mobile"); 
?>
