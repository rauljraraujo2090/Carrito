<?php
include("conexion.php");
//recibir la informacion

$id_cliente=$_POST['id_cli'];
$num_ven=$_POST['f_hora'];
$fecha_h=$_POST['fecha_e'];
$m_p=$_POST['m_pago'];
$monto=$_POST['monto'];
$comprobante=$_POST['comprobante'];
$estado=$_POST['estado'];


    $consulta="INSERT INTO pedidos(id_cliente,fecha_hora_pedido,fecha_entrega,metodo_pago,monto,comprobante,estado)
    VALUES ('$id_cliente','$num_ven','$fecha_h','$m_p','$monto','$comprobante','$estado')";

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