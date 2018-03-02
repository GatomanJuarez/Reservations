<?php
$servidor = "localhost";
$usuario = "root";
$contra = "";
$bd = "graduacion";
session_start();
$sillas =  $_SESSION["sillas"];
$idUsuario = $_SESSION["ID"];
// Creando la conexion a la bd
$conexion = new mysqli($servidor, $usuario, $contra, $bd);
$conexion->set_charset("utf8");
// Checando la conexion
if ($conexion->connect_error) {
    die("Conexion Fallida: " . $conexion->connect_error);
}else{
    unlink("txt/reservados.txt");
    $sql_alumnos = "SELECT * FROM sillas ";
    $res_alumnos = $conexion->query($sql_alumnos);
        $estadoValor=array();
    while ($fila = mysqli_fetch_array($res_alumnos)){
        if($fila != NULL){
            $estado= $fila['alumno_id']; 
            file_put_contents('txt/reservados.txt', $estado."\r\n", FILE_APPEND);
            array_push($estadoValor, $estado);
    }
}
unlink("txt/sillasDisponibles.txt");
    $sql_alumnoss = "SELECT * FROM alumnos WHERE  id = \"".$idUsuario."\" ";
    $res_alumnoss = $conexion->query($sql_alumnoss);
    while ($filas = mysqli_fetch_array($res_alumnoss)){
        if($filas != NULL){
            $estados= $filas['sillas']; 
            file_put_contents('txt/sillasDisponibles.txt', $estados."\r\n", FILE_APPEND);
    }
}
echo $estados;
$_SESSION["sillas"] = $estados;
echo $_SESSION["sillas"];


$conexion->close();
header("location:mesas.php");
    }



