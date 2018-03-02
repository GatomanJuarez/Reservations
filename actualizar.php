<?php
session_start();
$SILLASD= $_GET["disponible"];



$servidor = "localhost";
$usuario = "root";
$contra = "";
$bd = "graduacion";
$conexion = new mysqli($servidor, $usuario, $contra, $bd);
$conexion->set_charset("utf8");
if ($conexion->connect_error) {
    die("Conexion Fallida: " . $conexion->connect_error);
} else {
    $idUsuario = $_SESSION["ID"];
    echo $idUsuario ."<br>";
    echo $SILLASD ."<br>";
        $sql_insert ;//= "UPDATE  alumnos SET  sillas = \"".$SILLASD."\" WHERE id = \"".$idUsuario."\"" ;
        try {
           $sillas_insert = $conexion->query($sql_insert);
           echo("Tú Reservación se ha hecho correctamente :)");  
           //header('Location: cambiar.php'); 
        } catch (Exception $e) {
           echo("Error al hacer la reservación: " . $e);
           //header('Location: error2.php');
        }
    }
    $conexion->close();
