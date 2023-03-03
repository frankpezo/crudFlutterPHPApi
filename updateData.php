<?php
include_once('conexion.php');
//1. Para determinar que los campos estén vacíos
if(!isset($_POST['name']) || !isset($_POST['email']) || !isset($_POST['password'])  ){
    exit();
 }
 
//2. Tramemos por post
$name= $_POST['name'];  
$email = $_POST['email'];
$password = $_POST['password'];

//3. Realizamos la consulta
//En este caso vamos a modiicar los datos basándonos en el email
$sentencia = $conexion->prepare("UPDATE userapi SET uname = ?, upassword = ? WHERE uemail =?");
$resultado = $sentencia->execute([$name, $password, $email]);
//4. Creamos un arreglo
$arr = array();
if($resultado === true){
    $arr['success'] = "true";
}else{
    $arr['success'] = "false";
}
//4.1. Imprimimos el arreglo
print(json_encode($arr));
  


?>