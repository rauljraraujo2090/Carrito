<?php
include('../conexion.php');
$usuario=$_POST['usuarios'];
$password=$_POST['contrasenas'];
session_start();
$_SESSION['usuarios']=$usuario;
$consulta="SELECT * FROM  sesion where usuario='$usuario' and password='$password'";
$resultado=mysqli_query($conn,$consulta);
$filas=mysqli_num_rows($resultado);

if($filas){
    header("location:../formulario.php");



}else{
echo"ERROR  EN LA AUTENTIFICACION";

}
mysqli_free_result($resultado); //para que te bote el resultado
mysqli_close($conn); 






?>