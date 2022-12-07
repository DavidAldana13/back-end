<!DOCTYPE html>
<html lang="en">
<head> 
  <link rel="stylesheet" href="estilo_login.css">
  <meta charset="UTF-8">
  <link  rel="icon"   href="imagenes/logo.png" type="image/png" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login</title>
</head>
<body>
  

<section>

<div class="cajaUno">

<figure>

<img src="imagenes/logo.png" alt="" class="max">

</figure>

<form action="acceso.php" method="POST">

<h1>Ingrese sus credenciales de Empleado</h1>
<br>
<input type="text" placeholder="Curp" name="curp">
<br>
<input type="password" placeholder="Contraseña" name="pass">
<br>
<input type="submit" value="Iniciar sesión" class="btnIni">


</form>

</div>

</section>



</body>
</html>