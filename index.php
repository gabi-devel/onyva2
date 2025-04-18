<?php
include('components/head.html');
?>

    <?php
        $color_icon_navbar = '#0ebd66';/* 42974f 083875 */
        $color_icon_our_products = '#fff'; /* opacity: 0.2; */
        $size_our_products = "60"; 
    ?>
    <div class="page-wrapper">
        <?php 
        include('components/navbar.html'); 
        ?>

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

        <?php
        include('components/footer.html');
        ?>
    </div><!-- /.page-wrapper -->


<?php
include('components/final.html');
?>