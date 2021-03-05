<?php

session_start();

if(isset($_SESSION['name']))
{
  include('head for dashboard.php');
  echo "<br />";
  echo "<img align:'right' src='pic/Me.jpg' alt='' width='170' height='200'>";
  echo "<br />";
  echo "<br />Name: ".$_SESSION['uname'];
  echo "<br />Email: ".$_SESSION['email'];
  echo "<br />Gender: ".$_SESSION['gender'];
  echo "<br />Date of Birth: ".$_SESSION['birth'];
  include('foot.php');

}
else {
  header("location: log in.php");
}

 ?>
