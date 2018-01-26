<?php
session_start();

$servidor = "localhost";
$usuario = "root";
$contra = "";
$bd = "graduacion";
$conexion = new mysqli($servidor, $usuario, $contra, $bd);
$conexion->set_charset("utf8");

//$RESERVACION = $_POST["?"];

if ($conexion->connect_error) {
    die("Conexion Fallida: " . $conexion->connect_error);
} else {
        
    //Revisando Validaciones disponibles
    $sql_reservaciones = "SELECT COUNT(*) FROM sillas WHERE alumno_id = " . $_SESSION["ID"];
    $res_reservaciones = $conexion->query($sql_reservaciones);
    if (($res_reservaciones + $RESERVACION) <= $_SESSION["sillas"]) {
        
        $sql_insert = "INSERT INTO sillas (alumno_id)
        values (" . $_SESSION["ID"] . " )";
        try {
           $sillas_insert = $conexion->query($sql_insert);
           echo("Tú Reservación se ha hecho correctamente :)");   
        } catch (Exception $e) {
           echo("Error al hacer la reservación: " . $e);
        }
        
    } else {
        echo "Error al realizar tu reservación: <br>
            Has excedido tus reservaciones disponibles.";
    }

    $conexion->close();
}
