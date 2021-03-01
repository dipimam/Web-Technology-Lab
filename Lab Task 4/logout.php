<?php

session_start();

if (isset($_SESSION['uname'])) {
	session_destroy();
	header("location:log in.php");

}

else{
	header("location:log in.php");
}

 ?>
