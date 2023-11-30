<?php
include("conexion.php");
//recibir la informacion

$serie=$_POST['serie_v'];
$num_ven=$_POST['num_venta'];
$fecha_h=$_POST['fecha_h_ven'];
$monto=$_POST['monto_to'];
$id_cliente=$_POST['id_cliente'];
$id_usuario=$_POST['id_usuario'];


    $consulta="INSERT INTO ventas(serie_venta,numero_venta,fecha_hora_venta,monto_total,id_cliente,id_usuario)
    VALUES ('$serie','$num_ven','$fecha_h','$monto','$id_cliente','$id_usuario')";

$ejecutar= mysqli_query($conn, $consulta);


if ($ejecutar) {
    echo "Registro exitoso";
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