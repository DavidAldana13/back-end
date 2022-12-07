<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="estilo_prelogin01.css">
<link  rel="icon"   href="imagenes/logo.png" type="image/png" />
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Seccion de pagos</title>
</head>
<body>

<section>

<div class="cajaUno">

<figure>

<img src="imagenes/logo.png" alt="" class="max">

</figure>

<form action="" method="POST">

<h1>Seccion de pagos</h1>
<br>

<input type="text" placeholder="CURP" name="curp">
<br>
<input type="text" placeholder="ID" name="id">
<br>
<input type="text" name="prestamo" placeholder="Monto a pagar">
<br>
<input type="date" name="fecha">
<br>
<input type="submit" class="btnIni" value="PAGAR">

<a href="refrendo.php" class="btnIni">Regresar</a>



</form>

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
<th>Avaluo</th>
<th>Préstamo</th>
<th>CURP</th>

<th>Fecha de empeño</th>
<th>Fecha de pago</th>
<th>Estatus del Artículo</th>



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





</tr>
<br>

<!-- cierre de while, el free_result   -->
<?php 


}

echo $curp;

mysqli_free_result($resultado)

?>


</table>


<?php 


$curp = $_POST['curp'];
$id = $_POST['id'];
$prestamo = $_POST['prestamo'];
$fecha = $_POST['fecha'];

require 'conexion.php';

$actualiza ="UPDATE empenio SET prestamo = '$prestamo' , fecha_pago = '$fecha' WHERE id = $id";

$query = mysqli_query($conectar, $actualiza);

if($query){

  echo '<script>
  alert("Su pago se realizo con exito");
  header("location: ./refrendo.php");
  </script>';

}


?>


</div>

</section>

  
</body>
</html>