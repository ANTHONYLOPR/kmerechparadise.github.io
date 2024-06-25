<?php
$connection = mysqli_connect("localhost", "usuario", "contraseña", "base_de_datos");

if (!$connection) {
    die("Error en la conexión: " . mysqli_connect_error());
}

$correo = $_POST['correo'];
$pass = $_POST['pass'];
$passco = $_POST['passco'];

echo "Inicio de sesión<br><br>";
echo $correo . " y " . $pass;
?>
