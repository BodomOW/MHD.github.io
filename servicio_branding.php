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

    <main class="containerServices" id="imgServ02">
            <div class="textServBox">
                <h2>Branding</h2>
                <p>La imagen para tu negocio.</p>
            </div>

            <div class="rectangleServBox">
                <ul>
                    <li>- Creación de marca</li>
                    <li>- Identidad corporativa</li>
                    <li></li>
                    <li>- Posicionamiento</li>
                    <li></li>
                </ul>
            </div>
    </main>

    
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