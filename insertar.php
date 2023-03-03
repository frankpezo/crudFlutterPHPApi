<?php

 include('conexion.php');

 if(!isset($_POST['name']) || !isset($_POST['email']) || !isset($_POST['password'])  ){
    exit();
 }
 
 
 //2.2. Utilizamos el método post
 $name= $_POST['name'];  //Para convertir en mayúsculas
 $email = $_POST['email'];
 $password = $_POST['password'];

$sentencia = $conexion->prepare("INSERT INTO userapi(uname, uemail, upassword) VALUES (?,?,?)");
$resultado = $sentencia->execute([$name, $email, $password]);

//Creamos arreglo
$arr = array();
if($resultado === true){
  
    $arr['success'] = "true";
}

print(json_encode($arr));

//otra forma
/*


//1. Para salir si los datos no se presentan
if(!isset($_POST['name']) || !isset($_POST['email']) || !isset($_POST['password'])  ){
   exit();
}


//2.2. Utilizamos el método post
$name= $_POST['name'];  //Para convertir en mayúsculas
$email = $_POST['email'];
$password = $_POST['password'];

$sentencia = $conexion->prepare("INSERT INTO userapi(uname, uemail, upassword) VALUES (?,?,?)");
$resultado = $sentencia->execute([$name, $email, $password]);
*/

?>