<?php
error_reporting(0);
// mysqli_connect() function opens a new connection to the MySQL server.
$con = mysqli_connect("127.0.0.1", "root", "", "voiceup");
session_start();// Starting Session
// Storing Session
$dept_check = $_SESSION['login_dept'];
// SQL Query To Fetch Complete Information Of dept
$query = "SELECT d_mobile from dept where d_mobile = '$dept_check'";
$ses_sql = mysqli_query($con, $query);
 $res = mysqli_fetch_assoc($ses_sql);
$login_session =  $res['d_mobile'];
?>