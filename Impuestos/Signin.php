<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Sign In</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="C:\Users\User\Desktop\git\Pandemials\Impuestos\css\estilosignin.css">
  </head>

  <body>
  <div class="supercontenedor">
	<div class="card login">
	<div class="card-body">
		<h3 class="cardtitulo">Cultura Tributaria</h3>
		<div class="card-text">
     <form action="validar.php" method="post">
			<form>
					<div class="form-group">
					<label for="exampleInputEmail1">Email</label>
					<input type="email" class="form-control form-control-sm" id="mail" name="mail" aria-describedby="emailHelp">
				</div>
				<div class="form-group">
					<label for="exampleInputPassword1">Contraseña</label>
					<input type="password" class="form-control form-control-sm" id="exampleInputPassword1">
				</div>
				<button type="submit" class="btn btn-primary btn-block">Sign in</button>

			</form>
		</div>
	</div>
</div>
</div>

 </body>
</html>
