<!DOCTYPE html>
<html>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
<head>
    <title>Portafolio</title>
    
    <!--Meta tags-->
    <meta name="Description" content="Marco Hernández es un Diseñador Digital que ofrece servicios de Diseño Web, Branding, Edición de Video y Fotografía"/>
    <meta name="keywords" content="mhd, marcohernandezdesign, marcohernandezdiseñador, marco hernandez, diseño, diseño web, diseño digital, fotografia, fotografía, video, edicion, edición, branding, logotipos, logotipo, logo, edición de video, edición de fotografía, diseño méxico, méxico, mexico, celaya, guanajuato, bajio, design">

    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">

      <!--Icon-->
    <link rel="shortcut icon" href="img/Logo.ico" type="image/x-icon" />
    
    <!--CSS-->
    <link rel="stylesheet" type="text/css" href= "css/style.css">
    <link rel="stylesheet" type="text/css" href="css/lightbox.css">

</head>

<body>
<div class="container">
    <?php include 'includes/header.php';?>

    <div style="width: 100%; display: flex; align-items: center; justify-content: center;">
        <a href="portafolio.php">
            <div style="padding-top: 50px;">
                Regresar
            </div>
        </a>
    </div>

    <div class="containerPortf">

    <div class="element">
        <a href="img/portf/RR.jpg" data-lightbox="mygallery" data-title="Logo de Fitime Store">
            <img src="img/portf/RR.jpg">
        </a>
    </div>
    <div class="element">
        <a href="img/portf/RR01_Big.jpg" data-lightbox="mygallery" data-title="Sesión en exterior">
            <img src="img/portf/RR01.jpg">
        </a>
    </div>
    <div class="element">
        <a href="img/portf/RR02_Big.jpg" data-lightbox="mygallery" data-title="Sesión en exterior">
            <img src="img/portf/RR02.jpg">
        </a>
    </div>
    <div class="element">
        <a href="img/portf/RR03_Big.jpg" data-lightbox="mygallery" data-title="Sesión en exterior">
            <img src="img/portf/RR03.jpg">
        </a>
    </div>
    

</div>

<div style="width: 100%; display: flex; align-items: center; justify-content: center;">
            <div style="width: 50%; text-align: justify; text-justify: inter-word; color: #00124B; font-size: 20px; margin: 30px;">
                <p><b>2018. Raven Raids (Ciudad de México, CDMX. México) - </b>Proyecto realizado para el equipo de e-Sports Raven Raids. Se trabajó en la creación del logotipo del equipo, el diseño de su playera deportiva y el manejo de sus redes sociales. También se creó su Sitio Web, desafortunadamente el equipo se encuentra en un "Break", por lo cuál se optó por dar de baja dicho Sitio Web.</p>
                <p>
                    <b>Facebook: </b><a href="https://www.facebook.com/RavenRaids/" target="_blank">https://www.facebook.com/RavenRaids/</a>
                </p>
                <p>
                    <b>Twitch: </b><a href="https://www.twitch.tv/raven_raids" target="_blank">https://www.twitch.tv/raven_raids</a>
                </p>
            </div>
    </div>


    <?php include 'includes/footer.php';?>

</div>

<!--JS Lightbox-->
<script src="js/lightbox-plus-jquery.min.js"></script>

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