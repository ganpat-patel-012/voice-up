<?php 
 
 include('session-script.php');
 $res = $_SESSION["sessionid"];

 if(!isset($_SESSION['login_dept'])){
 header("location: login.php"); // Redirecting To Profile Page
 }
 
 $con = mysqli_connect("sql6.freesqldatabase.com", "sql6424236", "m7r3yyZ1Jr", "sql6424236");
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
