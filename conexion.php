<?php
//1. Creamos las varibles
$user = 'root';
$pass = '';
$host = 'localhost';
$db = 'practiceapi';

//2. Intentamos conectarnos
try{
    $conexion = new PDO("mysql:host=$host;dbname=$db", $user,$pass);
    $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    //echo 'Conectado';

}catch(PDOException $e){
    echo "Error: " . $e->getMessage();
}



?>