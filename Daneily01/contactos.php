<?php 

include "./conexion.php" ;


$nombre = $_POST['nombre'];
$correo = $_POST['correo'];
$tel = $_POST['telefono'];
$comen = $_POST['comen'];


$ingresaComentario = "INSERT INTO comentarios (nombre, correo, telefono, comen) VALUES ('$nombre','$correo','$tel','$comen')";

$query = mysqli_query($conectar,$ingresaComentario);

if($query){

  echo "<script>
  
  alert('Muchas gracias por sus comentarios Su experiencia nos hará crecer para ofrecerle un mejor servicio. ');
  location.href='./index.php';
  
  </script> ";
  exit();

}

?>