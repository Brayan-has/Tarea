<?php session_start();?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php include_once "../controlador/atras.controlador.php"?>
    <h1>Bienvenido <?php echo $_SESSION["usuario"] ?>!</h1>
    <button class="a">Cerrar sesión</button>
    <script src="./salir.js"></script>
</body>
</html>