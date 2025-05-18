<?php
include('components/head.html');
?>

    <?php
        $color_icon_navbar = '#0ebd66';/* 42974f 083875 */
        $color_icon_our_products = '#fff'; /* opacity: 0.2; */
        $size_our_products = "60"; 
    ?>
    <div class="page-wrapper">
        <div class="header_aver">
            <?php 
            include('components/navbar.php'); 
            ?>

            
            <!-- <header class="main-header sticky-header sticky-header--normal sticky-header--cloned">
                <div class="container-fluid">
                    <div class="main-header__inner">
                        <div class="main-header__logo logo-laboix">
                            <a href="index.html">
                                <img src="assets/images/logo-dark.png" alt="Laboix HTML" width="133">
                            </a>
                        </div>

                        <nav class="main-header__nav main-menu">
                            <ul class="main-menu__list">

                                <li class="dropdown megamenu current">
                                    <a href="index.html">Home</a>
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
                                                                            </a>
                                                                            <a href="index-one-page.html" class="laboix-btn demo-one__btn">
                                                                                <span>One Page</span>
                                                                            </a>
                                                                        </div>
                                                                    </div>
                                                                    <div class="demo-one__content">
                                                                        <h3 class="demo-one__title">
                                                                            <a href="index.html">Home Page 01</a>
                                                                        </h3>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6 col-lg-3">
                                                                <div class="demo-one__card">
                                                                    <div class="demo-one__image">
                                                                        <img src="assets/images/home-showcase/home-showcase-2.jpg" alt="">
                                                                        <div class="demo-one__btns">
                                                                            <a href="index-2.html" class="laboix-btn demo-one__btn">
                                                                                <span>Multi Page</span>
                                                                            </a>
                                                                            <a href="index-2-one-page.html" class="laboix-btn demo-one__btn">
                                                                                <span>One Page</span>
                                                                            </a>
                                                                        </div>
                                                                    </div>
                                                                    <div class="demo-one__content">
                                                                        <h3 class="demo-one__title">
                                                                            <a href="index-2.html">Home Page 02</a>
                                                                        </h3>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6 col-lg-3">
                                                                <div class="demo-one__card">
                                                                    <div class="demo-one__image">
                                                                        <img src="assets/images/home-showcase/home-showcase-3.jpg" alt="">
                                                                        <div class="demo-one__btns">
                                                                            <a href="index-3.html" class="laboix-btn demo-one__btn">
                                                                                <span>Multi Page</span>
                                                                            </a>
                                                                            <a href="index-3-one-page.html" class="laboix-btn demo-one__btn">
                                                                                <span>One Page</span>
                                                                            </a>
                                                                        </div>
                                                                    </div>
                                                                    <div class="demo-one__content">
                                                                        <h3 class="demo-one__title">
                                                                            <a href="index-3.html">Home Page 03</a>
                                                                        </h3>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6 col-lg-3">
                                                                <div class="demo-one__card">
                                                                    <div class="demo-one__image">
                                                                        <img src="assets/images/home-showcase/home-showcase-4.jpg" alt="">
                                                                        <div class="demo-one__btns">
                                                                            <a href="index-dark.html" class="laboix-btn demo-one__btn">
                                                                                <span>View Page</span>
                                                                            </a>
                                                                        </div>
                                                                    </div>
                                                                    <div class="demo-one__content">
                                                                        <h3 class="demo-one__title">
                                                                            <a href="index-dark.html">Home Dark</a>
                                                                        </h3>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                    </div>
                                                </div>
                                            </section>
                                        </li>
                                    </ul>
                                </li>



                                <li>
                                    <a href="about.html">About</a>
                                </li>

                                <li class="dropdown">
                                    <a href="#">Service</a>
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
                                    <a href="#">Pages</a>
                                    <ul class="sub-menu">
                                        <li><a href="team.html">Team</a></li>
                                        <li><a href="team-carousel.html">Team Carousel</a></li>
                                        <li><a href="team-details.html">Team Details</a></li>
                                        <li><a href="packages.html">Packages</a></li>
                                        <li><a href="packages-carousel.html">Packages Carousel</a></li>
                                        <li class="dropdown"><a href="gallery.html">Gallery</a>
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
                                    <a href="#">Shop</a>
                                    <ul class="sub-menu">
                                        <li class="dropdown"><a href="#">Products</a>
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
                                    <a href="#">Blog</a>
                                    <ul class="sub-menu">
                                        <li class="dropdown"><a href="#">Blog</a>
                                            <ul class="sub-menu">
                                                <li><a href="blog-grid.html">No Sidebar</a></li>
                                                <li><a href="blog-grid-left.html">Left Sidebar</a></li>
                                                <li><a href="blog-grid-right.html">Right Sidebar</a></li>
                                            </ul>
                                        </li>
                                        <li class="dropdown"><a href="#">Blog List</a>
                                            <ul class="sub-menu">
                                                <li><a href="blog-list.html">No Sidebar</a></li>
                                                <li><a href="blog-list-left.html">Left Sidebar</a></li>
                                                <li><a href="blog-list-right.html">Right Sidebar</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="blog-carousel.html">Blog Carousel</a></li>
                                        <li class="dropdown"><a href="#">Blog Details</a>
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
                        </nav>
                        <div class="main-header__right">
                            <div class="main-header__link">
                                <a href="contact.html" class="laboix-btn main-header__btn">Appoinment</a>
                            </div>
                            <div class="main-header__right__info">
                                <a href="#" class="search-toggler main-header__right__info__item"> <i class="icon-search" aria-hidden="true"></i> <span class="sr-only">Search</span> </a>
                                <a href="cart.html" class="main-header__right__info__item"> <i class="icon-trolley" aria-hidden="true"></i> <span class="sr-only">Search</span> </a>
                            </div>

                            <div class="mobile-nav__btn mobile-nav__toggler">
                                <span></span><span></span><span></span>
                            </div>

                            <a href="tel:+92-3800-8060" class="main-header__right__call">
                                <div class="main-header__right__icon">
                                    <?php /* include('assets/iconos/telephone-fill.php'); */ ?>
                                </div>
                                <div class="main-header__right__content">
                                    <span class="main-header__right__content__text">Call to Anytime</span>
                                    <h6 class="main-header__right__content__number">+92 3800 8060</h6>
                                </div>
                            </a>

                        </div>
                    </div>
                </div>
            </header> -->
        </div>
        



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

        <!-- About Two section start -->
        <!-- <section class="about-two">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="about-two__left wow fadeInLeft" data-wow-duration="700ms" data-wow-delay="500ms">
                            <div class="about-two__thumb">
                                <div class="about-two__thumb__item">
                                    <img src="assets/images/about/about-2-1.png" alt="laboix">
                                </div>
                                <div class="about-two__thumb__item about-two__thumb__item--two">
                                    <img src="assets/images/about/about-s-2-1.png" alt="laboix">
                                    <div class="about-two__items">
                                        <div class="about-two__box">
                                            <div class="about-two__box__icon">
                                                <i class="icon-chatting"></i>
                                            </div>
                                            <div class="about-two__box__content">
                                                <span class="about-two__box__subtitle">Call to anytime</span>
                                                <a href="tel:92-3080-808" class="about-two__box__text">+92 3080 808</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="about-two__right">
                            <div class="about-two__top">
                                <div class="sec-title text-start wow fadeInUp" data-wow-duration='1500ms'>
                                    <h6 class="sec-title__tagline"><img src="assets/images/shapes/sec-title-s-1.png" alt="About Us" class="sec-title__img">About Us</h6>
                                    <h3 class="sec-title__title">Diverse technologies with global impact</h3>
                                </div>
                                <p class="about-two__top__text">There are many variations of passages of Lorem Ipsum avalable, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable.</p>
                            </div>

                            <div class="about-two__feature wow fadeInUp" data-wow-duration="700ms" data-wow-delay="500ms">
                                <div class="about-two__feature__item">
                                    <div class="about-two__feature__icon">
                                        <i class="icon-blood-test-1"></i>
                                    </div>
                                    <h4 class="about-two__feature__title"><a href="services.html">Free home sampling</a></h4>
                                    <p class="about-two__feature__text">There are in many passages of Lorem Ipsum available, but the majority.</p>
                                </div>
                                <div class="about-two__feature__item">
                                    <div class="about-two__feature__icon">
                                        <i class="icon-accuracy-1"></i>
                                    </div>
                                    <h4 class="about-two__feature__title"><a href="services.html">Accuracy in finding</a></h4>
                                    <p class="about-two__feature__text">There are in many passages of Lorem Ipsum available, but the majority.</p>
                                </div>
                            </div>
                            <ul class="about-two__list list-unstyled wow fadeInUp" data-wow-duration="700ms" data-wow-delay="500ms">
                                <li class="about-two__list__item"><i class="fas fa-check-circle"></i> Many variations of passages of lorem ipsum </li>
                                <li class="about-two__list__item"><i class="fas fa-check-circle"></i> Many variations of passages of lorem</li>
                                <li class="about-two__list__item"><i class="fas fa-check-circle"></i> Expert many variations teacher </li>
                            </ul>
                            <div class="about-two__link">
                                <a href="about.html" class="about-two__link__btn laboix-btn">Discover More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="about-two__shape">
                <img src="assets/images/shapes/about-shape-2-1.png" alt>
            </div>
            <div class="about-two__shape--two">
                <img src="assets/images/shapes/about-shape-1-1.png" alt>
            </div>
        </section> -->
        <!-- About Two section End -->

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
                    <!-- <div class="col-md-6 col-lg-4">
                        <div class="service-card wow fadeInUp" data-wow-duration='1500ms' data-wow-delay='600ms'>
                            <div class="service-card__inner">
                                <div class="service-card__top">
                                    <h3 class="service-card__title"><a href="#">Specialized <br> genetic tests</a></h3>
                                    <div class="service-card__icon">
                                        <i class="icon-dna-1"></i>
                                    </div>
                                </div>
                                <div class="service-card__thumb">
                                    <div class="service-card__thumb__item">
                                        <img src="assets/images/about/otrosprodmed11f.jpeg" alt="Specialized <br> genetic tests">
                                    </div>
                                    <div class="service-card__thumb__shape">
                                        <img src="assets/images/shapes/shape-service.png" alt>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> -->
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

        <!-- Why choose us section Start -->
        <!-- <section class="choose-us-one">
            <div class="choose-us-one__bg jarallax" data-jarallax data-speed="0.3" data-imgPosition="50% -100%" style="background-image: url(assets/images/shapes/why-choose-us.png);"></div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="choose-us-one__left">
                            <div class="choose-us-one__top">
                                <div class="sec-title sec-title--two text-start wow fadeInUp" data-wow-duration='1500ms'>
                                    <h6 class="sec-title__tagline"><img src="assets/images/shapes/sec-title-s-2.png" alt="Why choose us" class="sec-title__img">Why choose us</h6>
                                    <h3 class="sec-title__title">Why you should choose our laboix laboratory</h3>
                                </div>
                                <p class="choose-us-one__top__text">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form,vable.</p>
                            </div>
                            <div class="choose-us-one__feature">
                                <div class="choose-us-one__feature__item">
                                    <div class="choose-us-one__feature__thumb">
                                        <img src="assets/images/resources/why-choose-item-2-1.jpg" alt="laboix">
                                    </div>
                                    <h4 class="choose-us-one__feature__title"><a href="services.html">World class diagnostics</a></h4>
                                    <p class="choose-us-one__feature__text">There are many variations of passages of Lorem Ipsum Ipsum available,</p>
                                </div>
                                <div class="choose-us-one__feature__item">
                                    <div class="choose-us-one__feature__thumb">
                                        <img src="assets/images/resources/why-choose-item-2-2.jpg" alt="laboix">
                                    </div>
                                    <h4 class="choose-us-one__feature__title"> <a href="services.html">Advanced microscopy</a></h4>
                                    <p class="choose-us-one__feature__text">There are many variations of passages of Lorem Ipsum Ipsum available,</p>
                                </div>
                            </div>
                            <div class="choose-us-one__link">
                                <a href="about.html" class="choose-us-one__link__btn laboix-btn laboix-btn--base">Discover More</a>
                                <div class="choose-us-one__funfact count-box">
                                    <h2 class="choose-us-one__funfact__count">
                                        <span class="count-text" data-stop="30" data-speed="1500"></span>
                                        <span>K</span>
                                    </h2>
                                    <p class="choose-us-one__funfact__text">Satisfied <br> customer</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="choose-us-one__right">
                            <div class="choose-us-one__thumb">
                                <img src="assets/images/resources/why-choose-1-1.jpg" alt="laboix">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section> -->
        <!-- Why choose us section End -->

        <!-- Why choose us section Start -->
        <!-- <section class="funfact-one">
            <div class="container">
                <div class="funfact-one__inner wow fadeInUp" data-wow-duration="700ms" data-wow-delay="500ms">
                    <div class="row gutter-x-18 gutter-y-30">
                        <div class="col-lg-3 col-md-6">
                            <div class="funfact-one__item count-box">
                                <div class="funfact-one__icon">
                                    <i class="icon-clients"></i>
                                </div>
                                <h3 class="funfact-one__count">
                                    <span class="count-text" data-stop="120" data-speed="1500"></span>
                                    <span>K</span>
                                </h3>
                                <p class="funfact-one__text">Satisfied <br> clients</p>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <div class="funfact-one__item count-box">
                                <div class="funfact-one__icon">
                                    <i class="icon-case"></i>
                                </div>
                                <h3 class="funfact-one__count">
                                    <span class="count-text" data-stop="360" data-speed="1500"></span>
                                    <span>+</span>
                                </h3>
                                <p class="funfact-one__text">Completed<br>cases</p>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <div class="funfact-one__item count-box">
                                <div class="funfact-one__icon">
                                    <i class="icon-test-tubes-1"></i>
                                </div>
                                <h3 class="funfact-one__count">
                                    <span class="count-text" data-stop="560" data-speed="1500"></span>
                                    <span>+</span>
                                </h3>
                                <p class="funfact-one__text">Our<br>equipment</p>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <div class="funfact-one__item count-box">
                                <div class="funfact-one__icon">
                                    <i class="icon-trophy-1"></i>
                                </div>
                                <h3 class="funfact-one__count">
                                    <span class="count-text" data-stop="100" data-speed="1500"></span>
                                    <span>+</span>
                                </h3>
                                <p class="funfact-one__text">Awards<br>winning</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section> -->
        <!-- Why choose us section End -->

        <!-- Our work Steps section Start -->
        <!-- <section class="our-work">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="sec-title text-center wow fadeInUp" data-wow-duration='700ms'>
                            <h6 class="sec-title__tagline"><img src="assets/images/shapes/sec-title-s-1.png" alt="Our work Steps" class="sec-title__img">Our work Steps</h6>
                            <h3 class="sec-title__title">Tests in the lab can be done <br> in four simple steps</h3>
                        </div>
                    </div>
                </div>
                <div class="row gutter-y-30">
                    <div class="col-lg-3 col-md-6">
                        <div class="our-work__item">
                            <div class="our-work__item__step"></div>
                            <div class="our-work__item__content">
                                <h4 class="our-work__item__title"><a href="services.html">Client describes <br> project</a></h4>
                                <p class="our-work__item__text">There are many variations of passages of Lorem Ipsum available, but the </p>
                                <div class="our-work__item__shape">
                                    <img src="assets/images/shapes/work-teps.png" alt>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="our-work__item">
                            <div class="our-work__item__step"></div>
                            <div class="our-work__item__content">
                                <h4 class="our-work__item__title"><a href="services.html">Lab generates <br>proposal</a></h4>
                                <p class="our-work__item__text">There are many variations of passages of Lorem Ipsum available, but the </p>
                                <div class="our-work__item__shape">
                                    <img src="assets/images/shapes/work-teps.png" alt>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="our-work__item">
                            <div class="our-work__item__step"></div>
                            <div class="our-work__item__content">
                                <h4 class="our-work__item__title"><a href="services.html">Testing <br> begins</a></h4>
                                <p class="our-work__item__text">There are many variations of passages of Lorem Ipsum available, but the </p>
                                <div class="our-work__item__shape">
                                    <img src="assets/images/shapes/work-teps.png" alt>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="our-work__item our-work__item--two">
                            <div class="our-work__item__step"></div>
                            <div class="our-work__item__content">
                                <h4 class="our-work__item__title"><a href="services.html">Reports <br>delivered</a></h4>
                                <p class="our-work__item__text">There are many variations of passages of Lorem Ipsum available, but the </p>
                                <div class="our-work__item__shape">
                                    <img src="assets/images/shapes/work-teps.png" alt>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section> -->
        <!-- Our work Steps section end -->

        <!-- Our work Steps section Start -->
        <!-- <section class="testimonials-two">
            <div class="testimonials-two__bg jarallax" data-jarallax data-speed="0.3" data-imgPosition="50% -100%" style="background-image: url(assets/images/backgrounds/testimonial-bg-1.jpg);"></div>
            <div class="container">
                <div class="testimonials-two__carousel laboix-owl__carousel laboix-owl__carousel--with-shadow owl-carousel" data-owl-options='{
			"items": 1,
			"margin": 0,
			"loop": false,
			"smartSpeed": 700,
			"nav": true,
			"URLhashListener":true,
			"navText": ["<span class=\"icon-left-arrow\"></span>","<span class=\"icon-arrow\"></span>"],
			"dots": false,
			"autoplay": false
			}'>
                    <div class="testimonials-two__item" data-hash="item1">
                        <div class="row align-items-center">
                            <div class="col-lg-4">
                                <div class="testimonials-two__thumb">
                                    <img src="assets/images/resources/testi-1-1.png" alt="laboix image">
                                    <div class="testimonials-two__shape">
                                        <img src="assets/images/shapes/test-image-bg.png" alt="laboix image">
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-8">
                                <div class="testimonials-two__content">
                                    <div class="testimonials-two__star">
                                        <span class="fa fa-star"></span>
                                        <span class="fa fa-star"></span>
                                        <span class="fa fa-star"></span>
                                        <span class="fa fa-star"></span>
                                        <span class="fa fa-star"></span>
                                    </div>
                                    <p class="testimonials-two__text">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words</p>
                                    <div class="testimonials-two__author">
                                        <div class="testimonials-two__author__text">
                                            <h5 class="testimonials-two__author__title">Theresa Webb</h5>
                                            <span class="testimonials-two__author__deg">Senior Doctor</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="testimonials-two__item" data-hash="item2">
                        <div class="row align-items-center">
                            <div class="col-lg-4">
                                <div class="testimonials-two__thumb">
                                    <img src="assets/images/resources/testi-1-1.png" alt="laboix image">
                                    <div class="testimonials-two__shape">
                                        <img src="assets/images/shapes/test-image-bg.png" alt="laboix image">
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-8">
                                <div class="testimonials-two__content">
                                    <div class="testimonials-two__star">
                                        <span class="fa fa-star"></span>
                                        <span class="fa fa-star"></span>
                                        <span class="fa fa-star"></span>
                                        <span class="fa fa-star"></span>
                                        <span class="fa fa-star"></span>
                                    </div>
                                    <p class="testimonials-two__text">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words</p>
                                    <div class="testimonials-two__author">
                                        <div class="testimonials-two__author__text">
                                            <h5 class="testimonials-two__author__title">Theresa Webb</h5>
                                            <span class="testimonials-two__author__deg">Senior Doctor</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="testimonials-two__item" data-hash="item3">
                        <div class="row align-items-center">
                            <div class="col-lg-4">
                                <div class="testimonials-two__thumb">
                                    <img src="assets/images/resources/testi-1-1.png" alt="laboix image">
                                    <div class="testimonials-two__shape">
                                        <img src="assets/images/shapes/test-image-bg.png" alt="laboix image">
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-8">
                                <div class="testimonials-two__content">
                                    <div class="testimonials-two__star">
                                        <span class="fa fa-star"></span>
                                        <span class="fa fa-star"></span>
                                        <span class="fa fa-star"></span>
                                        <span class="fa fa-star"></span>
                                        <span class="fa fa-star"></span>
                                    </div>
                                    <p class="testimonials-two__text">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words</p>
                                    <div class="testimonials-two__author">
                                        <div class="testimonials-two__author__text">
                                            <h5 class="testimonials-two__author__title">Theresa Webb</h5>
                                            <span class="testimonials-two__author__deg">Senior Doctor</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-thumb__two">
                    <div class="testimonials-two__carousel-thumb laboix-owl__carousel laboix-owl__carousel--with-shadow owl-carousel" data-owl-options='{
					"items": 3,
					"smartSpeed": 700,
					"loop":true,
					"autoplay": false,
					"URLhashListener":true,
					"center": true,
					"dots":false,
					"navText": ["<span class=\"icon-arrow-left\"></span>","<span class=\"icon-arrow\"></span>"],
					"responsive": {
						"0": {
							"items": 3
						},
						"500": {
							"items": 3
						}
					}
				}'>
                        <a href="#item1" class="item__thumb" data-hash="item1">
                            <div class="testimonials-two__meta-thumb">
                                <img src="assets/images/resources/testi-thumb-1-1.png" alt="laboix thumb">
                            </div>
                        </a>
                        <a href="#item2" class="item__thumb" data-hash="item2">
                            <div class="testimonials-two__meta-thumb">
                                <img src="assets/images/resources/testi-thumb-1-2.png" alt="laboix thumb">
                            </div>
                        </a>
                        <a href="#item3" class="item__thumb" data-hash="item3">
                            <div class="testimonials-two__meta-thumb">
                                <img src="assets/images/resources/testi-thumb-1-3.png" alt="laboix thumb">
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </section> -->
        <!-- Our work Steps section Start -->

        <!-- package-page section Start -->
        <!-- <section class="package-page package-page--one">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="sec-title text-center wow fadeInUp" data-wow-duration='700ms'>
                            <h6 class="sec-title__tagline"><img src="assets/images/shapes/sec-title-s-1.png" alt="Pricing Plane" class="sec-title__img">Pricing Plane</h6>
                            <h3 class="sec-title__title">Select a plan according to <br> your requirements</h3>
                        </div>
                    </div>
                </div>
                <div class="row gutter-y-30">
                    <div class="col-md-6 col-lg-4">
                        <div class="package-card price wow fadeInUp" data-wow-duration='1500ms' data-wow-delay='400ms'>
                            <div class="package-card__head">

                                <div class="package-card__head__box">
                                    <div class="package-card__head__bg" style="background-image: url(assets/images/backgrounds/price-bg-1-1.jpg);"></div>
                                    <h2 class="package-card__head__title">Basic plan</h2>
                                </div>
                                <div class="package-card__head__content">
                                    <p class="package-card__head__price">$30 <span class="package-card__head__month">/ Per month</span></p>
                                </div>
                            </div>
                            <div class="package-card__content">
                                <ul class="package-card__content__list list-unstyled">
                                    <li class="package-card__content__list__item"> <i class="icon-mark2"></i>Complete Blood Count</li>
                                    <li class="package-card__content__list__item"> <i class="icon-mark2"></i>Preventive Package</li>
                                    <li class="package-card__content__list__item"> <i class="icon-mark2"></i>Liver Funtion Blood Test</li>
                                    <li class="package-card__content__list__item"> <i class="icon-mark2"></i>Free Panoramic x-ray</li>
                                </ul>
                                <div class="package-card__content__link">
                                    <a href="checkout.html" class="package-card__content__link__btn laboix-btn">Select Package</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <div class="package-card price wow fadeInUp" data-wow-duration='1500ms' data-wow-delay='600ms'>
                            <div class="package-card__head">

                                <p class="package-card__head__top">Recommended</p>

                                <div class="package-card__head__box">
                                    <div class="package-card__head__bg" style="background-image: url(assets/images/backgrounds/price-bg-1-2.jpg);"></div>
                                    <h2 class="package-card__head__title">Silver plan</h2>
                                </div>
                                <div class="package-card__head__content">
                                    <p class="package-card__head__price">$60 <span class="package-card__head__month">/ Per month</span></p>
                                </div>
                            </div>
                            <div class="package-card__content">
                                <ul class="package-card__content__list list-unstyled">
                                    <li class="package-card__content__list__item"> <i class="icon-mark2"></i>Complete Blood Count</li>
                                    <li class="package-card__content__list__item"> <i class="icon-mark2"></i>Preventive Package</li>
                                    <li class="package-card__content__list__item"> <i class="icon-mark2"></i>Liver Funtion Blood Test</li>
                                    <li class="package-card__content__list__item"> <i class="icon-mark2"></i>Free Panoramic x-ray</li>
                                </ul>
                                <div class="package-card__content__link">
                                    <a href="checkout.html" class="package-card__content__link__btn laboix-btn">Select Package</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <div class="package-card price wow fadeInUp" data-wow-duration='1500ms' data-wow-delay='800ms'>
                            <div class="package-card__head">

                                <div class="package-card__head__box">
                                    <div class="package-card__head__bg" style="background-image: url(assets/images/backgrounds/price-bg-1-3.jpg);"></div>
                                    <h2 class="package-card__head__title">Premium plan</h2>
                                </div>
                                <div class="package-card__head__content">
                                    <p class="package-card__head__price">$90 <span class="package-card__head__month">/ Per month</span></p>
                                </div>
                            </div>
                            <div class="package-card__content">
                                <ul class="package-card__content__list list-unstyled">
                                    <li class="package-card__content__list__item"> <i class="icon-mark2"></i>Complete Blood Count</li>
                                    <li class="package-card__content__list__item"> <i class="icon-mark2"></i>Preventive Package</li>
                                    <li class="package-card__content__list__item"> <i class="icon-mark2"></i>Liver Funtion Blood Test</li>
                                    <li class="package-card__content__list__item"> <i class="icon-mark2"></i>Free Panoramic x-ray</li>
                                </ul>
                                <div class="package-card__content__link">
                                    <a href="checkout.html" class="package-card__content__link__btn laboix-btn">Select Package</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section> -->
        <!-- package-page section End -->

        <!-- Case studies section Start -->
        <!-- <section class="case-studies">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="sec-title text-center wow fadeInUp" data-wow-duration='700ms'>
                            <h6 class="sec-title__tagline"><img src="assets/images/shapes/sec-title-s-1.png" alt="Case studies" class="sec-title__img">Case studies</h6>
                            <h3 class="sec-title__title">Our latest case studies</h3>
                        </div>
                    </div>
                </div>
                <ul class="case-studies__list list-unstyled">
                    <li class="case-studies__list__item wow fadeInUp" data-wow-duration="700ms" data-wow-delay="500ms">
                        <div class="case-studies__list__item__content">
                            <div class="case-studies__list__item__thumb">
                                <img src="assets/images/resources/case-stady-1-1.png" alt="laboix">
                            </div>
                            <div class="case-studies__list__item__hover">
                                <h4 class="case-studies__list__item__title"><a href="about.html">Diagnostic imagine</a></h4>
                                <p class="case-studies__list__item__text">Orthopedics, Pediatric</p>
                            </div>
                        </div>
                    </li>
                    <li class="case-studies__list__item wow fadeInUp" data-wow-duration="700ms" data-wow-delay="600ms">
                        <div class="case-studies__list__item__content">
                            <div class="case-studies__list__item__thumb">
                                <img src="assets/images/resources/case-stady-1-2.png" alt="laboix">
                            </div>
                            <div class="case-studies__list__item__hover">
                                <h4 class="case-studies__list__item__title"><a href="about.html">Diagnostic imagine</a></h4>
                                <p class="case-studies__list__item__text">Orthopedics, Pediatric</p>
                            </div>
                        </div>
                    </li>
                    <li class="case-studies__list__item wow fadeInUp" data-wow-duration="700ms" data-wow-delay="700ms">
                        <div class="case-studies__list__item__content">
                            <div class="case-studies__list__item__thumb">
                                <img src="assets/images/resources/case-stady-1-3.png" alt="laboix">
                            </div>
                            <div class="case-studies__list__item__hover">
                                <h4 class="case-studies__list__item__title"><a href="about.html">Diagnostic imagine</a></h4>
                                <p class="case-studies__list__item__text">Orthopedics, Pediatric</p>
                            </div>
                        </div>
                    </li>
                    <li class="case-studies__list__item wow fadeInUp" data-wow-duration="700ms" data-wow-delay="800ms">
                        <div class="case-studies__list__item__content">
                            <div class="case-studies__list__item__thumb">
                                <img src="assets/images/resources/case-stady-1-4.png" alt="laboix">
                            </div>
                            <div class="case-studies__list__item__hover">
                                <h4 class="case-studies__list__item__title"><a href="about.html">Diagnostic imagine</a></h4>
                                <p class="case-studies__list__item__text">Orthopedics, Pediatric</p>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </section> -->
        <!-- Case studies section End -->

        <!-- Future scope -->
        <!-- <section class="video-cta">
            <div class="video-cta__bg" style="background-image: url(assets/images/backgrounds/video-bg.png);"></div>
            <div class="container">
                <div class="video-cta__inner">
                    <div class="video-cta__video">
                        <a href="https://www.youtube.com/watch?v=h9MbznbxlLc" class="video-cta__video__popup video-popup">
                            <i class="icon-play"></i>
                        </a>
                    </div>
                    <div class="video-cta__content">
                        <h3 class="video-cta__title">Future scope in medical laboratory</h3>
                        <p class="video-cta__text">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration </p>
                        <div class="video-cta__link">
                            <a href="contact.html" class="video-cta__link__btn laboix-btn">Get in Touch</a>
                        </div>
                    </div>
                </div>
            </div>
        </section> -->

        <!-- Team section Start -->
        <!-- <section class="team-one team-one--home">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="sec-title text-center wow fadeInUp" data-wow-duration='1500ms'>
                            <h6 class="sec-title__tagline"><img src="assets/images/shapes/sec-title-s-1.png" alt="Our Specialist" class="sec-title__img">Our Specialist</h6>
                            <h3 class="sec-title__title">Meet Our experience <br> science specialist</h3>
                        </div>
                    </div>
                </div>
                <div class="row gutter-y-30">
                    <div class="col-md-6 col-lg-4 col-xl-3">
                        <div class="team-card wow fadeInUp" data-wow-duration='1500ms' data-wow-delay='400ms'>
                            <div class="team-card__inner">
                                <div class="team-card__image">
                                    <img src="assets/images/team/team-1-1.jpg" alt="Mike Hardson">
                                </div>
                                <div class="team-card__content">
                                    <div class="team-card__content__inner">
                                        <div class="team-card__content__item">
                                            <h3 class="team-card__content__title"><a href="team-details.html">Mike Hardson</a></h3>
                                            <h6 class="team-card__content__designation">Doctor</h6>
                                        </div>
                                        <div class="team-card__content__hover">
                                            <div class="team-card__content__hover__icon">
                                                <i class="icon-shear"></i>
                                            </div>
                                            <div class="team-card__content__hover__social">
                                                <a href="https://twitter.com"> <i class="fab fa-twitter" aria-hidden="true"></i> <span class="sr-only">Twitter</span> </a>
                                                <a href="https://facebook.com"> <i class="fab fa-facebook-f" aria-hidden="true"></i> <span class="sr-only">Facebook</span> </a>
                                                <a href="https://pinterest.com"> <i class="fab fa-pinterest-p" aria-hidden="true"></i> <span class="sr-only">Pinterest</span></a>
                                                <a href="https://instagram.com"> <i class="fab fa-instagram" aria-hidden="true"></i> <span class="sr-only">Instagram</span></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 col-xl-3">
                        <div class="team-card wow fadeInUp" data-wow-duration='1500ms' data-wow-delay='500ms'>
                            <div class="team-card__inner">
                                <div class="team-card__image">
                                    <img src="assets/images/team/team-1-2.jpg" alt="Aleesha brown">
                                </div>
                                <div class="team-card__content">
                                    <div class="team-card__content__inner">
                                        <div class="team-card__content__item">
                                            <h3 class="team-card__content__title"><a href="team-details.html">Aleesha brown</a></h3>
                                            <h6 class="team-card__content__designation">Doctor</h6>
                                        </div>
                                        <div class="team-card__content__hover">
                                            <div class="team-card__content__hover__icon">
                                                <i class="icon-shear"></i>
                                            </div>
                                            <div class="team-card__content__hover__social">
                                                <a href="https://twitter.com"> <i class="fab fa-twitter" aria-hidden="true"></i> <span class="sr-only">Twitter</span> </a>
                                                <a href="https://facebook.com"> <i class="fab fa-facebook-f" aria-hidden="true"></i> <span class="sr-only">Facebook</span> </a>
                                                <a href="https://pinterest.com"> <i class="fab fa-pinterest-p" aria-hidden="true"></i> <span class="sr-only">Pinterest</span></a>
                                                <a href="https://instagram.com"> <i class="fab fa-instagram" aria-hidden="true"></i> <span class="sr-only">Instagram</span></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 col-xl-3">
                        <div class="team-card wow fadeInUp" data-wow-duration='1500ms' data-wow-delay='600ms'>
                            <div class="team-card__inner">
                                <div class="team-card__image">
                                    <img src="assets/images/team/team-1-3.jpg" alt="David cooper">
                                </div>
                                <div class="team-card__content">
                                    <div class="team-card__content__inner">
                                        <div class="team-card__content__item">
                                            <h3 class="team-card__content__title"><a href="team-details.html">David cooper</a></h3>
                                            <h6 class="team-card__content__designation">Doctor</h6>
                                        </div>
                                        <div class="team-card__content__hover">
                                            <div class="team-card__content__hover__icon">
                                                <i class="icon-shear"></i>
                                            </div>
                                            <div class="team-card__content__hover__social">
                                                <a href="https://twitter.com"> <i class="fab fa-twitter" aria-hidden="true"></i> <span class="sr-only">Twitter</span> </a>
                                                <a href="https://facebook.com"> <i class="fab fa-facebook-f" aria-hidden="true"></i> <span class="sr-only">Facebook</span> </a>
                                                <a href="https://pinterest.com"> <i class="fab fa-pinterest-p" aria-hidden="true"></i> <span class="sr-only">Pinterest</span></a>
                                                <a href="https://instagram.com"> <i class="fab fa-instagram" aria-hidden="true"></i> <span class="sr-only">Instagram</span></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 col-xl-3">
                        <div class="team-card wow fadeInUp" data-wow-duration='1500ms' data-wow-delay='700ms'>
                            <div class="team-card__inner">
                                <div class="team-card__image">
                                    <img src="assets/images/team/team-1-4.jpg" alt="Sarah albert">
                                </div>
                                <div class="team-card__content">
                                    <div class="team-card__content__inner">
                                        <div class="team-card__content__item">
                                            <h3 class="team-card__content__title"><a href="team-details.html">Sarah albert</a></h3>
                                            <h6 class="team-card__content__designation">Doctor</h6>
                                        </div>
                                        <div class="team-card__content__hover">
                                            <div class="team-card__content__hover__icon">
                                                <i class="icon-shear"></i>
                                            </div>
                                            <div class="team-card__content__hover__social">
                                                <a href="https://twitter.com"> <i class="fab fa-twitter" aria-hidden="true"></i> <span class="sr-only">Twitter</span> </a>
                                                <a href="https://facebook.com"> <i class="fab fa-facebook-f" aria-hidden="true"></i> <span class="sr-only">Facebook</span> </a>
                                                <a href="https://pinterest.com"> <i class="fab fa-pinterest-p" aria-hidden="true"></i> <span class="sr-only">Pinterest</span></a>
                                                <a href="https://instagram.com"> <i class="fab fa-instagram" aria-hidden="true"></i> <span class="sr-only">Instagram</span></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section> -->

        <!-- Latest news -->
        <!-- <section class="blog-one">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="sec-title text-center wow fadeInUp" data-wow-duration='1500ms'>
                            <h6 class="sec-title__tagline"><img src="assets/images/shapes/sec-title-s-1.png" alt="Article" class="sec-title__img">Article</h6>
                            <h3 class="sec-title__title">Latest news & articles from <br> the blog posts</h3>
                        </div>
                    </div>
                </div>
                <div class="row gutter-y-30">
                    <div class="col-md-6 col-lg-4">
                        <div class="blog-card wow fadeInUp" data-wow-duration='1500ms' data-wow-delay='400ms'>
                            <div class="blog-card__image">
                                <div class="blog-card__image__item">
                                    <img src="assets/images/blog/blog-1-1.png" alt="Lab safety is everyone’s responsivity">
                                    <a href="blog-details-right.html" class="blog-card__image__link"></a>
                                </div>
                                <div class="blog-card__date"> <span class="blog-card__date__day">02</span>NOV</div>
                            </div>
                            <div class="blog-card__content">
                                <div class="blog-card__author">
                                    <a href="blog-details.html" class="blog-card__author__item">
                                        <div class="blog-card__author__thumb">
                                            <img src="assets/images/blog/blog-author-1-1.jpg" alt="laboix author">
                                        </div>
                                        <div class="blog-card__author__content">
                                            <h6 class="blog-card__author__name">Darrell Steward</h6>
                                            <span cl
                            <div class="blog-c
                    </div>
                </div>
            </div>
        </section> -->

        <style>
            .main-footer {
                background-color: transparent;/* #7f7f7f94 */
                overflow: hidden;
            }
            .main-footer:after {
                background: url('assets/images/background/footer_background.png');
                /* filter: hue-rotate(3deg); */
                content: "";
                opacity: 0.2;
                top: 0;
                left: 0;
                bottom: 0;
                right: 0;
                position: absolute;
                z-index: -1;
            }
        </style>
        <footer class="main-footer main-footer--one">
            <div class="main-footer__inner">
                <div class="container">
                    <div class="row contenido_footer">
                    

                        <div class="col-md-6 col-xl-3">
                            <div class="footer-widget footer-widget--link"><br>

                                <ul class="list-unstyled footer-widget__links">
                                    <li class="footer-widget__links__item"><a href="#">Inicio</a></li>
                                    <li class="footer-widget__links__item"><a href="#">Institucional</a></li>
                                    <li class="footer-widget__links__item"><a href="#">Capacitacion</a></li>
                                    <li class="footer-widget__links__item"><a href="#">Contacto</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-6 col-xl-3">
                            <div class="footer-widget footer-widget--about">
                                <h5 class="text-light">Contacto</h5><br>
                                <ul class="list-unstyled footer-widget__info">
                                    <li class=""> <span class="footer-widget__info__item__text">Tel: +54 11 5235-3970</span></li>
                                    <li class=""> <!-- <i class="icon-telephone-call-1"></i> -->
                                    <?php /* include('assets/iconos/telephone-fill.php'); */ ?>
                                    <span class="footer-widget__info__item__text">Whatsapp: +54 11 51466977</span></li><!-- <a href="tel:+8801775-338747"> -->
                                    <li class=""><!-- footer-widget__info__item --> <i class="icon-email"></i> <span class="footer-widget__info__item__text">ventas@onyva.com.ar</span></li><!-- <a href="mailto:michael.mitc@example.com"> -->
                                </ul>
                                <!-- <div class="footer-widget__social">
                                    <a href="https://facebook.com"> <span class="sr-only">Facebook</span> </a>
                                    <a href="https://twitter.com"> <i class="fab fa-twitter" aria-hidden="true"></i> <span class="sr-only">Twitter</span> </a>
                                    <a href="https://pinterest.com"><span class="sr-only">Pinterest</span></a>
                                    <a href="https://instagram.com"> <span class="sr-only">Instagram</span></a>
                                </div> -->
                            </div>
                        </div>



                        <div class="col-md-6 col-xl-3">
                            <div class="footer-widget footer-widget--info">
                                <a href="inedx.html" class="footer-widget__logo">
                                    <img src="assets/images/logo-onyva-white.png" width="130" alt="footer logo">
                                </a>
                                <!-- <h4 class="">Sede</h4><br> -->
                                <p class="footer-widget__text">
                                Dr. Adolfo Dickman 990 (C1416EHB) CABA Buenos Aires, Argentina  </p>
                            </div>
                        </div>
                        <div class="col-md-6 col-xl-3">
                            <div class="footer-widget footer-widget--time">
                                <!-- <h4 class="footer-widget__title">Horario de atención</h4> -->
                                <ul class="list-unstyled footer-widget__time footer-widget__horario">
                                    <li class="footer-widget__time__item">
                                        <p class="footer-widget__day"> <i class="icon-clock1"></i> Horario de atención</p>
                                    </li>
                                    <li class="footer-widget__time__item">
                                        <p class="footer-widget__day"> <i class="icon-clock1"></i> Lunes a Viernes 9 a 18Hs (GMT-3)</p>
                                        <!-- <p>9am - 6pm</p> -->
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="main-footer__bottom">
                <div class="container">
                    <div class="main-footer__bottom__inner">
                        <p class="main-footer__copyright"> &copy; Copyright <span class="dynamic-year"></span> <!-- 2016-2022 --> ONYVA SRL - Todos los derechos reservados</p>
                    </div>
                </div>
            </div>
            <div class="main-footer__shape">
                <img src="assets/images/shapes/footer-shape-1-1.png" alt>
            </div>
            <div class="main-footer__shape main-footer__shape--two">
                <img src="assets/images/shapes/footer-shape-1-2.png" alt>
            </div>

        </footer>

    </div><!-- /.page-wrapper -->



    <div class="mobile-nav__wrapper">
        <div class="mobile-nav__overlay mobile-nav__toggler"></div>
        <!-- /.mobile-nav__overlay -->
        <div class="mobile-nav__content">
            <span class="mobile-nav__close mobile-nav__toggler"><i class="fa fa-times"></i></span>

            <div class="logo-box">
                <a href="index.html" aria-label="logo image"><img src="assets/images/logo-onyva.png" width="155" alt="labiox"></a>
            </div>
            <!-- /.logo-box -->
            <div class="mobile-nav__container"></div>
            <!-- /.mobile-nav__container -->

            <!-- <ul class="mobile-nav__contact list-unstyled">
                <li>
                    <i class="fa fa-envelope"></i>
                    <a href="mailto:needhelp@laboix.com">needhelp@laboix.com</a>
                </li>
                <li>
                    <i class="fa fa-phone-alt"></i>
                    <a href="tel:666-888-0000">666 888 0000</a>
                </li>
            </ul> --><!-- /.mobile-nav__contact -->
            <!-- <div class="mobile-nav__social">
                <a href="https://twitter.com"> <i class="fab fa-twitter" aria-hidden="true"></i> <span class="sr-only">Twitter</span> </a>
                <a href="https://facebook.com"> <i class="fab fa-facebook-f" aria-hidden="true"></i> <span class="sr-only">Facebook</span> </a>
                <a href="https://pinterest.com"> <i class="fab fa-pinterest-p" aria-hidden="true"></i> <span class="sr-only">Pinterest</span></a>
                <a href="https://instagram.com"> <i class="fab fa-instagram" aria-hidden="true"></i> <span class="sr-only">Instagram</span></a>
            </div> --><!-- /.mobile-nav__social -->
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

    <a href="#" data-target="html" class="scroll-to-target scroll-to-top">
        <span class="scroll-to-top__text">subir</span>
        <span class="scroll-to-top__wrapper"><span class="scroll-to-top__inner"></span></span>
    </a>

<?php
include('components/final.html');
?>