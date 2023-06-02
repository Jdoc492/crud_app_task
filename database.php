
<?php
$servername = "localhost:3380";
$username = "root";
$password = "";
$dbname = "tasks-app";


$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar la conexión
// if ($conn->connect_error) {
//     die("Error en la conexión: " . $conn->connect_error);
// }

// echo "Conexión exitosa";
?>

