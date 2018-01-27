<?php

$NOMBRE = $_POST["nombre"];
$PATERNO = $_POST["paterno"];
$MATERNO = $_POST["materno"];
$CLAVE = $_POST["clave"];
$SILLAS = $_POST["sillas"];
$PAGADO = $_POST["contact"];

$servidor = "localhost";
$usuario = "root";
$contra = "";
$bd = "graduacion";

$conexion = new mysqli($servidor, $usuario, $contra, $bd);
$conexion->set_charset("utf8");

if ($conexion->connect_error) {
    die("Conexion Fallida: " . $conexion->connect_error);
} else {
    $sql_insert = "INSERT INTO alumnos (nombre, paterno, materno, clave, sillas, pagado)
     values (\"".$NOMBRE."\", \"".$PATERNO."\", \"".$MATERNO."\", \"".$CLAVE."\", ".$SILLAS.", ".$PAGADO.")";
    
    try {
        $alumnos_insert = $conexion->query($sql_insert);
        $sql_alumnos = "SELECT * FROM alumnos";
        $res_alumnos = $conexion->query($sql_alumnos);
        header('Location: Exito.html');
        
    } catch (Exception $e) {
        echo("Error al agregar alumno: " . $e);
    }
    $conexion->close();
}
