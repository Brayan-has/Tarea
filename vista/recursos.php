<?php session_start();?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recursos</title>
    <link rel="stylesheet" href="../vista/principal.css">
</head>
    

<body>

<?php include_once "../controlador/atras.controlador.php"?>


    <div class="header">

       
        <nav class="nav">
            <ul><li><a href="../vista/principal.php">principal</a></li></ul>
            <ul><li><a href="#">Nosotros</a></li></ul>
            <ul><li><a href="#">Contacto</a></li></ul>
            <ul><li class="btn"><button class="a">salir</button></li></ul>
            
        </nav>
    </div>
    <h1 class="texto">
        <p id="p">Recursos importantes</p>
        <p id="b">Bienvenid@ <?php echo $_SESSION["usuario"] ?>!</p>
    
    </h1>
   <!-- código para los recursos -->
    <div class="recursos">
        <div class="card">
            <p>Title</p>
            
        </div>
    </div>

    <script src="./salir.js"></script>
</body>
</html>