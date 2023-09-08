
<?php
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "carrito_ventas";

// Crea una conexión
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Verifica la conexión
if (!$conn) {
    die("Conexión fallida: " . mysqli_connect_error());
}
echo "Conexión exitosa";
?> 

