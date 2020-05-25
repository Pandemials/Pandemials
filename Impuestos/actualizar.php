<!DOCTYPE html>
<?php
session_start();
//if (@!$_SESSION['user']) {
	//header("Location:index.php");
//}
?>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Actualizar</title>
      <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet"/>
     <link rel="shortcut icon" href="assets/ico/favicon.ico">
     <link rel="apple-touch-icon-precomposed" sizes="144x144" href="assets/ico/apple-touch-icon-144-precomposed.png">
     <link rel="apple-touch-icon-precomposed" sizes="114x114" href="assets/ico/apple-touch-icon-114-precomposed.png">
     <link rel="apple-touch-icon-precomposed" sizes="72x72" href="assets/ico/apple-touch-icon-72-precomposed.png">
     <link rel="apple-touch-icon-precomposed" href="assets/ico/apple-touch-icon-57-precomposed.png">
  </head>

	  <?php
	   include "Conf\DataBase.php";
	    $db = new Database();
	    $dblink = $db->getConnection();
			$id = $_GET['id'];
			?>
			<body >
			<div class="container">

	    <!-- Navbar
	       ================================================== -->

	   <div class="navbar">
	     <div class="navbar-inner">
	   	<div class="container">
	   	  <div class="nav-collapse">
	   		<ul class="nav pull-right">
	   			  <li><a href="desconectar.php"> Cerrar Sesión </a></li>
	   		</ul>
	   	  </div>
	   	</div>
	     </div>
	   </div>

	   <!-- =================================================== -->
	   <div class="row">
	   	<div class="span12">
	   		<div class="caption">

	<!--///////////////////////////////////////////////////Empieza cuerpo del documento interno////////////////////////////////////////////-->
		<h2> Administración de usuarios registrados</h2>
		<div class="well well-small">
		<hr class="soft"/>
		<h4>Edición de usuarios</h4>
		<div class="row-fluid">

		<?php
		$sql="SELECT * FROM login WHERE id=$id";
		$result = $dblink->query($sql);
		$result->setFetchMode(PDO::FETCH_COLUMN);
		//Revisar esta parte nose si lo converti bien
		//$ressql=mysqli_query($mysqli,$sql);
		//while ($row=fetch_row ($ressql)){
			while ($row = $result->fetch()){
		    	$id1=$row[0];
		    	$user=$row[1];
		    	$pass=$row[2];
		    	$email=$row[3];
		    
		    }
		?>
		<form action="ejecutaactualizar.php" method="post">
				Id<br><input type="text" name="id" value= "<?php echo $id1 ?>" readonly="readonly"><br>
				Usuario<br> <input type="text" name="user" value="<?php echo $user?>"><br>
				Password usuario<br> <input type="text" name="pass" value="<?php echo $pass?>"><br>
				Correo usuario<br> <input type="text" name="email" value="<?php echo $email?>"><br>

				<br>
				<input type="submit" value="Guardar" class="btn btn-success btn-primary">
			</form>
		<div class="span8">
		</div>
		</div>
		<br/>
		</div>
   </div>
	</div>
</div>
</body>
</html>
