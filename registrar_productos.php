<?php
include("conexion.php");
//recibir la informacion
$codigo=$_POST['codigo'];
$descripcion=$_POST['descripcion'];
$detalles=$_POST['detalles'];
$id_categori=$_POST['categoria'];
$p_c=$_POST['precio_compra'];
$p_v=$_POST['precio_venta'];
$stock=$_POST['stock'];
$estado=$_POST['estado'];


$id_proveedor=$_POST['proveedor'];
//mostrar la informacion




$nombre_archivo=$codigo.".jpg";

$ruta_foto="img_productos/".$nombre_archivo;

    
//$pass_secure = password_hash($codigo, PASSWORD_DEFAULT);



  if(move_uploaded_file($_FILES['img']['tmp_name'], $ruta_foto)){


    $consulta="INSERT INTO producto(codigo, descripcion, detalle, id_categoria,precio_compra,precio_venta,stock,estado,imagen,id_proveedor )
    VALUES ('$codigo', '$descripcion', '$detalles', '$id_categori', '$p_c', '$p_v','$stock','$estado','$nombre_archivo','$id_proveedor')";
    
    $ejecutar= mysqli_query($conn, $consulta);
    
    if ($ejecutar) {
        echo "Registro Exitoso";
    }else {
        echo "Registro Fallido";
    }


}else{

echo "fallo al enviar la foto";


      
    
}




?>