<?php
include("conexion.php");


$id = $_GET['id'];


$sql = "DELETE FROM usuarios WHERE id='$id'";
if(mysqli_query($mysqli, $sql)){
    echo '<script language="javascript">';
	echo 'alert("Registro eliminado exitósamente");';
	echo 'window.location="form.php";';
	echo '</script>';
	
} else {
	echo '<script language="javascript">';
	echo 'alert("Error eliminando registro!");';
	echo 'window.location="form.php";';
	echo '</script>';
}
?>

