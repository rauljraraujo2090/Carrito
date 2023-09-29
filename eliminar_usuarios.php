<?php

include("conexion.php");


$id=$_GET["id"];

$sql="DELETE FROM usuarios WHERE id='$id'";
$query = mysqli_query($conn, $sql);

if($query){
    Header("Location: form.php");
}else{

}

?>