<!DOCTYPE html>
<html lang="en">
<head>
    <!-- link para las redes del footer -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<!-- link para el css de hader y footer -->
  <link rel="stylesheet" href="estilos/estilo_index.css">
  <link  rel="icon"   href="fotos/logo.png" type="image/png" />
<!-- link para el css seccion de contacto -->
  <link rel="stylesheet" href="estilos/estilo_contacto.css">

  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Contactanos</title>
</head>
<body>

<?php 

include "./php/cabecera.php";

?>


<section>


<div class="formulariocontacto">

<form action="contactos.php" method="POST">

<input type="text" placeholder="Nombre completo" name="nombre" require>
<br>
<input type="text" placeholder="Correo electronico" name="correo" require>
<br>
<label for="">Solo colocar los 7 dijitos siguientes a (999)</label>
<br>
<input type="tel" placeholder="Telefono" name="telefono"  require>
<br>
<label for="">Comentarios:</label> 
<br>
<textarea id="" cols="30" rows="10" name="comen" require></textarea>

<br><br>

<input type="submit" value="Enviar" class="btnEnviar">

</form>

</div>


</section>




<?php 

include "./php/pie.php";

?>
  
</body>
</html>