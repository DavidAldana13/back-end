<!DOCTYPE html>
<html lang="en">
<head>
      <!-- link para las redes del footer -->
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="./phpL/estilo_inicio.css"> 
  <link rel="stylesheet" href="./estilosL/refrendo.css">
  <link  rel="icon"   href="imagenes/logo.png" type="image/png" />
<meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Refrendo</title>
</head>
<body>

<?php 

include "phpL/inicio.php" ;

?>



<section>

<div class="cajaUno">

<form action="" method="POST">

<label for="">Ingresa tu CURP:</label>
<input type="text" placeholder="CURP" name="curp">

<br>

<input type="submit" value="BUSCAR" class="btn">

</form>



<br>

<table>

<tr>
<th>ID</th>
<th>Tipo</th>
<th>Marca</th>
<th>Modelo</th>
<th>Color</th>
<th>Número de Serie</th>
<th>Avalúo</th>
<th>Préstamo</th>
<th>CURP</th>

<th>Fecha de empeño</th>
<th>Fecha de pago</th>
<th>Estatus del Artículo</th>

<th>Eliminar</th>

</tr>

<?php 

require './phpL/conexion.php';

$todos_usuarios ="SELECT * FROM empenio ORDER BY curp ASC";

$resultado = mysqli_query($conectar, $todos_usuarios);
while($row = mysqli_fetch_assoc($resultado)){

?>


<tr>
<td><?php echo $row["id"];  ?></td>
<td><?php echo $row["tipo"];  ?></td>
<td><?php echo $row["marca"];  ?></td>
<td><?php echo $row["modelo"];  ?></td>
<td><?php echo $row["color"];  ?></td>
<td><?php echo $row["num_serie"];  ?></td>
<td><?php echo $row["valuo"];  ?></td>
<td><?php echo $row["prestamo"];  ?></td>
<td><?php echo $row["curp"];  ?></td>

<td><?php echo $row["fecha"];  ?></td>
<td><?php echo $row["fecha_pago"];  ?></td>
<td><?php echo $row["estatus"];  ?></td>


<!-- eliminar curso se llama desde onclick ya que si se llama desde href elimina sin corfirmar
el ? es un get para enviar id_curso y su contenido a eliminar_curso.php -->
<td><a href="#" onclick="validar('eliminar_articulo.php?id=<?php echo $row['id']; ?>')">Eliminar</a></td>

</tr>

<!-- cierre de while, el free_result   -->
<?php 

}
mysqli_free_result($resultado)

?>


</table>

<!--pago de articulo -->

<table>

<tr>
  <th>ID</th>
<th>Tipo</th>
<th>Marca</th>
<th>Modelo</th>
<th>Color</th>
<th>Número de Serie</th>
<th>Avalúo</th>
<th>Préstamo</th>
<th>CURP</th>

<th>Fecha de empeño</th>
<th>Fecha de pago</th>
<th>Estatus del Articulo</th>

<th>Pagar</th>


</tr>

<?php 

require './phpL/conexion.php';

$curp = $_POST['curp'];



$todos_usuarios ="SELECT * FROM empenio WHERE curp ='$curp'";

$resultado = mysqli_query($conectar, $todos_usuarios);
while($row = mysqli_fetch_assoc($resultado)){

?>


<tr>
<td><?php echo $row["id"];  ?></td>
<td><?php echo $row["tipo"];  ?></td>
<td><?php echo $row["marca"];  ?></td>
<td><?php echo $row["modelo"];  ?></td>
<td><?php echo $row["color"];  ?></td>
<td><?php echo $row["num_serie"];  ?></td>
<td><?php echo $row["valuo"];  ?></td>
<td><?php echo $row["prestamo"];  ?></td>
<td><?php echo $row["curp"];  ?></td>

<td><?php echo $row["fecha"];  ?></td>
<td><?php echo $row["fecha_pago"];  ?></td>
<td><?php echo $row["estatus"];  ?></td>
<!-- eliminar curso se llama desde onclick ya que si se llama desde href elimina sin corfirmar
el ? es un get para enviar id_curso y su contenido a eliminar_curso.php -->
<td><a href="refrendo_articulo.php">PAGAR</a></td>

</tr>
<br>

<!-- cierre de while, el free_result   -->
<?php 


}

echo $curp;

mysqli_free_result($resultado)

?>


</table>







  </div>

</section>




<?php 

include "phpL/pie.php";

?>



  
</body>
</html>