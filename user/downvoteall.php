<?php 
 
 include('session-script.php');
 $res = $_SESSION["sessionid"];

 if(!isset($_SESSION['login_user'])){
 header("location: login.php"); // Redirecting To Profile Page
 }
 
 $con = mysqli_connect("localhost", "root", "", "voiceup");
   if(!$con)
   {
       die(" Connection Error ");
   }

   $i_id = $_GET['i_id'];
   $u_mobile = $_GET['u_mobile'];

   $upvoteCount = ($con->query("select * from vote where v_u_mobile=".$u_mobile." and v_i_id=".$i_id." and v_type=1")->num_rows);

   if($upvoteCount==0){
   $query = " update issue set i_downvote = i_downvote+1 where i_id='".$i_id."'";
   echo $query;
   $result = mysqli_query($con,$query);
   $query = "INSERT into vote(v_u_mobile,v_i_id,v_type) values('$u_mobile','$i_id',2)";
   echo $query;
   $result = mysqli_query($con,$query);
   }
   else
   {
     $query = "DELETE from vote where v_u_mobile=".$u_mobile." and v_i_id=".$i_id."";
     echo $query;
     $result = mysqli_query($con,$query);
     $query = " update issue set i_downvote = i_downvote+1 where i_id='".$i_id."'";
     echo $query;
     $result = mysqli_query($con,$query);
     $query = " update issue set i_upvote = i_upvote-1 where i_id='".$i_id."'";
     echo $query;
     $result = mysqli_query($con,$query);
     $query = "INSERT into vote(v_u_mobile,v_i_id,v_type) values('$u_mobile','$i_id',2)";
     echo $query;
     $result = mysqli_query($con,$query);
   }
   header("Location:allfeed.php"); 
?>
