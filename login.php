<?php include('server.php') ?>

<!DOCTYPE html>
<html>
<head>
  <title>Inicio de Sesion</title>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>

	 
  <form method="post" action="login.php">
  	<?php include('errors.php'); ?>
  	<div class="input-group">
  		<label>Usuario</label>
  		<input type="text" name="username" >
  	</div>
  	<div class="input-group">
  		<label>Contraseña</label>
  		<input type="password" name="password">
  	</div>
  	<div class="input-group">
  		<button type="submit" class="btn" name="login_user">Iniciar sesion</button>
  	</div>
  	<p>
  		No estas registrado? <a href="register.php">Registrate</a>
  	</p>
  </form>

</body>
</html>