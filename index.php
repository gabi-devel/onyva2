<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="layerdrops">
    <meta name="description" content="Laboix is beautifully designed laboratory & research HTML template. Which fits for laboratory test, science research, biology, medical research, science technology, chemistry, pharmaceuticals, pharmacy and all other type of science & technology research websites and businesses.">

    <title>Onyva</title>

    <!-- ========== Favicon Icon ========== -->
    <link rel="shortcut icon" href="assets/images/favicons/apple-touch-icon.png" type="image/x-icon">
    <link rel="apple-touch-icon" sizes="180x180" href="assets/images/favicons/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="assets/images/favicons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="assets/images/favicons/favicon-16x16.png">
    <link rel="manifest" href="assets/images/favicons/site.webmanifest">

    <!-- fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin="">
    <link href="https://fonts.googleapis.com/css2?family=Lexend:wght@100;200;300;400;500;600;700;800;900&amp;family=Urbanist:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,900&amp;display=swap" rel="stylesheet">
    <!-- ===========  All Stylesheet ================= -->
    <!--  Bootstrap css plugins -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <!--  bootstrap-select css plugins -->
    <link rel="stylesheet" href="assets/css/bootstrap-select.min.css">
    <!--  animate css plugins -->
    <link rel="stylesheet" href="assets/css/animate.min.css">
    <!--  fontawesome css plugins -->
    <link rel="stylesheet" href="assets/css/all.min.css">
    <!--  jquery-ui css plugins -->
    <link rel="stylesheet" href="assets/css/jquery-ui.css">
    <!--  jarallax css plugins -->
    <link rel="stylesheet" href="assets/css/jarallax.css">
    <!--  magnific-popup css plugins -->
    <link rel="stylesheet" href="assets/css/jquery.magnific-popup.css">
    <!--  nouislider css plugins -->
    <link rel="stylesheet" href="assets/css/nouislider.min.css">
    <!--  nouislider css plugins -->
    <link rel="stylesheet" href="assets/css/nouislider.pips.css">
    <!--  nouislider css plugins -->
    <link rel="stylesheet" href="./assets/css/style.css">
    <link rel="stylesheet" href="./assets/css/estilos.css">
    <!--  slider css plugins -->
    <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/css/owl.theme.default.min.css">

    <!-- template styles -->
    <link rel="stylesheet" href="assets/css/template_original.css">
    <style type="text/css" id="jarallax-clip-0">#jarallax-container-0 {
                clip: rect(0 1903px 1091.03125px 0);
                clip: rect(0, 1903px, 1091.03125px, 0);
                -webkit-clip-path: polygon(0 0, 100% 0, 100% 100%, 0 100%);
                clip-path: polygon(0 0, 100% 0, 100% 100%, 0 100%);
            }</style><style type="text/css" id="jarallax-clip-1">#jarallax-container-1 {
                clip: rect(0 1903px 725px 0);
                clip: rect(0, 1903px, 725px, 0);
                -webkit-clip-path: polygon(0 0, 100% 0, 100% 100%, 0 100%);
                clip-path: polygon(0 0, 100% 0, 100% 100%, 0 100%);
            }</style><style>:is([id*='google_ads_iframe'],[id*='taboola-'],.taboolaHeight,.taboola-placeholder,#top-ad,#credential_picker_container,#credentials-picker-container,#credential_picker_iframe,[id*='google-one-tap-iframe'],#google-one-tap-popup-container,.google-one-tap__module,.google-one-tap-modal-div,#amp_floatingAdDiv,#ez-content-blocker-container) {display:none!important;min-height:0!important;height:0!important;}</style>
    <link rel="stylesheet" href="assets/css/estilos.css">        
</head>

<body class="custom-cursor">

    <div class="page-wrapper">
        
        
    <?php include_once __DIR__ . '/components/navbar.php'; ?>

        
        <!-- Slider inicio -->
        <section class="main-slider-one">
            <div class="main-slider-one__carousel laboix-owl__carousel owl-carousel"
                data-owl-options='{
                "loop": true,
                "animateOut": "fadeOut",
                "animateIn": "fadeIn",
                "items": 1,
                "autoplay": true,
                "autoplayTimeout": 7000,
                "smartSpeed": 1000,
                "nav": false,
                "dots": true,
                "margin": 0
                }'
            >

                <?php
                $slider_inicio = [
                    [
                        /* 'background' => "assets/images/backgrounds/slider-1-1.jpg", */
                        'background' => "assets/images/about/binding_menudeensayos.jpg",
                        'title' => "Productos Médicos de Diagnóstico",
                        'subtitle' => "Conozca nuestros productos"
                    ],
                    [
                        'background' => "assets/images/about/otrosprodmed11f.jpeg",
                        'title' => "Otros Productos Médicos",
                        'subtitle' => "Conozca nuestros productos"
                    ],
                    [
                        'background' => "assets/images/about/intartif37.jpg",
                        'title' => "Inteligencia Artificial",
                        'subtitle' => "Conozca nuestros productos"
                    ]
                ];
                ?>
                <?php foreach ($slider_inicio as $slider_image): ?>
                    <div class="item">
                        <div class="main-slider-one__item">
                            <div class="main-slider-one__bg" style="background-image: url(<?php echo $slider_image['background']; ?>);"></div>
                            <div class="container">
                                <div class="row">
                                    <div class="col-lg-7">
                                        <div class="main-slider-one__content">
                                            <h5 class="main-slider-one__sub-title"><?php echo $slider_image['subtitle']; ?></h5>
                                            <h2 class="main-slider-one__title"><?php echo $slider_image['title']; ?></h2>
                                            <div class="main-slider-one__btn">
                                                <a href="services.html" class="laboix-btn">Ver más</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="main-slider-one__shape main-slider-one__shape--one">
                                <img src="assets/images/shapes/hero-1-1.png" alt>
                            </div>
                            <div class="main-slider-one__shape main-slider-one__shape--two">
                                <img src="assets/images/shapes/hero-1-2.png" alt>
                            </div>
                            <div class="main-slider-one__shape main-slider-one__shape--three">
                                <img src="assets/images/shapes/hero-1-3.png" alt>
                            </div>
                            <div class="main-slider-one__shape main-slider-one__shape--fore">
                                <img src="assets/images/shapes/hero-1-4.png" alt>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </section>

        <!-- service-page section Start -->
        <section class="service-page service-page--one">
            <div class="service-page__bg" style="background-image: url(assets/images/shapes/service-shape-1-1.png);"></div>
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="sec-title text-center wow fadeInUp" data-wow-duration='1500ms'>
                            <h6 class="sec-title__tagline"><img src="assets/images/shapes/sec-title-s-1.png" alt="our Service" class="sec-title__img">Nuestros productos</h6>
                            <h3 class="sec-title__title">Ofrecemos los mejores <br> productos para vos</h3>
                        </div>
                    </div>
                </div>
                <div class="row gutter-y-30">
                    <div class="col-md-6 col-lg-4">
                        <div class="service-card wow fadeInUp" data-wow-duration='1500ms' data-wow-delay='400ms'>
                            <div class="service-card__inner">
                                <div class="service-card__top">
                                    <h3 class="service-card__title"><a href="#">Productos <br>médicos de<br> diagnóstico</a></h3>
                                    <div class="service-card__icon">
                                        <?php include('assets/iconos/prescription2.php'); ?>
                                    </div>
                                </div>
                                <div class="service-card__thumb">
                                    <div class="service-card__thumb__item">
                                        <img src="assets/images/about/binding_menudeensayos.jpg" alt="Artificial <br> intelligence">
                                    </div>
                                    <div class="service-card__thumb__shape">
                                        <img src="assets/images/shapes/shape-service.png" alt>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <div class="service-card wow fadeInUp" data-wow-duration='1500ms' data-wow-delay='800ms'>
                            <div class="service-card__inner">
                                <div class="service-card__top" style="padding-top: 50px;">
                                    <h3 class="service-card__title"><a href="service-d-genetic-tests.html"> Veterinaria <br></a></h3>
                                    <div class="service-card__icon">
                                        <?php include('assets/iconos/hearts.php'); ?>
                                    </div>
                                </div>
                                <div class="service-card__thumb">
                                    <div class="service-card__thumb__item" style="margin-top: 28px;">
                                        <img src="assets/images/about/veterinaria.png" alt="Pathology <br> testing">
                                    </div>
                                    <div class="service-card__thumb__shape">
                                        <img src="assets/images/shapes/shape-service.png" alt>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <div class="service-card wow fadeInUp" data-wow-duration='1500ms' data-wow-delay='800ms'>
                            <div class="service-card__inner">
                                <div class="service-card__top">
                                    <h3 class="service-card__title"><a href="service-d-genetic-tests.html">Inteligencia <br> artificial</a></h3>
                                    <div class="service-card__icon">
                                        <?php include('assets/iconos/ia.php'); ?>
                                    </div>
                                </div>
                                <div class="service-card__thumb">
                                    <div class="service-card__thumb__item">
                                        <img src="assets/images/about/intartif37.jpg" alt="Pathology <br> testing">
                                    </div>
                                    <div class="service-card__thumb__shape">
                                        <img src="assets/images/shapes/shape-service.png" alt>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- service-page section End -->




        <div class="client-carousel client-carousel-one ">
            <div class="container">
                <div class="client-carousel__one laboix-owl__carousel owl-theme owl-carousel owl-loaded owl-drag" data-owl-options="{
                    &quot;items&quot;: 5,
                    &quot;margin&quot;: 55,
                    &quot;smartSpeed&quot;: 700,
                    &quot;loop&quot;:true,
                    &quot;autoplay&quot;: 6000,
                    &quot;nav&quot;:true,
                    &quot;dots&quot;:false,
                    &quot;navText&quot;: [&quot;<span class=\&quot;fa fa-angle-left\&quot;></span>&quot;,&quot;<span class=\&quot;fa fa-angle-right\&quot;></span>&quot;],
                    &quot;responsive&quot;:{
                        &quot;0&quot;:{
                            &quot;items&quot;:1,
                            &quot;margin&quot;: 0
                        },
                        &quot;360&quot;:{
                            &quot;items&quot;:2,
                            &quot;margin&quot;: 0
                        },
                        &quot;575&quot;:{
                            &quot;items&quot;:3,
                            &quot;margin&quot;: 30
                        },
                        &quot;768&quot;:{
                            &quot;items&quot;:3,
                            &quot;margin&quot;: 40
                        },
                        &quot;992&quot;:{
                            &quot;items&quot;: 4,
                            &quot;margin&quot;: 40
                        },
                        &quot;1200&quot;:{
                            &quot;items&quot;: 5
                        }
                    }
                }">
                
                <div class="owl-stage-outer"><div class="owl-stage" style="transform: translate3d(-2205px, 0px, 0px); transition: 0.7s; width: 4900px;"><div class="owl-item cloned" style="width: 190px; margin-right: 55px;"><div class="client-carousel__one__item">
                        <img src="assets/images/resources/brand-2-1.png" alt="laboix">
                    </div></div><div class="owl-item cloned" style="width: 190px; margin-right: 55px;"><div class="client-carousel__one__item">
                        <img src="assets/images/logos/Binding-Site.jpg" alt="laboix">
                    </div></div><div class="owl-item cloned" style="width: 190px; margin-right: 55px;"><div class="client-carousel__one__item">
                        <img src="assets/images/resources/brand-2-1.png" alt="laboix">
                    </div></div><div class="owl-item cloned" style="width: 190px; margin-right: 55px;"><div class="client-carousel__one__item">
                        <img src="assets/images/resources/brand-2-1.png" alt="laboix">
                    </div></div><div class="owl-item cloned" style="width: 190px; margin-right: 55px;"><div class="client-carousel__one__item">
                        <img src="assets/images/resources/brand-2-1.png" alt="laboix">
                    </div></div><div class="owl-item" style="width: 190px; margin-right: 55px;"><div class="client-carousel__one__item">
                        <img src="assets/images/resources/brand-2-1.png" alt="laboix">
                    </div></div><div class="owl-item" style="width: 190px; margin-right: 55px;"><div class="client-carousel__one__item">
                        <img src="assets/images/resources/brand-2-1.png" alt="laboix">
                    </div></div><div class="owl-item" style="width: 190px; margin-right: 55px;"><div class="client-carousel__one__item">
                        <img src="assets/images/logos/Binding-Site.jpg" alt="laboix">
                    </div></div><div class="owl-item" style="width: 190px; margin-right: 55px;"><div class="client-carousel__one__item">
                        <img src="assets/images/resources/brand-2-1.png" alt="laboix">
                    </div></div><div class="owl-item active" style="width: 190px; margin-right: 55px;"><div class="client-carousel__one__item">
                        <img src="assets/images/resources/brand-2-1.png" alt="laboix">
                    </div></div><div class="owl-item active" style="width: 190px; margin-right: 55px;"><div class="client-carousel__one__item">
                        <img src="assets/images/resources/brand-2-1.png" alt="laboix">
                    </div></div><div class="owl-item active" style="width: 190px; margin-right: 55px;"><div class="client-carousel__one__item">
                        <img src="assets/images/resources/brand-2-1.png" alt="laboix">
                    </div></div><div class="owl-item active" style="width: 190px; margin-right: 55px;"><div class="client-carousel__one__item">
                        <img src="assets/images/resources/brand-2-1.png" alt="laboix">
                    </div></div><div class="owl-item active" style="width: 190px; margin-right: 55px;"><div class="client-carousel__one__item">
                        <img src="assets/images/resources/brand-2-1.png" alt="laboix">
                    </div></div><div class="owl-item" style="width: 190px; margin-right: 55px;"><div class="client-carousel__one__item">
                        <img src="assets/images/resources/brand-2-1.png" alt="laboix">
                    </div></div><div class="owl-item cloned" style="width: 190px; margin-right: 55px;"><div class="client-carousel__one__item">
                        <img src="assets/images/resources/brand-2-1.png" alt="laboix">
                    </div></div><div class="owl-item cloned" style="width: 190px; margin-right: 55px;"><div class="client-carousel__one__item">
                        <img src="assets/images/resources/brand-2-1.png" alt="laboix">
                    </div></div><div class="owl-item cloned" style="width: 190px; margin-right: 55px;"><div class="client-carousel__one__item">
                        <img src="assets/images/resources/brand-2-1.png" alt="laboix">
                    </div></div><div class="owl-item cloned" style="width: 190px; margin-right: 55px;"><div class="client-carousel__one__item">
                        <img src="assets/images/resources/brand-2-1.png" alt="laboix">
                    </div></div><div class="owl-item cloned" style="width: 190px; margin-right: 55px;"><div class="client-carousel__one__item">
                        <img src="assets/images/logos/Binding-Site.jpg" alt="laboix">
                    </div></div></div></div><div class="owl-nav"><button type="button" role="presentation" class="owl-prev" aria-label="carousel button"><span class="fa fa-angle-left"></span></button><button type="button" role="presentation" class="owl-next" aria-label="carousel button"><span class="fa fa-angle-right"></span></button></div><div class="owl-dots disabled"></div></div><!-- /.thm-owl__slider -->
            </div><!-- /.container -->
        </div><!-- /.client-carousel -->
        

    <?php include_once __DIR__ . '/components/footer.php'; ?>

    </div><!-- /.page-wrapper -->



    <div class="mobile-nav__wrapper">
        <div class="mobile-nav__overlay mobile-nav__toggler"></div>
        <!-- /.mobile-nav__overlay -->
        <div class="mobile-nav__content">
            <span class="mobile-nav__close mobile-nav__toggler"><i class="fa fa-times"></i></span>

            <div class="logo-box">
                <a href="index.html" aria-label="logo image"><img src="assets/images/logo-light.png" width="155" alt="labiox"></a>
            </div>
            <!-- /.logo-box -->
            <div class="mobile-nav__container">
                        <ul class="main-menu__list">

                            <li class="dropdown megamenu current">
                                <a href="index.html">Home<button aria-label="dropdown toggler"><i class="fa fa-angle-down"></i></button></a>
                                <ul>
                                    <li class="current">
                                        <section class="home-showcase">
                                            <div class="container">
                                                <div class="home-showcase__inner">
                                                    <div class="row">
                                                        <div class="col-md-6 col-lg-3">
                                                            <div class="demo-one__card">
                                                                <div class="demo-one__image">
                                                                    <img src="assets/images/home-showcase/home-showcase-1.jpg" alt="">
                                                                    <div class="demo-one__btns">
                                                                        <a href="index.html" class="laboix-btn demo-one__btn">
                                                                            <span>Multi Page</span>
                                                                        </a><!-- /.thm-btn demo-one__btn -->
                                                                        <a href="index-one-page.html" class="laboix-btn demo-one__btn">
                                                                            <span>One Page</span>
                                                                        </a><!-- /.thm-btn demo-one__btn -->
                                                                    </div><!-- /.demo-one__btns -->
                                                                </div><!-- /.demo-one__image -->
                                                                <div class="demo-one__content">
                                                                    <h3 class="demo-one__title">
                                                                        <a href="index.html">Home Page 01</a>
                                                                    </h3><!-- /.demo-one__title -->
                                                                </div><!-- /.demo-one__content -->
                                                            </div><!-- /.demo-one__card -->
                                                        </div><!-- /.col-md-6 col-lg-3 -->
                                                        <div class="col-md-6 col-lg-3">
                                                            <div class="demo-one__card">
                                                                <div class="demo-one__image">
                                                                    <img src="assets/images/home-showcase/home-showcase-2.jpg" alt="">
                                                                    <div class="demo-one__btns">
                                                                        <a href="index-2.html" class="laboix-btn demo-one__btn">
                                                                            <span>Multi Page</span>
                                                                        </a><!-- /.thm-btn demo-one__btn -->
                                                                        <a href="index-2-one-page.html" class="laboix-btn demo-one__btn">
                                                                            <span>One Page</span>
                                                                        </a><!-- /.thm-btn demo-one__btn -->
                                                                    </div><!-- /.demo-one__btns -->
                                                                </div><!-- /.demo-one__image -->
                                                                <div class="demo-one__content">
                                                                    <h3 class="demo-one__title">
                                                                        <a href="index-2.html">Home Page 02</a>
                                                                    </h3><!-- /.demo-one__title -->
                                                                </div><!-- /.demo-one__content -->
                                                            </div><!-- /.demo-one__card -->
                                                        </div><!-- /.col-md-6 col-lg-3 -->
                                                        <div class="col-md-6 col-lg-3">
                                                            <div class="demo-one__card">
                                                                <div class="demo-one__image">
                                                                    <img src="assets/images/home-showcase/home-showcase-3.jpg" alt="">
                                                                    <div class="demo-one__btns">
                                                                        <a href="index-3.html" class="laboix-btn demo-one__btn">
                                                                            <span>Multi Page</span>
                                                                        </a><!-- /.thm-btn demo-one__btn -->
                                                                        <a href="index-3-one-page.html" class="laboix-btn demo-one__btn">
                                                                            <span>One Page</span>
                                                                        </a><!-- /.thm-btn demo-one__btn -->
                                                                    </div><!-- /.demo-one__btns -->
                                                                </div><!-- /.demo-one__image -->
                                                                <div class="demo-one__content">
                                                                    <h3 class="demo-one__title">
                                                                        <a href="index-3.html">Home Page 03</a>
                                                                    </h3><!-- /.demo-one__title -->
                                                                </div><!-- /.demo-one__content -->
                                                            </div><!-- /.demo-one__card -->
                                                        </div><!-- /.col-md-6 col-lg-3 -->
                                                        <div class="col-md-6 col-lg-3">
                                                            <div class="demo-one__card">
                                                                <div class="demo-one__image">
                                                                    <img src="assets/images/home-showcase/home-showcase-4.jpg" alt="">
                                                                    <div class="demo-one__btns">
                                                                        <a href="index-dark.html" class="laboix-btn demo-one__btn">
                                                                            <span>View Page</span>
                                                                        </a><!-- /.thm-btn demo-one__btn -->
                                                                    </div><!-- /.demo-one__btns -->
                                                                </div><!-- /.demo-one__image -->
                                                                <div class="demo-one__content">
                                                                    <h3 class="demo-one__title">
                                                                        <a href="index-dark.html">Home Dark</a>
                                                                    </h3><!-- /.demo-one__title -->
                                                                </div><!-- /.demo-one__content -->
                                                            </div><!-- /.demo-one__card -->
                                                        </div><!-- /.col-md-6 col-lg-3 -->
                                                    </div><!-- /.row -->

                                                </div><!-- /.home-showcase__inner -->
                                            </div><!-- /.container -->
                                        </section>
                                    </li>
                                </ul>
                            </li>



                            <li>
                                <a href="about.html">About</a>
                            </li>

                            <li class="dropdown">
                                <a href="#">Service<button aria-label="dropdown toggler"><i class="fa fa-angle-down"></i></button></a>
                                <ul class="sub-menu">
                                    <li><a href="services.html">Services</a></li>
                                    <li><a href="services-carousel.html">Services Carousel</a></li>
                                    <li><a href="services-2.html">Services 2</a></li>
                                    <li><a href="services-carousel-2.html">Services Carousel 2</a></li>
                                    <li><a href="service-d-artificial.html">Artificial</a></li>
                                    <li><a href="service-d-genetic-tests.html">Specialized</a></li>
                                    <li><a href="service-d-research.html">Chemical</a></li>
                                    <li><a href="service-d-pathology.html">Pathology</a></li>
                                    <li><a href="service-d-sampling.html">Free Home</a></li>
                                    <li><a href="service-d-diagnoses.html">Safe diagnoses</a></li>
                                </ul>
                            </li>

                            <li class="dropdown">
                                <a href="#">Pages<button aria-label="dropdown toggler"><i class="fa fa-angle-down"></i></button></a>
                                <ul class="sub-menu">
                                    <li><a href="team.html">Team</a></li>
                                    <li><a href="team-carousel.html">Team Carousel</a></li>
                                    <li><a href="team-details.html">Team Details</a></li>
                                    <li><a href="packages.html">Packages</a></li>
                                    <li><a href="packages-carousel.html">Packages Carousel</a></li>
                                    <li class="dropdown"><a href="gallery.html">Gallery<button aria-label="dropdown toggler"><i class="fa fa-angle-down"></i></button></a>
                                        <ul class="sub-menu">
                                            <li><a href="gallery-grid.html">Gallery Grid</a></li>
                                            <li><a href="gallery-filter.html">Gallery filter</a></li>
                                            <li><a href="gallery-carousel.html">Gallery Carousel</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="faq.html">FAQs</a></li>
                                    <li><a href="login.html">Login</a></li>
                                    <li><a href="404.html">404 Error</a></li>
                                </ul>
                            </li>

                            <li class="dropdown">
                                <a href="#">Shop<button aria-label="dropdown toggler"><i class="fa fa-angle-down"></i></button></a>
                                <ul class="sub-menu">
                                    <li class="dropdown"><a href="#">Products<button aria-label="dropdown toggler"><i class="fa fa-angle-down"></i></button></a>
                                        <ul class="sub-menu">
                                            <li><a href="products.html">No Sidebar</a></li>
                                            <li><a href="products-left.html">Left Sidebar</a></li>
                                            <li><a href="products-right.html">Right Sidebar</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="products-carousel.html">Products Carousel</a></li>
                                    <li><a href="product-details.html">Product Details</a></li>
                                    <li><a href="cart.html">Cart</a></li>
                                    <li><a href="checkout.html">Checkout</a></li>
                                </ul>
                            </li>
                            <li class="dropdown">
                                <a href="#">Blog<button aria-label="dropdown toggler"><i class="fa fa-angle-down"></i></button></a>
                                <ul class="sub-menu">
                                    <li class="dropdown"><a href="#">Blog<button aria-label="dropdown toggler"><i class="fa fa-angle-down"></i></button></a>
                                        <ul class="sub-menu">
                                            <li><a href="blog-grid.html">No Sidebar</a></li>
                                            <li><a href="blog-grid-left.html">Left Sidebar</a></li>
                                            <li><a href="blog-grid-right.html">Right Sidebar</a></li>
                                        </ul>
                                    </li>
                                    <li class="dropdown"><a href="#">Blog List<button aria-label="dropdown toggler"><i class="fa fa-angle-down"></i></button></a>
                                        <ul class="sub-menu">
                                            <li><a href="blog-list.html">No Sidebar</a></li>
                                            <li><a href="blog-list-left.html">Left Sidebar</a></li>
                                            <li><a href="blog-list-right.html">Right Sidebar</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="blog-carousel.html">Blog Carousel</a></li>
                                    <li class="dropdown"><a href="#">Blog Details<button aria-label="dropdown toggler"><i class="fa fa-angle-down"></i></button></a>
                                        <ul class="sub-menu">
                                            <li><a href="blog-details.html">No Sidebar</a></li>
                                            <li><a href="blog-details-left.html">Left Sidebar</a></li>
                                            <li><a href="blog-details-right.html">Right Sidebar</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="contact.html">Contact</a>
                            </li>
                        </ul>
                    </div>
            <!-- /.mobile-nav__container -->

            <ul class="mobile-nav__contact list-unstyled">
                <li>
                    <i class="fa fa-envelope"></i>
                    <a href="mailto:needhelp@laboix.com">needhelp@laboix.com</a>
                </li>
                <li>
                    <i class="fa fa-phone-alt"></i>
                    <a href="tel:666-888-0000">666 888 0000</a>
                </li>
            </ul><!-- /.mobile-nav__contact -->
            <div class="mobile-nav__social">
                <a href="https://twitter.com"> <i class="fab fa-twitter" aria-hidden="true"></i> <span class="sr-only">Twitter</span> </a>
                <a href="https://facebook.com"> <i class="fab fa-facebook-f" aria-hidden="true"></i> <span class="sr-only">Facebook</span> </a>
                <a href="https://pinterest.com"> <i class="fab fa-pinterest-p" aria-hidden="true"></i> <span class="sr-only">Pinterest</span></a>
                <a href="https://instagram.com"> <i class="fab fa-instagram" aria-hidden="true"></i> <span class="sr-only">Instagram</span></a>
            </div><!-- /.mobile-nav__social -->
        </div>
        <!-- /.mobile-nav__content -->
    </div>
    <!-- /.mobile-nav__wrapper -->
    <div class="search-popup">
        <div class="search-popup__overlay search-toggler"></div>
        <!-- /.search-popup__overlay -->
        <div class="search-popup__content">
            <form role="search" method="get" class="search-popup__form" action="#">
                <input type="text" id="search" placeholder="Search Here...">
                <button type="submit" aria-label="search submit" class="laboix-btn laboix-btn--submite">
                    <span><i class="icon-search"></i></span>
                </button>
            </form>
        </div>
        <!-- /.search-popup__content -->
    </div>
    <!-- /.search-popup -->

    <a href="#" data-target="html" class="scroll-to-target scroll-to-top show">
        <span class="scroll-to-top__text">back top</span>
        <span class="scroll-to-top__wrapper"><span class="scroll-to-top__inner" style="width: 95.1751%;"></span></span>
    </a>


    <!--  ALl JS Plugins =====================
        ====================================== -->
    <!--  jquery-3.7.0 js plugins -->
    <script src="assets/js/jquery-3.7.0.min.js"></script>
    <!--  Bootstrap js plugins -->
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/bootstrap-select.min.js"></script>
    <!--  jarallax js plugins -->
    <script src="assets/js/jarallax.min.js"></script>
    <!--  jquery-ui js plugins -->
    <script src="assets/js/jquery-ui.js"></script>
    <!--  jquery-ajaxchimp js plugins -->
    <script src="assets/js/jquery.ajaxchimp.min.js"></script>
    <!--  jquery-appear js plugins -->
    <script src="assets/js/jquery.appear.min.js"></script>
    <!-- jquery-circle-progress js plugins -->
    <script src="assets/js/jquery.circle-progress.min.js"></script>
    <!--  magnific-popup js plugins -->
    <script src="assets/js/jquery.magnific-popup.min.js"></script>
    <!--  validate js plugins -->
    <script src="assets/js/jquery.validate.min.js"></script>
    <!--  nouislider js plugins -->
    <script src="assets/js/nouislider.min.js"></script>
    <!--  wnumb js plugins -->
    <script src="assets/js/wNumb.min.js"></script>
    <!--  owl-carousel js plugins -->
    <script src="assets/js/owl.carousel.min.js"></script>
    <!--  Bootstrap js plugins -->
    <script src="assets/js/wow.js"></script>
    <!--  wow js plugins -->
    <script src="assets/js/imagesloaded.min.js"></script>
    <!--  isotope js plugins -->
    <script src="assets/js/isotope.js"></script>
    <!--  countdown js plugins -->
    <script src="assets/js/countdown.min.js"></script>
    <!--  Chart.js js plugins -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.1.4/Chart.min.js"></script>
    <!--  jquery-circleType js plugins -->
    <script src="assets/js/jquery.circleType.js"></script>
    <script src="assets/js/jquery.lettering.min.js"></script>
    <!-- template js -->
    <script src="assets/js/laboix.js"></script>


</body></html>