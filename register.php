<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
  <title>Registro</title>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	

  <form method="post" action="register.php" id="contenido">
  	<?php include('errors.php'); ?>
  	<div class="input-group">
  	  <label>Usuario</label>
  	  <input type="text" name="username" value="<?php echo $username; ?>">
  	</div>
  	<div class="input-group">
  	  <label>Correo</label>
  	  <input type="email" name="email" value="<?php echo $email; ?>">
  	</div>
  	<div class="input-group">
  	  <label>Contraseña</label>
  	  <input type="password" name="password_1">
  	</div>
  	<div class="input-group">
  	  <label>Confirmar Contraseña</label>
  	  <input type="password" name="password_2">
  	</div>

	<div class="input-group">
  	  <label>Edad</label>
  	  <input type="edad" name="edad">
  	</div>

	  <label for="genero">Género:</label>
<select id="genero" name="genero">
  <option value="masculino">Seleccionar</option>
  <option value="masculino">Masculino</option>
  <option value="femenino">Femenino</option>
</select>

  	<div class="input-group">
  	  <button type="submit" class="btn" name="reg_user">Registrarse</button>
  	</div>
  	<p>
  		Ya estas registrado? <a href="login.php">Inicia sesion</a>
  	</p>
  </form>
</body>
</html>