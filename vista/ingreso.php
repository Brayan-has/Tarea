<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $usuario = $_POST['usuario'];
    $contrasena = $_POST['contrasena'];

    // Aquí agregar lógica para verificar las credenciales
    // Por ejemplo, compararlas con una base de datos

    if ($usuario === "admin" && $contrasena === "12345") { // Ejemplo simple
        echo "Bienvenido, $usuario!";
    } else {
        echo "Usuario o contraseña incorrectos.";
    }
}
?>
