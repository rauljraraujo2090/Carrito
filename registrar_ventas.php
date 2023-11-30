<?php
include("conexion.php");
//recibir la informacion

$serie=$_POST['serie'];
$n_venta=$_POST['n_venta'];
$f_venta=$_POST['f_venta'];
$monto_total=$_POST['monto'];
$id_cliente=$_POST['cliente'];
$id_usuario=$_POST['usuario'];


$consulta="INSERT INTO ventas(serie_venta,numero_venta,fecha_hora_venta,monto_total,id_cliente,id_usuario)
    VALUES ('$serie','$n_venta','$f_venta,'$monto_total','$id_cliente','$id_usuario')";
    
    $ejecutars=mysqli_query($con,$consulta);

    if ($ejecutars) {
        echo "Registro Exitoso";
        header('Location:ventas.php');
    }else {
        echo "Registro Fallido raul";
    }






?>