<?php
session_start();
if($_SESSION['user']){
	session_destroy();
	header("location:Signin.php");
}
else{
	header("location:Signin.php");
}
?>
