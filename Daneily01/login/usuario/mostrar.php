<?php
 include "conexion.php";

    $inc = include ("conexion.php");

    
    if ($inc){
        $consulta = "SELECT * FROM usuarios ";
        $resultado = mysqli_query($conectar,$consulta);
        if($resultado){
            while($row = $resultado ->fetch_array()){
                
                $nombre_completo = $row['nombre_completo'];
                $curp = $row['curp'];
                $telefono = $row['telefono'];
                $direccion = $row['direccion'];
                $contrasenia = $row['contrasenia'];
                $correo = $row['correo'];
            }
        }
    }
?>