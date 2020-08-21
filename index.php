<!DOCTYPE html>
<html>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
<head>
    <title>MHD</title>
    
    <!--Meta tags-->
    <meta name="Description" content="Marco Hernández es un Diseñador Digital que ofrece servicios de Diseño Web, Branding, Edición de Video y Fotografía"/>
    <meta name="keywords" content="mhd, marcohernandezdesign, marcohernandezdiseñador, marco hernandez, diseño, diseño web, diseño digital, fotografia, fotografía, video, edicion, edición, branding, logotipos, logotipo, logo, edición de video, edición de fotografía, diseño méxico, méxico, mexico, celaya, guanajuato, bajio, design">

    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">

      <!--Icon-->
    <link rel="shortcut icon" href="img/Logo.ico" type="image/x-icon" />
    
    <!--CSS-->
    <link rel="stylesheet" type="text/css" href= "css/style.css">
    <link rel="stylesheet" type="text/css" href="css/swiper.css">
    <link rel="stylesheet" type="text/css" href="css/swiperContainer.css">

</head>

<body>
<div class="container">
    <?php include 'includes/header.php';?>

    <!--Carousel-->
    <main class="containerBanner">

            <!-- Swiper -->
            <div class="swiper-container">
              <div class="swiper-wrapper">
                <div class="swiper-slide" id="imgBan01">
                    <div class="rectangleBanBox"></div>
                    <div class="textBanBox">
                            <a>
                                <h2>Tu propio Sitio Web</h2>
                            </a>
                            <!--<p>Descripcion chidoris</p>-->
                    </div>
                    
                </div>
                <div class="swiper-slide" id="imgBan02">
                    <div class="rectangleBanBox"></div>
                    <div class="textBanBox">
                        <a>
                            <h2>Imagen para</h2>
                  <h2>tu negocio</h2>
                        </a>
                        <!--<p>Descripcion chidoris</p>-->
                    </div>
                </div>

                <div class="swiper-slide" id="imgBan03">
                    <div class="rectangleBanBox"></div>
                    <div class="textBanBox">
                        <a>
                            <h2>Edición de Video y Streaming</h2>
                        </a>
                        <!--<p>Descripcion chidoris</p>-->
                    </div>
                </div>
                    </div>
                <!-- Add Pagination -->
                <div class="swiper-pagination"></div>
                <!-- Add Arrows -->
                <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>
            </div>
    </main>

    <div class="containerBtnServices">
        <div class="btnService">
            <h2>Diseño Web</h2>
            <a href="servicio_web.php">
                <img src="img/icon_web.svg" class="iconServices">
            </a>
        </div>
        <div class="btnService">
            <h2>Branding</h2>
            <a href="servicio_branding.php">
                <img src="img/icon_branding.svg" class="iconServices">
            </a>
        </div>
        <div class="btnService">
            <h2>Fotografía</h2>
            <a href="servicio_foto.php">
                <img src="img/icon_foto.svg" class="iconServices">
            </a>
        </div>
        <div class="btnService">
            <h2>Video</h2>
            <a href="servicio_video.php">
                <img src="img/icon_video.svg" class="iconServices">
            </a>
        </div>
        <div class="btnService">
            <h2>Streaming</h2>
            <a href="servicio_stream.php">
                <img src="img/icon_stream.svg" class="iconServices">
            </a>
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
    
    <!--JS Swiper-->
    <script src="js/swiper.js"></script>
    
    <!-- Initialize Swiper -->
    <script>
  var swiper = new Swiper('.swiper-container', {
    slidesPerView: 1,
    spaceBetween: 30,
    loop: true,
    pagination: {
      el: '.swiper-pagination',
      clickable: true,
    },
    navigation: {
      nextEl: '.swiper-button-next',
      prevEl: '.swiper-button-prev',
    },
  });
    </script>

</body>
</html>