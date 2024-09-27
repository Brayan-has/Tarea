<?php
?>
<!DOCTYPE html>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Registrate</title>
    <link rel="stylesheet" href="estilos.css">
</head>
<body>
    <h1>Registro</h1>
    <div class="cuadro">
    <form action="ingreso.php" method="POST">
        <label for="usuario">Como te quieres llamar</label>
        <input type="text" id="usuario" name="usuario" required><br>

        <label for="contrasena">Crea tu contraseña</label>
        <input type="password" id="contrasena" name="contrasena" required><br>

        <input type="submit" value="Registrate">
    </form>
</body>
</html>