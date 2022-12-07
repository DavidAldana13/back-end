<!DOCTYPE html>
<html lang="en">
<head>
      <!-- link para las redes del footer -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="./phpL/estilo_inicio.css"> 
  <link rel="stylesheet" href="./estilosL/empe.css">
  <link  rel="icon"   href="imagenes/logo.png" type="image/png" />
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Empeños</title>
</head>
<body>

<?php 

include "./phpL/inicio.php";

?>


<section id="datos">

<div class="cajaUno">

<form action="guardar_empenio.php" method="POST">

<select name="tipoarticulo" id="">

<option value="">Tipo de articulo</option>
<option value="Oro">Oro</option>
<option value="Electrodomestico">Electrodomestico</option>
<option value="Bocina">Bocina</option>
<option value="Telefonia">Telefonia</option>
<option value="Tableta">Tableta</option>
<option value="Bicicleta">Bicicleta</option>
<option value="Triciclo">Triciclo</option>
<option value="Herramienta">Herramienta</option>
<option value="Computadora">Computadora</option>
<option value="otro">otro</option>


</select>


<br>

<label for="">Marca: &nbsp &nbsp &nbsp</label>
<input type="text" value="" name="marca">

<label for="">Modelo: &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp </label>
<input type="text" value="" name="modelo">

<br>

<label for="">Color: &nbsp &nbsp &nbsp </label>
<input type="text" value="" name="color">

<label for="">Número de serie: &nbsp &nbsp</label>
<input type="text" value="" placeholder="codigo de barras" name="num_serie">

<br>

<label for="">Comentario: </label>
<input type="text" value=""  name="comentario">


<br>

<label for="">Avalúo: &nbsp &nbsp &nbsp</label>
<input type="text" value="" name="valuo">

<br>

<label for="">Préstamo:</label>
<input type="text" value="" name="prestamo">


<label for="">Curp: &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp </label>
<input type="text" value="" name="curp">

<br>

<label for="">fecha de empeño: &nbsp &nbsp &nbsp &nbsp &nbsp  &nbsp &nbsp &nbsp </label>
<input type="date" value="" name="fecha" class="fechas">

<br>

<label for="">fecha de proximo pago:  &nbsp &nbsp &nbsp </label>
<input type="date" value="" name="fecha_pago" class="fechas">

<br>

<select name="estatus" id="">

<option value="">Estatus del articulo</option>
<option value="vendido">Venta</option>
<option value="empenio">Empeño</option>



</select>


<input type="submit" class="btn" value="Empeñar">

  </form>

</div>

</section>







<?php 

include "./phpL/pie.php";

?>
  
</body>
</html>