<?php
include_once('conexion.php');

if(!isset($_POST['id'])){
    exit();
}

//1. Traemos el id pero por método post
$id = $_POST['id'];

//2. Realizamos la consulta
$sentencia = $conexion->prepare("DELETE FROM userapi WHERE uid = ?");
$resultado =$sentencia->execute([$id]);

//3. Creamos un arreglo
$arr = array();
if($resultado === true){
    $arr['success'] = "true";
}else{
    $arr['success'] = "false";
}
//3.1. Imprimimos el arreglo
print(json_encode($arr));


?>