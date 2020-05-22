<!DOCTYPE html>

	<?php
	session_start();
	if (@!$_SESSION['user']) {
		header("Location:Signin.php");
	}elseif ($_SESSION['rol']==1) {
		header("Location:EditarEliminar.php");
	}
	?>
