<?php
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
}
session_start();
$idUsua = $_SESSION["ID"];
?>

    <!DOCTYPE html>
    <html lang="es">

    <head>
        <meta charset="utf-8" />
        <title>Ingresar</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
    </head>
    <style>
        .boxlogin {
            border-radius: 4px;
            box-shadow: 0px 2px 10px;
            margin: 90px auto;
            width: 350px;
            height: 4000px;
            -webki-border-radius: 4px;
            -moz-border-radius: 4px;
        }
        
        table,
        th,
        td {
            border: 1px solid black;
        }

    </style>

    <body background="images/first.jpg">

        <div class="jumbotron boxlogin fullscreen">
            <center>
                <p>Reservados:</p>
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>Número de Mesa</th>
                            <th>Reservado por</th>
                        </tr>
                    </thead>
                    <?php foreach ($conexion->query('SELECT * from sillas WHERE alumno_id != 0') as $row){ // aca puedes hacer la consulta e iterarla con each. ?>
                    <?php foreach ($conexion->query('SELECT * from alumnos WHERE id = \''.$idUsua.'\'') as $row){ // aca puedes hacer la consulta e iterarla con each. ?>

                    <tr>
                        <td>
                            <?php echo $row['id'] ?>
                        </td>
                        <td>
                            <?php echo $row['nombre'] ?>
                        </td>

                    </tr>
                    <?php
                    }
                ?>
                        <?php
                    }
                ?>

                </table>

            </center>

        </div>
        <a href="#"><img src="pictures/user.png" title="Ir arriba" style="position: fixed; bottom: 10px; right: 14%;" height="50" onclick="window.location='login.html';" /></a>

    </body>

    </html>
