<?php
include('components/head.html');
?>

<div class="page-wrapper">
    <?php 
    include('components/navbar.php'); 
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
                    <!-- /.owl-slide-item-->
                    <!-- /.owl-slide-item-->
                    <!-- /.owl-slide-item-->
                    <!-- /.owl-slide-item-->
                    <!-- /.owl-slide-item-->
                    <!-- /.owl-slide-item-->
                    <!-- /.owl-slide-item-->
                    <!-- /.owl-slide-item-->
                    <!-- /.owl-slide-item-->
                    <!-- /.owl-slide-item-->
                <div class="owl-stage-outer">
                    <div class="owl-stage" style="transform: translate3d(-3185px, 0px, 0px); transition: 0.7s; width: 4900px;">
                        <div class="owl-item cloned" style="width: 190px; margin-right: 55px;">
                            <div class="client-carousel__one__item">
                                <img src="assets/images/logos/Binding-Site.jpg" alt="laboix">
                            </div>
                        </div>
                        <div class="owl-item cloned" style="width: 190px; margin-right: 55px;">
                            <div class="client-carousel__one__item">
                                <img src="assets/images/logos/locmedt.jpg" alt="laboix">
                            </div>
                        </div>
                        <div class="owl-item cloned" style="width: 190px; margin-right: 55px;">
                            <div class="client-carousel__one__item">
                                <img src="assets/images/logos/mika.png" alt="laboix">
                            </div>
                        </div>
                        <div class="owl-item cloned" style="width: 190px; margin-right: 55px;">
                            <div class="client-carousel__one__item">
                                <img src="assets/images/logos/oxus.png" alt="laboix">
                            </div>
                        </div>
                        <div class="owl-item cloned" style="width: 190px; margin-right: 55px;">
                            <div class="client-carousel__one__item">
                                <img src="assets/images/logos/remedi.png" alt="laboix">
                            </div>
                        </div>
                        <div class="owl-item" style="width: 190px; margin-right: 55px;">
                            <div class="client-carousel__one__item">
                                <img src="assets/images/logos/Binding-Site.jpg" alt="laboix">
                            </div>
                        </div>
                        <div class="owl-item" style="width: 190px; margin-right: 55px;">
                            <div class="client-carousel__one__item">
                                <img src="assets/images/logos/locmedt.jpg" alt="laboix">
                            </div>
                        </div>
                        <div class="owl-item" style="width: 190px; margin-right: 55px;">
                            <div class="client-carousel__one__item">
                                <img src="assets/images/logos/mika.png" alt="laboix">
                            </div>
                        </div>
                        <div class="owl-item" style="width: 190px; margin-right: 55px;">
                            <div class="client-carousel__one__item">
                                <img src="assets/images/logos/oxus.png" alt="laboix">
                            </div>
                        </div>
                        <div class="owl-item" style="width: 190px; margin-right: 55px;">
                            <div class="client-carousel__one__item">
                                <img src="assets/images/logos/remedi.png" alt="laboix">
                            </div>
                        </div>
                        <div class="owl-item" style="width: 190px; margin-right: 55px;">
                            <div class="client-carousel__one__item">
                                <img src="assets/images/logos/Binding-Site.jpg" alt="laboix">
                            </div>
                        </div>
                        <div class="owl-item" style="width: 190px; margin-right: 55px;">
                            <div class="client-carousel__one__item">
                                <img src="assets/images/logos/locmedt.jpg" alt="laboix">
                            </div>
                        </div>
                        <div class="owl-item" style="width: 190px; margin-right: 55px;">
                            <div class="client-carousel__one__item">
                                <img src="assets/images/logos/mika.png" alt="laboix">
                            </div>
                        </div>
                        <div class="owl-item active" style="width: 190px; margin-right: 55px;">
                            <div class="client-carousel__one__item">
                                <img src="assets/images/logos/oxus.png" alt="laboix">
                            </div>
                        </div>
                        <div class="owl-item" style="width: 190px; margin-right: 55px;">
                            <div class="client-carousel__one__item">
                                <img src="assets/images/logos/remedi.png" alt="laboix">
                            </div>
                        </div>
                        <div class="owl-item cloned active" style="width: 190px; margin-right: 55px;">
                            <div class="client-carousel__one__item">
                                <img src="assets/images/logos/Binding-Site.jpg" alt="laboix">
                            </div>
                        </div>
                        <div class="owl-item cloned active" style="width: 190px; margin-right: 55px;">
                            <div class="client-carousel__one__item">
                                <img src="assets/images/logos/locmedt.jpg" alt="laboix">
                            </div>
                        </div>
                        <div class="owl-item cloned active" style="width: 190px; margin-right: 55px;">
                            <div class="client-carousel__one__item">
                                <img src="assets/images/logos/mika.png" alt="laboix">
                            </div>
                        </div>
                        <div class="owl-item cloned" style="width: 190px; margin-right: 55px;">
                            <div class="client-carousel__one__item">
                                <img src="assets/images/logos/oxus.png" alt="laboix">
                            </div>
                        </div>
                        <div class="owl-item cloned" style="width: 190px; margin-right: 55px;">
                            <div class="client-carousel__one__item">
                                <img src="assets/images/logos/remedi.png" alt="laboix">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="owl-nav">
                    <button type="button" role="presentation" class="owl-prev" aria-label="carousel button">
                        <span class="fa fa-angle-left"></span>
                    </button>
                    <button type="button" role="presentation" class="owl-next" aria-label="carousel button">
                        <span class="fa fa-angle-right"></span>
                    </button>
                </div>
                <div class="owl-dots disabled"></div>
            </div><!-- /.thm-owl__slider -->
            </div><!-- /.container -->
        </div>
    
    <?php
    include('components/footer.html');
    ?>
</div><!-- /.page-wrapper -->

<?php
include('components/final.html');
?>