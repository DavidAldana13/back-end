<?php 

include "./phpL/conexion.php";

$tipoarticulo = $_POST['tipoarticulo'];
$marca = $_POST['marca'];
$modelo = $_POST['modelo'];
$color = $_POST['color'];
$num_serie = $_POST['num_serie'];
$comentario = $_POST['comentario'];
$valuo = $_POST['valuo'];
$prestamo = $_POST['prestamo'];
$curp = $_POST['curp'];
$fecha = $_POST['fecha'];
$fechapago = $_POST['fecha_pago'];
$estatusA = $_POST['estatus'];


//echo $tipoarticulo.'<br>'; 
//echo $marca.'<br>';
//echo $modelo.'<br>';
//echo $color.'<br>';
//echo $num_serie.'<br>';
//echo $comentario.'<br>';
//echo $valuo.'<br>';
//echo $prestamo.'<br>';
//echo $curp.'<br>';
//echo $comentario.'<br>';
//echo $fecha.'<br>';


$insertar ="INSERT INTO empenio (tipo , marca , modelo , color , num_serie , valuo , prestamo , curp , comentarios , fecha, fecha_pago, estatus ) VALUES ('$tipoarticulo','$marca','$modelo','$color','$num_serie','$valuo','$prestamo','$curp','$comentario','$fecha','$fechapago', '$estatusA')";

$query = mysqli_query($conectar, $insertar);


if($query){
  echo "<script>
  
          alert('Si se guardaron los datos con exito');
          location.href='./empenio.php';
  </script>";
}


?>