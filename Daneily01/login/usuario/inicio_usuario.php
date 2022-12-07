<!DOCTYPE html>
<html lang="en">
<head>
  <!-- link para las redes del footer -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="./estilo_inicio.css"> 
  <link rel="stylesheet" href="./ini_usu.css">
  <link  rel="icon"   href="imagenes/logo.png" type="image/png" />
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Sesion Usuario</title>
</head>
<body>
  
<?php 

include "mostrar.php";

session_start();

 $_SESSION['nombre_completo'] = $nombre_completo ;


?>

<?php 

include "inicio.php";

?>

<div><h1>Bienvenido <?php echo $nombre_completo; ?></h1></div>

<section>

<div class="cajaUno">

<div class="textos">
<h1>Casa de empeño Daneily</h1>

<p>Empeña de manera cómoda y visualiza los empeños que hayas realizado y estados de tu cuenta desde cualquier sitio.</p>

</div>






</div>


</section>

<?php 

include "pie.php";

?>

  
</body>
</html>