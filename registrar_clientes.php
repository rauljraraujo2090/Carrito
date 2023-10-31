<?php
include("conexion.php");
//recibir la informacion
$ruc=$_POST['ruc'];
$razon_social=$_POST['nombre'];
$correo=$_POST['correo'];

$telefono=$_POST['telefono'];

$direccion=$_POST['direccion'];
$envio=$_POST['envio'];

$consulta="INSERT INTO cliente(ruc_dni,razon_social,correo,telefono,direccion,direccion_envio)
    VALUES ('$ruc','$razon_social','$correo','$telefono','$direccion','$envio')";
    
    $ejecutar= mysqli_query($conn, $consulta);

    if ($ejecutar) {
        echo "Registro Exitoso";
        header('Location:clientes.php');
    }else {
        echo "Registro Fallido";
    }






?>