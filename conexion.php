<?php
//1. Creamos las varibles
/* 
//a. Variables usando el localhost
$user = 'root';
$pass = '';
$host = 'localhost';
$db = 'practiceapi'; */

//b. Para usarlo con el SQL server
$user ='';
$pass ='';
$host ='LAPTOP-A7ED93UJ';
$db ='practiceapi';

//2. Intentamos conectarnos
try{
    /*  //a. Para usar con el localhost
    $conexion = new PDO("mysql:host=$host;dbname=$db", $user,$pass); */
    
    //b. Para usarlo con SQL Server
    $conexion = new PDO("sqlsrv:server=$host; database= $db", $user, $pass);
    $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    //echo 'Conectado';

}catch(PDOException $e){
    echo "Error: " . $e->getMessage();
}



?>