<!DOCTYPE html>
<html>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
<head>
    <title>Sobre mí</title>
    
    <!--Meta tags-->
    <meta name="Description" content="Marco Hernández es un Diseñador Digital que ofrece servicios de Diseño Web, Branding, Edición de Video y Fotografía"/>
    <meta name="keywords" content="mhd, marcohernandezdesign, marcohernandezdiseñador, marco hernandez, diseño, diseño web, diseño digital, fotografia, fotografía, video, edicion, edición, branding, logotipos, logotipo, logo, edición de video, edición de fotografía, diseño méxico, méxico, mexico, celaya, guanajuato, bajio, design">

    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">

      <!--Icon-->
    <link rel="shortcut icon" href="img/Logo.ico" type="image/x-icon" />
    
    <!--CSS-->
    <link rel="stylesheet" type="text/css" href= "css/style.css">

</head>

<body>
<div class="container">
    <?php include 'includes/header.php';?>

    <div class="containerAbout">

        <div>
            <img src="img/sm_Marco.png">
        </div>
        <div> 
            <p>Mi nombre es Marco Alejandro Hernández Villalobos, tengo 25 años y soy Diseñador Digital.
            </p>
            
            <p>Nací en Juchitán de Zaragoza, Oaxaca; pero actualmente me encuentro viviendo en Celaya, Guanajuato.</p>
            
            <p>Durante toda mi vida he viajado bastante así que estoy acostumbrado al cambio.</p>
            
            <p>Creo en el esfuerzo y en la dedicación para alcanzar las metas que uno se propone.</p>
        </div>
        
        <div>
            <p>En mis ratos libres me gusta jugar videojuegos, ya sea casual o competitivo. Actualmente soy coach de el equipo semi-profesional Raven Raids.</p>
            
            <p>También toco el teclado, disfruto mucho de poder sacar mis canciones favoritas en ese instrumento.</p>
            
            <p>Y para mantenerme en forma practico MMA (Mixed Martial Arts), me parece uno de los deportes con más exigencia física y mental.</p>
        </div>
    
        <div>
            <img src="img/sm_esports.png">
        </div>

    </div>

    
    <?php include 'includes/footer.php';?>
</div>


    <!--JS Menu Toggle-->
    <script src="https://code.jquery.com/jquery-3.4.1.js"></script>
    
    <script type="text/javascript">
    $(document).ready(function(){
        $('.menu-toggle').click(function(){
            $('nav').toggleClass('active')
        })
        $('ul li').click(function(){
            $(this).siblings().removeClass('active');
            $(this).toggleClass('active');
        })
    })
    </script>

</body>
</html>