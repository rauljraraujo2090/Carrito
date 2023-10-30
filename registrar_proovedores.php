<?php
include("conexion.php");
//recibir la informacion
$ruc=$_POST['ruc'];
$razon_social=$_POST['nombre'];
$correo=$_POST['correo'];

$telefono=$_POST['telefono'];

$direccion=$_POST['direccion'];
$m_pago=$_POST['stock'];

$consulta="INSERT INTO proveedor(ruc,razon_social,correo,telefono,direccion,metodo_pago)
    VALUES ('$ruc','$razon_social','$correo','$telefono','$direccion','$m_pago')";
    
    $ejecutar= mysqli_query($conn, $consulta);

    if ($ejecutar) {
        echo "Registro Exitoso";
    }else {
        echo "Registro Fallido";
    }






?>