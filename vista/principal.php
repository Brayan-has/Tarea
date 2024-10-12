<?php session_start();?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="estilos.css">
</head>
<body>
    <?php include_once "../controlador/atras.controlador.php"?>
    <h1>Bienvenido <?php echo $_SESSION["usuario"] ?>!</h1>
    <button class="a">Cerrar sesión</button>
    <br>
    <br>
    <br>
    <div class="carrusel">
    <div class="imagenes">
        <img src="/Tarea/imagenes/imagen1.jpg" alt="Descripción 1">
        <img src="/Tarea/imagenes/imagen2.jpg" alt="Descripción 2">
        <img src="/Tarea/imagenes/imagen3.jpg" alt="Descripción 3">
        <img src="/Tarea/imagenes/imagen4.jpg" alt="Descripción 3">
    </div>
    <button class="prev" onclick="cambiarImagen(-1)">&#10094;</button>
    <button class="next" onclick="cambiarImagen(1)">&#10095;</button>
    <script src="carrusel.js"></script>
</div>

    <script src="./salir.js"></script>
</body>
</html>