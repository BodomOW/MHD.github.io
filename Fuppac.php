<!DOCTYPE html>
<html>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
<head>
    <title>Portafolio</title>
    
    <!--Meta tags-->
    <meta name="Description" content="Marco Hernández es un Diseñador Digital que ofrFPe servicios de Diseño Web, Branding, Edición de Video y Fotografía"/>
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
        <a href="img/portf/FP.jpg" data-lightbox="mygallery" data-title="Logo de Fitime Store">
            <img src="img/portf/FP.jpg">
        </a>
    </div>
    <div class="element">
        <a href="img/portf/FP01_Big.jpg" data-lightbox="mygallery" data-title="Sesión en exterior">
            <img src="img/portf/FP01.jpg">
        </a>
    </div>
    

</div>

<div style="width: 100%; display: flex; align-items: center; justify-content: center;">
            <div style="width: 50%; text-align: justify; text-justify: inter-word; color: #00124B; font-size: 20px; margin: 30px;">
                <b>2016. FUPPAC (Celaya, Gto. México) -  </b>Campaña de prevención de la violencia hacia la mujer. Este proyecto se realizó con la Fundación Unidos para prevenir. Aquí trabaje en fotografía y en edición de imagen para hacer publicidad para la campaña.
                <p>
                    <b>Facebook: </b><a href="https://www.facebook.com/FundacionUnidosParaPrevenir/" target="_blank">https://www.facebook.com/FundacionUnidosParaPrevenir/</a>
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