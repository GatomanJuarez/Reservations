<?php
session_start();
$SILLAS= $_GET["sillas"];
$CONTADOR= $_GET["contador"];
$idUsuario = $_SESSION["ID"];
$sillas = $_SESSION["sillas"];
$TOTAL = $sillas - $CONTADOR;
echo $TOTAL ."<br>";
echo $sillas ."<br>";

    if ($sillas <= 0 || $TOTAL <=0){
        header('Location: error3.html');
    }
    else{
        //header('Location: obtener.php'); 
    }