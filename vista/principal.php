<?php session_start();?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AntiConsumo</title>
    <link rel="stylesheet" href="../vista/principal.css">
</head>
    

<body>

<?php include_once "../controlador/atras.controlador.php"?>


    <div class="header">

       
        <nav class="nav">
            <ul><li><a href="../vista/index.isabela.html">Nosotros</a></li></ul>
            
            <ul><li class="btn"><button class="a">Salir</button></li></ul>
            
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
    
    <!-- <p> -->
<div class="contenido">

    <h1>Descripcion</h1>
    <p>
        Es fundamental promover una cultura de prevención y concienciación. Nuestro objetivo es brindar información clara y accesible sobre los riesgos asociados al consumo de drogas, así como ofrecer herramientas y recursos que fomenten un estilo de vida saludable y libre de adicciones.
        Aquí encontrarás datos sobre diferentes tipos de drogas, sus efectos y las consecuencias que pueden acarrear tanto a nivel individual como social, así como alternativas saludables para disfrutar de la vida sin depender de sustancias.
        
    </p>   
    <br>
    <p>
        <h1>Tipos de Drogas</h1>
        
        <h4>Drogas Lícitas</h4>
        
        <p>
        Estas son sustancias cuyo uso y venta están permitidos por la ley, aunque pueden tener riesgos asociados. 
        Alcohol, Tabaco, Medicamentos 
        <img src="../imagenes/drogas_licitas.jpg" width="400" height="400" alt="drogas-licitas">
        </p>
        
        <h4>Drogas Ilícitas</h4>
        
        <p> son sustancias cuyo uso y venta están prohibidos por la ley.
        Marihuana, Cocaína, Heroína, Éxtasis (MDMA), LSD (ácido lisérgico), Metanfetamina, Crack
        <img src="../imagenes/drogas_ilicitas.png" width="400" height="400" alt="dorgas-ilicitas">
        </p>
        
        
        <p>
            Los efectos del consumo de drogas pueden variar significativamente de una persona a otra, y el uso repetido puede tener consecuencias graves para la salud física y mental. Es fundamental estar informado y ser consciente de estos riesgos para tomar decisiones responsables
            Ejemplos de Efectos:
        </p>
        
        <li><p>Euforia y desinhibición: Sensación de relajación y sociabilidad.</li></p>
        <li><p>Dificultad para coordinar movimientos: Problemas de equilibrio y coordinación.</li></p>
        <li><p>Náuseas y vómitos: Efectos negativos por el exceso de consumo.</li></p>
        <li><p>Aumento de la frecuencia cardíaca: Estimulación del sistema nervioso.</li></p>
        
        <li><p>Sensación de calma: Inicialmente puede reducir la ansiedad, pero a largo plazo causa dependencia.</li></p>

        <li><p>Entre otros mas</p></li>
        
        <h1>Prevención</h1>
        <p>La prevención del consumo de drogas es crucial para proteger la salud y el bienestar de las personas y las comunidades. Las estrategias de prevención pueden incluir:</p>
        
        <h4>Programas en Escuelas:</h4> <p>Implementar programas educativos en las escuelas que informen a los estudiantes sobre los riesgos asociados con el consumo de drogas. Estos programas deben promover habilidades de vida, como la toma de decisiones y la gestión de emociones.
        
        Campañas de Concienciación: Desarrollar campañas comunitarias que utilicen medios de comunicación, redes sociales y eventos para informar sobre los peligros del consumo de drogas y desestigmatizar la búsqueda de ayuda.
        
        Entornos Saludables: Fomentar entornos familiares y sociales que apoyen el bienestar emocional. Involucrar a padres y cuidadores en la educación sobre drogas y crear redes de apoyo en la comunidad.
        
        Intervención Temprana: Identificar y ofrecer apoyo a jóvenes en riesgo antes de que comiencen a consumir drogas. Esto puede incluir asesoría y actividades recreativas saludables.</p>
        
        <h1>Educación</h1>
        <p>La educación es fundamental para prevenir el consumo de drogas y mitigar sus efectos. Algunas formas de educación incluyen:
            
            Información Clara y Accesible: Proporcionar información sobre los diferentes tipos de drogas, sus efectos y riesgos, así como alternativas saludables para el manejo del estrés y las emociones.
            
            Talleres y Seminarios: Organizar talleres interactivos que permitan a los participantes discutir abiertamente sobre las drogas, sus experiencias y los desafíos que enfrentan.
            
            Formación de Educadores y Padres: Capacitar a educadores y padres sobre cómo abordar el tema del consumo de drogas con sus hijos, equipándolos con herramientas y recursos para facilitar conversaciones abiertas y honestas.
            
            Recursos en Línea: Crear y promover sitios web y aplicaciones que ofrezcan información sobre prevención, tratamiento y apoyo, accesibles para jóvenes y adultos.</p>
           <div class="principal-img">

               <h1>Conclusión</h1>
               <p>El acticonsumo de drogas es un problema complejo que requiere un enfoque multidimensional que incluya la prevención, la educación y el apoyo a quienes luchan contra la adicción. La sensibilización y la información son herramientas poderosas que pueden ayudar a reducir el estigma asociado al consumo de drogas y fomentar un diálogo abierto sobre el tema.
                   
                   Al trabajar juntos —familias, educadores, comunidades y gobiernos— podemos crear un entorno más saludable y seguro para todos. La educación continua y el acceso a recursos adecuados son esenciales para empoderar a las personas a tomar decisiones informadas y evitar el consumo de drogas. Con una combinación de prevención efectiva y apoyo, es posible construir un futuro en el que todos tengan la oportunidad de vivir vidas plenas y saludables.
                   <br>
                   <img src="../imagenes/final.jpg" width="400" height="400" class="img" alt="Final">
                </p>
            </div> 
                
            </div>
            
            
            
            
        </div>
    <script src="./salir.js"></script>
</body>
</html>