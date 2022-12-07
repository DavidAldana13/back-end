<?php
 
include './phpL/conexion.php';

 $curp = $_POST ['curp'];
 $contrasenia = $_POST ['pass'];

$validacion= mysqli_query($conectar, "SELECT * FROM usuarios WHERE curp='$curp' AND contrasenia ='$contrasenia'");


if(mysqli_num_rows($validacion) > 0){
 
    header("location: ./inicio_Admin.php ");
    exit();
}else{ 
  echo '<script>
alert("Acceso Denegado");
header("location: ../index.php ") ;

</script>';
exit();    

}


?>