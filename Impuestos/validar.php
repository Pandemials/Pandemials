
<?php
 include "Conf\DataBase.php";
	$db = new Database();
	$dblink = $db->getConnection();


	$username=$_POST['mail'];
	$pass=$_POST['pass'];


	//la variable  $mysqli viene de connect_db que lo traigo con el require("connect_db.php");
	//$sql2=mysqli_query($mysqli,"SELECT * FROM login WHERE email='$username'");
	$sql = "SELECT * FROM login WHERE email='$username'";
	$result = $dblink->query($sql);
	$result->setFetchMode(PDO::FETCH_ASSOC);
	if($f2=$result->fetch()){
		if($pass==$f2['pasadmin']){
			$_SESSION['id']=$f2['id'];
			$_SESSION['user']=$f2['user'];
			$_SESSION['rol']=$f2['rol'];
			echo '<script>alert("BIENVENIDO ")</script> ';
			echo "<script>location.href='EditarEliminar.php'</script>";

		}
	}

  $sql2 = "SELECT * FROM login WHERE email='$username'";
	$result2 = $dblink->query($sql2);
	$result2->setFetchMode(PDO::FETCH_ASSOC);
	//$sql=mysqli_query($mysqli,"SELECT * FROM login WHERE email='$username'");
	if($f=$result->fetch($sql2)){
		if($pass==$f['password']){
			$_SESSION['id']=$f['id'];
			$_SESSION['user']=$f['user'];
			$_SESSION['rol']=$f['rol'];

			header("Location:EditarEliminar.php");
		}else{
			echo '<script>alert("CONTRASEÑA INCORRECTA")</script> ';

			echo "<script>location.href='Signin.php'</script>";
		}
	}else{

		echo '<script>alert("ESTE USUARIO NO EXISTE") </script> ';

	}

?>
