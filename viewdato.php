<?php

//1. Incluimos la base de datos
include('conexion.php');
//2. Rellenamos los campos

//3. Realizamos la consulta
$sentencia = $conexion->prepare("SELECT uid, uname, uemail, upassword FROM userapi");
 $sentencia->execute();
$resultado = $sentencia->fetchAll(PDO::FETCH_ASSOC);
print_r(json_encode($resultado));


?>