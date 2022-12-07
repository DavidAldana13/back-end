<?php 

include 'conexion.php';

$curp = $_GET['curp'];

 //echo $id_curso;

$consulta = "DELETE FROM empenio WHERE curp ='$curp'";
$resultado = mysqli_query($conectar, $consulta);
if($resultado){
echo'

<script>

alert("Se elimino el registro correctamente");
location.href="./refrendo.php";

</script>
';

}

?>