<!DOCTYPE html>
<html lang="en">
<head>
    <!-- link para las redes del footer -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="./estilo_inicio.css"> 
  <link rel="stylesheet" href="./cat.css">
  
<link  rel="icon"   href="./imagenes/logo.png" type="image/png" />
  <script
      src="https://kit.fontawesome.com/66f5e943e2.js"
      crossorigin="anonymous"
    ></script>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Catálogo</title>

  <script src="https://code.jquery.com/jquery-3.5.0.js"></script>

</head>
<body>


<?php 

include "./inicio.php" ;

?>

<section >
  
  <div id="cajaPrincipal">

      <div id="caja1">
        <i id="btn1" class="fas fa-folder-open">Prendas de oro</i>
        <i id="btn2" class="fas fa-folder-open">Electrodomesticos</i></a>
        <i id="btn3" class="fas fa-folder-open">Biciletas y triciclos</i>
        <i id="btn4" class="fas fa-folder-open">Herramientas</i>
        <i id="btn5" class="fas fa-folder-open">Telefonia celular</i>
        <i id="btn6" class="fas fa-folder-open">Tabletas</i>
        <i id="btn7" class="fas fa-folder-open">Computo</i>
      </div>

      <div id="caja2">

        <div id="box1">
          <h1>Prendas de oro</h1>

          <table>

<tr>
    <th>Tipo</th>
    <th>Marca</th>
    <th>Modelo</th>
    <th>Color</th>
    <th>Numero de Serie</th>
    <th>Valuo</th>
    <th>Prestamo</th>
    <th>CURP</th>
    <th>Comentarios</th>
    <th>Fecha</th>
</tr>


<?php 

require './conexion.php';

$todos_usuarios ="SELECT tipo , marca , modelo , modelo , color , num_serie ,valuo , prestamo , curp , comentarios , fecha  FROM empenio WHERE tipo = 'oro'";

$resultado = mysqli_query($conectar, $todos_usuarios);
while($row = mysqli_fetch_assoc($resultado)){

?>


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


        <div id="box2">
            <h1>Electrodomesticos</h1>

            <table>

            <tr>
                <th>Tipo</th>
                <th>Marca</th>
                <th>Modelo</th>
                <th>Color</th>
                <th>Numero de Serie</th>
                <th>Valuo</th>
                <th>Prestamo</th>
                <th>CURP</th>
                <th>Comentarios</th>
                <th>Fecha</th>
            </tr>

            
            <?php 

            require './conexion.php';

            $todos_usuarios ="SELECT tipo , marca , modelo , modelo , color , num_serie ,valuo , prestamo , curp , comentarios , fecha  FROM empenio WHERE tipo = 'electrodomestico'";

            $resultado = mysqli_query($conectar, $todos_usuarios);
            while($row = mysqli_fetch_assoc($resultado)){

            ?>


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
        
        <div id="box3">
          <h1>Biciletas y triciclos</h1>

          <table>

<tr>
    <th>Tipo</th>
    <th>Marca</th>
    <th>Modelo</th>
    <th>Color</th>
    <th>Numero de Serie</th>
    <th>Valuo</th>
    <th>Prestamo</th>
    <th>CURP</th>
    <th>Comentarios</th>
    <th>Fecha</th>
</tr>


<?php 

require './conexion.php';

$todos_usuarios ="SELECT tipo , marca , modelo , modelo , color , num_serie ,valuo , prestamo , curp , comentarios , fecha  FROM empenio WHERE tipo = 'bicicleta'";

$resultado = mysqli_query($conectar, $todos_usuarios);
while($row = mysqli_fetch_assoc($resultado)){

?>


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

<table>

<tr>
    <th>Tipo</th>
    <th>Marca</th>
    <th>Modelo</th>
    <th>Color</th>
    <th>Numero de Serie</th>
    <th>Valuo</th>
    <th>Prestamo</th>
    <th>CURP</th>
    <th>Comentarios</th>
    <th>Fecha</th>
</tr>


<?php 

require './conexion.php';

$todos_usuarios ="SELECT tipo , marca , modelo , modelo , color , num_serie ,valuo , prestamo , curp , comentarios , fecha  FROM empenio WHERE tipo = 'triciclo'";

$resultado = mysqli_query($conectar, $todos_usuarios);
while($row = mysqli_fetch_assoc($resultado)){

?>


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
        
        <div id="box4">
          <h1>Herramientas</h1>

          <table>

<tr>
    <th>Tipo</th>
    <th>Marca</th>
    <th>Modelo</th>
    <th>Color</th>
    <th>Numero de Serie</th>
    <th>Valuo</th>
    <th>Prestamo</th>
    <th>CURP</th>
    <th>Comentarios</th>
    <th>Fecha</th>
</tr>


<?php 

require './conexion.php';

$todos_usuarios ="SELECT tipo , marca , modelo , modelo , color , num_serie ,valuo , prestamo , curp , comentarios , fecha  FROM empenio WHERE tipo = 'herramienta'";

$resultado = mysqli_query($conectar, $todos_usuarios);
while($row = mysqli_fetch_assoc($resultado)){

?>


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

        <div id="box5">
          <h1>Telefonia celular</h1>

          <table>

<tr>
    <th>Tipo</th>
    <th>Marca</th>
    <th>Modelo</th>
    <th>Color</th>
    <th>Numero de Serie</th>
    <th>Valuo</th>
    <th>Prestamo</th>
    <th>CURP</th>
    <th>Comentarios</th>
    <th>Fecha</th>
</tr>


<?php 

require './conexion.php';

$todos_usuarios ="SELECT tipo , marca , modelo , modelo , color , num_serie ,valuo , prestamo , curp , comentarios , fecha  FROM empenio WHERE tipo = 'Telefonia'";

$resultado = mysqli_query($conectar, $todos_usuarios);
while($row = mysqli_fetch_assoc($resultado)){

?>


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

        <div id="box6">
          <h1>Tableta</h1>

          <table>

<tr>
    <th>Tipo</th>
    <th>Marca</th>
    <th>Modelo</th>
    <th>Color</th>
    <th>Numero de Serie</th>
    <th>Valuo</th>
    <th>Prestamo</th>
    <th>CURP</th>
    <th>Comentarios</th>
    <th>Fecha</th>
</tr>


<?php 

require './conexion.php';

$todos_usuarios ="SELECT tipo , marca , modelo , modelo , color , num_serie ,valuo , prestamo , curp , comentarios , fecha  FROM empenio WHERE tipo = 'tableta'";

$resultado = mysqli_query($conectar, $todos_usuarios);
while($row = mysqli_fetch_assoc($resultado)){

?>


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

        <div id="box7">
          <h1>Computo</h1>

          <table>

<tr>
    <th>Tipo</th>
    <th>Marca</th>
    <th>Modelo</th>
    <th>Color</th>
    <th>Numero de Serie</th>
    <th>Valuo</th>
    <th>Prestamo</th>
    <th>CURP</th>
    <th>Comentarios</th>
    <th>Fecha</th>
</tr>


<?php 

require './conexion.php';

$todos_usuarios ="SELECT tipo , marca , modelo , modelo , color , num_serie ,valuo , prestamo , curp , comentarios , fecha  FROM empenio WHERE tipo = 'computadora'";

$resultado = mysqli_query($conectar, $todos_usuarios);
while($row = mysqli_fetch_assoc($resultado)){

?>


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

      </div>
      
    </div>

  
    <script src="./main.js"></script>


</section>


<?php 

include "./pie.php";

?>


  
</body>
</html>