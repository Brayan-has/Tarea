<?php session_start();?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../vista/principal.css">
</head>
    

<body>

<?php include_once "../controlador/atras.controlador.php"?>


    <div class="header">

       
        <nav class="nav">
            <ul><li><a href="#">Productos</a></li></ul>
            <ul><li><a href="#">Nosotros</a></li></ul>
            <ul><li><a href="#">Contacto</a></li></ul>
            <ul><li class="btn"><button class="a">salir</button></li></ul>
            
        </nav>
    </div>
    <h1 class="texto">
        <p id="p">Proyecto Anticonsumo</p>
        <p id="b">Bienvenid@ <?php echo $_SESSION["usuario"] ?>!</p>
    
    </h1>
    <!-- aquí va el código de Santiago -->
    <div class="container">
        
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
    </div>
    <div class="descripcion">
    <p>
<h1>Descripcion</h1>

Es fundamental promover una cultura de prevención y concienciación. Nuestro objetivo es brindar información clara y accesible sobre los riesgos asociados al consumo de drogas, así como ofrecer herramientas y recursos que fomenten un estilo de vida saludable y libre de adicciones.
Aquí encontrarás datos sobre diferentes tipos de drogas, sus efectos y las consecuencias que pueden acarrear tanto a nivel individual como social, así como alternativas saludables para disfrutar de la vida sin depender de sustancias.

    </p>   
<br>
    <p>
    <h1>Tipos de Drogas</h1>

<ol><li>Drogas Lícitas</li>Estas son sustancias cuyo uso y venta están permitidos por la ley, aunque pueden tener riesgos asociados.
Alcohol, Tabaco, Medicamentos
<li>Drogas Ilícitas</li>Estas son sustancias cuyo uso y venta están prohibidos por la ley.
Marihuana, Cocaína, Heroína, Éxtasis (MDMA), LSD (ácido lisérgico), Metanfetamina, Crack</ol>


<p>
Los efectos del consumo de drogas pueden variar significativamente de una persona a otra, y el uso repetido puede tener consecuencias graves para la salud física y mental. Es fundamental estar informado y ser consciente de estos riesgos para tomar decisiones responsables
Ejemplos de Efectos:
</p>

<li>Euforia y desinhibición: Sensación de relajación y sociabilidad.</li>
<li>Dificultad para coordinar movimientos: Problemas de equilibrio y coordinación.</li>
<li>Náuseas y vómitos: Efectos negativos por el exceso de consumo.</li>
<li>Aumento de la frecuencia cardíaca: Estimulación del sistema nervioso.</li>
<li>Sensación de calma: Inicialmente puede reducir la ansiedad, pero a largo plazo causa dependencia.</li>
<li>Entre otros mas</li>




    
    </div>
    <script src="./salir.js"></script>
</body>
</html>