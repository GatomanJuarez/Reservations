<?php
$CLAVE = $_POST["clave"];
$servidor = "localhost";
$usuario = "root";
$contra = "";
$bd = "graduacion";

// Creando la conexion a la bd
$conexion = new mysqli($servidor, $usuario, $contra, $bd);
$conexion->set_charset("utf8");
// Checando la conexion
if ($conexion->connect_error) {
    die("Conexion Fallida: " . $conexion->connect_error);
}else{
    $sql_alumnos = "SELECT * FROM alumnos WHERE clave = \"".$CLAVE."\"";
    $res_alumnos = $conexion->query($sql_alumnos);
    $usuario = mysqli_fetch_array($res_alumnos);
    $sql_admins = "SELECT * FROM admins WHERE clave = \"".$CLAVE."\"";
    $res_admins = $conexion->query($sql_admins);
    session_start();
    if ($res_alumnos->num_rows > 0) {
        $_SESSION["ID"] = ($usuario[0]);
        $_SESSION["nombre"] = ($usuario[1]." ".$usuario[2]." ".$usuario[3]);
        $_SESSION["sillas"] = $usuario[5];
        file_put_contents('txt/sillaDisponibles.txt',  $_SESSION["sillas"]."\r\n");
        header('Location: mesas.php');
    } elseif ($res_admins->num_rows > 0) {
        header('Location: admin.html');
    } else {
        echo "¡Tu Clave de Acceso es inválida!";
        header('Location: error.html');
    }

    $conexion->close();
}
