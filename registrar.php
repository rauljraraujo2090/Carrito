<?php 

include("conexion.php");

if (isset($_POST['register'])) {
    if (strlen($_POST['dni']) >= 1 && strlen($_POST['apellidos-nombres']) >= 1&& strlen($_POST['correos']) >= 1&& strlen($_POST['celular']) >=1&& strlen($_POST['direc']) >=1&& strlen($_POST['nacimiento']) >= 1) {
	    $dni = trim($_POST['dni']);
	    $apellidos_name = trim($_POST['apellidos-nombres']);
        $correo1 = trim($_POST['correos']);
        $telef = trim($_POST['celular']);
        $direccion1 = trim($_POST['direc']);
        $f_nacimiento = trim($_POST['nacimiento']);
	    
	    $consulta = "INSERT INTO usuario(dni, apellidos_nombres,correo,telefono,direccion,fecha_nacimiento,password,activo,reset_password,token_password) VALUES ('$dni','$apellidos_name','$correo1','$telef','$direccion1','$f_nacimiento','','','','')";
	    $resultado = mysqli_query($conn,$consulta);
	}
}

?>