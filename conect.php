<?php
$servername= "localhost";
$username="root";
$password="manuCNF20";
$dbname="mi_web";

$conn = mysqli_connect($servername, $username, $password, $dbname);
if (!$conn) {
    die("Conexión fallida: " . mysqli_connect_error());
}
echo "Conexión con MySQL exitosa";

// Aquí puedes hacer consultas, por ejemplo:
// $resultado = mysqli_query($conn, "SELECT * FROM usuarios");

// Cuando termines
mysqli_close($conn);
?>