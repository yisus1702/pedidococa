<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "pedidos";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

$nombre = $_POST['nombre'];
$email = $_POST['email'];
$pedido = $_POST['pedido'];
$distribuidor = $_POST['distribuidor'];

$sql = "INSERT INTO productos (nombre, email, pedido, distribuidor)
VALUES ('$nombre', '$email', '$pedido', '$distribuidor')";

if ($conn->query($sql) === TRUE) {
    echo "Nuevo registro insertado correctamente";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// Cerrar conexión
$conn->close();
?>
