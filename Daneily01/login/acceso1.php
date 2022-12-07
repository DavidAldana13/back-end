<?php
 
include './phpL/conexion.php';

 $curp = $_POST ['curp'];
 $contrasenia = $_POST ['pass'];

$validacion= mysqli_query($conectar, "SELECT * FROM usuarios WHERE curp='$curp' AND contrasenia ='$contrasenia'");

if(mysqli_num_rows($validacion) > 0){
    $_SESSION['nombre_completo'] = $curp;
    $row = $validacion->fetch_array();

    $nombre_completo = $row['nombre_completo'];
    $curp  = $row['curp'];
    $telefono = $row['telefono'];
    $direccion = $row['direccion'];
    $contrasenia = $row['pass'];
    $correo = $row['correo'];

    $_SESSION['nombre_completo'] = $nombre_completo;
    

    header("location: ./usuario/inicio_usuario.php");
    exit();
}else{
 
  echo '<script>
  alert("Acceso Denegado");
header("location: ./login1.php") ;

  </script>';
  exit();    

}



?>