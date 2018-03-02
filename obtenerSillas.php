<?php
$servidor = "localhost";
$usuario = "root";
$contra = "";
$bd = "graduacion";
session_start();
$idUsuario = $_SESSION["ID"];
// Creando la conexion a la bd
$conexion = new mysqli($servidor, $usuario, $contra, $bd);
$conexion->set_charset("utf8");
// Checando la conexion
if ($conexion->connect_error) {
    die("Conexion Fallida: " . $conexion->connect_error);
}else{
    unlink("txt/sillasDisponibles.txt");
    $sql_alumnos = "SELECT * FROM alumnos WHERE  id = \"".$idUsuario."\" ";
    $res_alumnos = $conexion->query($sql_alumnos);
    while ($fila = mysqli_fetch_array($res_alumnos)){
        if($fila != NULL){
            $estado= $fila['sillas']; 
            file_put_contents('txt/sillasDisponibles.txt', $estado."\r\n", FILE_APPEND);
    }
}
echo $estado;
$_SESSION["sillas"] = $estado;
echo $_SESSION["sillas"];
$conexion->close();
header("location:mesas.php");
    }