<!DOCTYPE html>
<html lang="en">
<head>
      <!-- link para las redes del footer -->
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="./phpL/estilo_inicio.css"> 
  <link rel="stylesheet" href="./estilosL/resgistroCli.css">
  <link  rel="icon"   href="imagenes/logo.png" type="image/png" />
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Registro de Nuevo cliente</title>
</head>
<body>

<?php 

include "./phpL/inicio.php";

?>



<section>

<div class="cajaUno">

<form action="registro_cliente.php" method="POST">


<input type="text" placeholder="Nombre completo" name="nombrecompleto">
<br>
<input type="text" placeholder="CURP" name="curp">
<br>
<input type="text" placeholder="Telefono" name="telefono">
<br>
<input type="text" placeholder="Dirección" name="direccion">
<br>
<input type="email" placeholder="@example.com" name="correo">
<br>
<input type="password" placeholder="Ingrese contraseña" name="contrasenia">
<br>
<br>
<input type="submit" value="Registrame" class="btnRegistro">


</form>


</div>


</section>




<?php 

include "./phpL/pie.php";

?>

  
</body>
</html>