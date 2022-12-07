
<?php 

$host ="localhost";
$user  = "root";
$pass = "";
$bd = "dana01";

$conectar = mysqli_connect($host,$user,$pass,$bd);

if(!$conectar){
  echo "No se puedo conectar a la base de datos";
}

?>