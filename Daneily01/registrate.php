<!DOCTYPE html>
<html lang="en">
<head>
    <!-- link para las redes del footer -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<!-- link para el css de hader y footer -->
  <link rel="stylesheet" href="estilos/estilo_index.css">
  <link  rel="icon"   href="fotos/logo.png" type="image/png" />
<!-- link para el css seccion de informacion -->
  <link rel="stylesheet" href="estilos/estilo_regi.css">

  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Registro</title>
</head>
<body>

<?php 

include "./php/cabecera.php";

?>

<section>

<div class="formulario">

<form action="registro_cliente.php" method="POST">


<input type="text" placeholder="Nombre completo" name="nombrecompleto">

<input type="text" placeholder="CURP" name="curp">

<input type="text" placeholder="Telefono" name="telefono">

<input type="text" placeholder="Dirección" name="direccion">

<input type="email" placeholder="@example.com" name="correo">

<input type="password" placeholder="Ingrese contraseña" name="contrasenia">

<input type="submit" value="Registrame" class="btnRegistro">


</form>

</div>

</section>





<?php 

include "./php/pie.php";

?>
  
</body>
</html>