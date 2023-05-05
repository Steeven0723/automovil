<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "parcial_2";

// Crea la conexión
$conexion = new mysqli($servername, $username, $password, $dbname);

// Verifica la conexión
if ($conexion->connect_error) {
    die("Conexión fallida: " . $conexion->connect_error);
}else{
    echo "conectado";
}

// Obtener los datos del formulario 
$documento = $_POST['documento'];
$nombre = $_POST['nombre'];
$correo = $_POST['correo'];
$placa = $_POST['placa'];
$modelo = $_POST['modelo'];

// Insertar los datos en la base de datos
$sql = "INSERT INTO automovil (documento, nombre, correo, placa, modelo) VALUES ('$documento','$nombre','$correo','$placa','$modelo')";
$ejecutar = mysqli_query($conexion,$sql);



?>

