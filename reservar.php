<?php
session_start();
$SILLAS= $_GET["sillas"];
$CONTADOR= $_GET["contador"];
$SEPARADAS = explode (',', $SILLAS);



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
    $sillas = $_SESSION["sillas"];
    echo $idUsuario ."<br>";
    foreach ($SEPARADAS as $VALOR){
        $sql_insert = "UPDATE  sillas SET  alumno_id = \"".$idUsuario."\" WHERE id = \"".$VALOR."\"" ;
        try {
           $sillas_insert = $conexion->query($sql_insert);
           echo("Tú Reservación se ha hecho correctamente :)");  
        } catch (Exception $e) {
           echo("Error al hacer la reservación: " . $e);
        header('Location: error2.php');
        }
    }
    echo $CONTADOR ."<br>";
    echo $sillas ."<br>";
    $TOTAL = $sillas - $CONTADOR;
    echo $TOTAL ."<br>";
    $sql_insert = "UPDATE  alumnos SET  sillas = \"".$TOTAL."\" WHERE id = \"".$idUsuario."\"" ;
        try {
           $sillas_insert = $conexion->query($sql_insert);
           echo("Tú Reservación se ha hecho correctamente :)");  
        } catch (Exception $e) {
           echo("Error al hacer la reservación: " . $e);
           header('Location: error2.php');
        }
    }
    header('Location: obtener.php'); 
    $conexion->close();
