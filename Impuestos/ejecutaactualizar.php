<?php

extract($_POST);	//extraer todos los valores del metodo post del formulario de actualizar
include "Conf\DataBase.php";
 $db = new Database();
 $dblink = $db->getConnection();
	$sentencia="update login set user='$user', password='$pass', email='$email' where id='$id'";
	//la variable  $mysqli viene de connect_db que lo traigo con el require("connect_db.php");
	//$resent=mysqli_query($mysqli,$sentencia);

	$result = $dblink->query($sentencia);
	$result->setFetchMode(PDO::FETCH_ASSOC);
	if ($result==null) {
		echo "Error de procesamieno no se han actuaizado los datos";
		echo '<script>alert("ERROR EN ACTUALIZACION LOS DATOS")</script> ';
		header("location: EditarEliminar.php");

		echo "<script>location.href='EditarEliminar.php'</script>";
	}else {
		echo '<script>alert("REGISTRO ACTUALIZADO")</script> ';

		echo "<script>location.href='EditarEliminar.php'</script>";


	}
?>
