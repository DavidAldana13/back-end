<!DOCTYPE html>
<html lang="en">
<head>
    <!-- link para las redes del footer -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="./estilo_inicio.css"> 
  <link rel="stylesheet" href="./per.css">  
<meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>

<?php 

include "./inicio.php";

?>


<section>

<div class="cajaUno">

<div class="textos">
<h1>Empeños</h1>

<p>Aqui podras Visualizar los empeños realizados a tu cuenta</p>

</div>


<table>

<?php 

include "mostrar.php";

session_start();

 $_SESSION['curp'] = $curp ;


?>

<tr>
    <th>Tipo</th>
    <th>Marca</th>
    <th>Modelo</th>
    <th>Color</th>
    <th>Número de Serie</th>
    <th>Avalúo</th>
    <th>Préstamo</th>
    <th>CURP</th>
    <th>Comentarios</th>
    <th>Fecha</th>
</tr>


<?php 

require './conexion.php';

$todos_usuarios ="SELECT * FROM empenio WHERE curp = '$curp'";

$resultado = mysqli_query($conectar, $todos_usuarios);
while($row = mysqli_fetch_assoc($resultado)){

?>

<h1><?php   echo $_SESSION["curp"]; ?></h1>

<tr>

<td><?php echo $row["tipo"];  ?></td>
<td><?php echo $row["marca"];  ?></td>
<td><?php echo $row["modelo"];  ?></td>
<td><?php echo $row["color"];  ?></td>
<td><?php echo $row["num_serie"];  ?></td>
<td><?php echo $row["valuo"];  ?></td>
<td><?php echo $row["prestamo"];  ?></td>
<td><?php echo $row["curp"];  ?></td>
<td><?php echo $row["comentarios"];  ?></td>
<td><?php echo $row["fecha"];  ?></td>


</tr>

<!-- cierre de while, el free_result   -->
<?php 

}
mysqli_free_result($resultado)

?>
</table>





</div>


</section>



<?php 

include "./pie.php";

?>


  
</body>
</html>