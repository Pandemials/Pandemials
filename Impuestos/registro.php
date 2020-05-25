<?php

	$realname=$_POST['name'];
	$mail=$_POST['mail'];
	$pass= $_POST['pass'];
	$rpass=$_POST['rpass'];


	 include "Conf\DataBase.php";
		$db = new Database();
		$dblink = $db->getConnection();

	//requir
//la variable  $mysqli ;
	$sql = "SELECT * FROM login WHERE email='$mail'";
  $result = $dblink->query($sql);
  $result->setFetchMode(PDO::FETCH_ASSOC);
	$check_mail = $result->fetchColumn();
		if($pass==$rpass){
			if($check_mail>0){
				echo ' <script language="javascript">alert("Atencion, ya existe el mail designado para un usuario, verifique sus datos");</script> ';
        echo "<script>location.href='registro2.php'</script>";
			}else{

				//require("connect_db.php");
//la variable  $mysqli vi
				$sql2 = "INSERT INTO login VALUES(null,'$realname','$pass','$mail','2')";
			  $result = $dblink->query($sql2);

				//echo 'Se ha registrado con exito';
				echo ' <script language="javascript">alert("Usuario registrado con éxito");</script> ';
        echo "<script>location.href='EditarEliminar.php'</script>";
			}


		}else{
			echo 'Las contraseñas son incorrectas';
				echo "<script>location.href='registro2.php'</script>";
		}


?>
