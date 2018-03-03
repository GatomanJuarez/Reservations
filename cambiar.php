<?php
$servidor = "localhost";
$usuario = "root";
$contra = "";
$bd = "graduacion";
session_start();
// Creando la conexion a la bd
$conexion = new mysqli($servidor, $usuario, $contra, $bd);
$conexion->set_charset("utf8");
// Checando la conexion
if ($conexion->connect_error) {
    die("Conexion Fallida: " . $conexion->connect_error);
}else{
    $idUsuario = $_SESSION["ID"];
    //$sql_admins = "SELECT sillas FROM alumnos WHERE id = \"".$idUsuario."\"";
    //$res_admins = $conexion->query($sql_admins);
    $usuario = mysqli_fetch_array($res_admins);
        $_SESSION["sillas"] =  $usuario[0] ;
        echo $_SESSION["sillas"]."<br>";
        file_put_contents('txt/sillaDisponibles.txt',  $_SESSION["sillas"]."\r\n");
       
    
       //header('Location: obtener.php');
   
        echo "¡Tu Clave de Acceso es inválida!";
        //header('Location: error.html');
    }

$conexion->close();
