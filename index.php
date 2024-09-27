<?php
?>
<!DOCTYPE html>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Inicio de Sesión</title>
    <link rel="stylesheet" href="vista/estilos.css">
</head>
<body>
    <h1>Iniciar Sesión</h1>
    <div class="cuadro">
    <form action="./controlador/login.controlador.php" method="POST">
        <label for="usuario">Usuario:</label>
        <input type="text" id="usuario" name="usuario" required><br>

        <label for="contrasena">Contraseña:</label>
        <input type="password" id="contrasena" name="contrasena" required><br>

        <input type="submit" value="Iniciar Sesión">
        <li>
           <a href="./vista/registro.php" class="registro">Registrate</a>
           
        </li>
    </form>
</body>
</html>
