<?php
include("conexion.php");
//recibir la informacion

$rol=$_POST['nombre'];







    $consulta="INSERT INTO roles(nombre)
VALUES ('$rol')";

$ejecutar= mysqli_query($conn, $consulta);

if ($ejecutar) {
    echo "Registro Exitoso";
}else {
    echo "Registro Fallido";

}
//mostrar la informacion

//echo $dni."<br>";
//echo $ape_nom."<br>";
//echo $correo."<br>";
//echo $telefono."<br>";
//echo $direccion."<br>";
//echo $fecha_naci."<br>";



?>