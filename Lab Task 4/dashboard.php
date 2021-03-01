<?php
session_start();

if (isset($_SESSION['name'])) {

 include('head for dashboard.php');
 echo "<br><a href='dashboard.php'>Dashboard</a>";
 echo "<br><a href='dashboard.php'>Dashboard</a>";
  echo "<h1 align='middle'> Welcome ".$_SESSION['name']."</h2>";




}
else{
		$msg="error";
		header("location:log in.php");
		// echo "<script>location.href='login.php'</script>";
	}
 ?>
