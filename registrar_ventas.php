<?php
include("conexion.php");
//recibir la informacion

$serie=$_POST['serie'];
$n_venta=$_POST['n_venta'];
$f_venta=$_POST['f_venta'];
$monto_total=$_POST['monto'];
$id_cliente=$_POST['id_cli'];
$id_usuario=$_POST['id_usu'];


$consulta="INSERT INTO ventas(serie_venta,numero_venta,fecha_hora_venta,monto_total,id_cliente,id_usuario)
    VALUES ('$serie','$n_venta','$f_venta,'$monto_total','$id_cliente','$id_usuario')";
    
    $ejecutar= mysqli_query($conn, $consulta);

    if ($ejecutar) {
        echo "Registro Exitoso";
        header('Location:ventas.php');
    }else {
        echo "Registro Fallido raul";
    }






?>