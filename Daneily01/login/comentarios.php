<!DOCTYPE html>
<html lang="en">
<head>
  <!-- link para las redes del footer -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="./phpL/estilo_inicio.css"> 
  <link rel="stylesheet" href="./estilosL/Admin.css"> 
  <link  rel="icon"   href="imagenes/logo.png" type="image/png" />
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Comentarios</title>
</head>
<body>

<?php 
include "./phpL/inicio.php";
?>


<section>

<div class="cajaUno">

    <div class="textos">
          
    <table>

<tr>
    <th>Nombre</th>
    <th>correo</th>
    <th>Teléfono</th>
    <th>Comentario</th>

  

</tr>


<?php 

require './phpL/conexion.php';

$todos_usuarios ="SELECT * FROM comentarios ";

$resultado = mysqli_query($conectar, $todos_usuarios);
while($row = mysqli_fetch_assoc($resultado)){

?>


<tr>

<td><?php echo $row["nombre"];  ?></td>
<td><?php echo $row["correo"];  ?></td>
<td><?php echo $row["telefono"];  ?></td>
<td><?php echo $row["comen"];  ?></td>

</tr>

<!-- cierre de while, el free_result   -->
<?php 

}
mysqli_free_result($resultado)

?>
</table>

    </div>

</div>


</section>




<?php 
include "./phpL/pie.php";
?>
  
</body>
</html>