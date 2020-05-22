<!DOCTYPE html>
<?php
/*session_start();
if (@!$_SESSION['user']) {
	header("Location:Signin.php");
}elseif ($_SESSION['rol']==2) {
	header("Location:Signin2.php");
}
*/
?>
<html lang="en" dir="ltr">
  <head>
  <meta charset="utf-8">
  <title>Administracion de Usuarios</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <link rel="stylesheet" href="css\estilotabla.css">
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

   <!--//////////////////////////-->
   		<h2> Administración de usuarios registrados</h2>
   		<div class="well well-small">
   		<hr class="soft"/>
   		<h4>Tabla de Usuarios</h4>
   		<div class="row-fluid">

   			<?php
   				//require("connect_db.php");
   				$sql = 'SELECT * FROM login;';
					$result = $dblink->query($sql);
					$result->setFetchMode(PDO::FETCH_COLUMN);

   				echo "<table border='1'; class='table table-hover';>";
   					echo "<tr class='warning'>";
   						echo "<td>Id</td>";
   						echo "<td>Usaurio</td>";
   						echo "<td>Password</td>";
   						echo "<td>Correo</td>";
   						echo "<td>Password del administrador</td>";
   						echo "<td>Editar</td>";
   						echo "<td>Borrar</td>";
   					echo "</tr>";
   			?>

   			<?php
   				 while($arreglo = $result->fetch()){
   				  	  echo "<tr class='success'>";
   				    	echo "<td>$arreglo[0]</td>";
   				    	echo "<td>$arreglo[1]</td>";
   				      echo "<td>$arreglo[2]</td>";
   				    	echo "<td>$arreglo[3]</td>";
   				      echo "<td>$arreglo[4]</td>";
   				    	echo "<td><a href='actualizar.php?id=$arreglo[0]'><img src='imagenes\actualizar.gif' class='img-rounded'></td>";
   							echo "<td><a href='EditarEliminar.php?id=$arreglo[0]&idborrar=2'><img src='imagenes/eliminar.png' class='img-rounded'/></a></td>";
   						echo "</tr>";
   				}

   				echo "</table>";


						extract($_GET);
   					if(@$idborrar==2){

   						$sqlborrar="DELETE FROM login WHERE id=$id";
   						$resborrar=$dblink->query($sqlborrar);
   						echo '<script>alert("REGISTRO ELIMINADO")</script> ';
   						//header('Location: proyectos.php');
   						echo "<script>location.href='EditarEliminar.php'</script>";
   					}

   			?>
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
