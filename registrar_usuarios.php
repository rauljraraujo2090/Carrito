<?php
include('conexion.php');
$dni=$_POST['dni'];
$apellidos_nombres=$_POST['a_n'];
$correo=$_POST['correo'];
$telefono=$_POST['telefono'];
$direccion=$_POST['direccion'];
$f_nacimiento=$_POST['nacimiento'];
$insertar = "INSERT INTO usuarios (dni,apellidos_nombres,correo,telefono,direccion,fecha_nacimiento,password,activo,reset_password,token_password)VALUES ('$dni','$apellidos_nombres',
'$correo','$telefono','$direccion',$f_nacimiento,'','','','') ";

$query = mysqli_query($conn, $insertar);



if($query){
    Header("Location: form.php");
}else{

}

echo $dni."<br>";
echo $apellidos_nombres."<br>";
echo $correo."<br>";
echo $telefono."<br>";

echo $direccion."<br>";
echo $f_nacimiento."<br>";

?>