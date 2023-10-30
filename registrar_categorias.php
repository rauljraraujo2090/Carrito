<?php
include("conexion.php");
//recibir la informacion

$categoria=$_POST['categoria'];

$consulta="INSERT INTO categoria(nombre)
    VALUES ('$categoria')";
    
    $ejecutar= mysqli_query($conn, $consulta);

    if ($ejecutar) {
        echo "Registro Exitoso";
    }else {
        echo "Registro Fallido";
    }






?>