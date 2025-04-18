<?php
include('components/head.html');


/* Info de las cards en el archivo cards_data.php */ 
include('./cards_data.php');


$color_icon_navbar = '#0ebd66';/* 42974f 083875 */
$color_icon_our_products = '#fff'; /* opacity: 0.2; */
$size_our_products = "60"; 
?>
<div class="page-wrapper">
    <div class="header_aver">
        <div class="topbar-one">
            <div class="">
                <div class="topbar-one__inner">
                    <ul class="list-unstyled topbar-one__info">
                        <li class="topbar-one__info__item">
                            <i class="icon-pin topbar-one__info__icon"></i>
                            <span class="topbar-one__info__item__location">
                            <?php include('assets/iconos/geo-alt-fill.php'); ?> Dr. Adolfo Dickman 990, Buenos Aires</span>
                        </li>
                        <li class="topbar-one__info__item">
                            <i class="icon-email topbar-one__info__icon"></i>
                            <a class="topbar-one__info__item__email" href="mailto:ventas@onyva.com.ar">
                            <?php include('assets/iconos/envelope_fill.php'); ?> ventas@onyva.com.ar</a>
                        </li>
                    </ul><!-- /.list-unstyled topbar-one__info -->
                    
                    <div class="clock-navbar">
                        <!-- <span> -->
                            
                        <?php include('assets/iconos/clock_fill.php'); ?>
                        <!-- </span> -->
                            
                        <p class="topbar-one__text">
                            <i class="icon-clock1 topbar-one__right__icon"></i>
                            <span>Lunes a Viernes 9 a 18Hs</span>
                        </p>   
                    </div> 
                    
                    <div class="recuadro-derecho fila1">
                    
                            <div class="topbar-one__social uno__social">
                                <a href="https://twitter.com">
                                    <?php include('assets/iconos/twitter.html'); ?><span class="sr-only">Twitter</span> 
                                </a>
                                <a href="https://facebook.com"> 
                                    <?php include('assets/iconos/facebook.html'); ?> <span class="sr-only">Facebook</span> 
                                </a>
                                <a href="#"> 
                                    <?php include('assets/iconos/tiktok.html'); ?> <span class="sr-only">Tik tok</span>
                                </a>
                                <a href="https://instagram.com"> 
                                    <?php include('assets/iconos/instagram.html'); ?> <span class="sr-only">Instagram</span>
                                </a>
                            </div>
                    </div>
                </div><!-- /.topbar-one__inner -->
            </div><!-- /.container-fluid -->
        </div>
        <?php /* include('components/navbar.html'); */ ?>

        <header class="main-header sticky-header sticky-header--normal">
            <div class="container-fluid" style="max-width:none;">
                <div class="main-header__inner">
                    <div class="main-header__logo logo-laboix">
                        <a href="index.html">
                            <img src="assets/images/logo-onyva.png" alt="Laboix HTML" width="133">
                        </a>
                    </div>

                    <nav class="main-header__nav main-menu">
                        <ul class="main-menu__list">

                            <li class="dropdown megamenu current">
                                <a href="#">Institucional</a>
                            </li>

                            <li class="dropdown">
                                <a href="#">Productos Médicos de Diagnóstico</a>
                                <ul class="sub-menu">
                                    <li><a href="#">Proteínas</a></li>
                                    <li><a href="#">InmunoDeficiencias</a></li>
                                    <li><a href="#">Microbiología</a></li>
                                    <li><a href="#">Biología Molecular</a></li>
                                    <li><a href="#">Autoinmunidad</a></li>
                                    <li><a href="#">Hb glicosilada por HPLC</a></li>
                                    <li><a href="#">EritroSedimentación</a></li>
                                </ul>
                            </li>

                            <li class="dropdown">
                                <a href="#">Otros Productos Médicos</a>
                                <ul class="sub-menu">
                                    <li><a href="#">Sistema de Inyección sin aguja</a></li>
                                    <li><a href="#">Rayos X Portátil</a></li>
                                    <li class="dropdown"><a href="gallery.html">Oxígeno medicinal</a>
                                        <ul class="sub-menu">
                                            <li><a href="#">Oxus</a></li>
                                            <li><a href="#">Moss</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="#">Medicina Estética</a></li>
                                    <li><a href="#">Misceláneas</a></li>
                                </ul>
                            </li>

                            <li>
                                <a href="#">Veterinaria</a>
                            </li>

                            <li class="dropdown">
                                <a href="#">Inteligencia Artificial</a>
                                <ul class="sub-menu">
                                    <li><a href="#">Inteligencia Artificial</a></li>
                                    <li class="dropdown"><a href="#">Próximamente</a>
                                        <ul class="sub-menu">
                                            <li><a href="#">Presentación</a></li>
                                            <li><a href="#">Cerebro</a></li>
                                            <li><a href="#">Mama</a></li>
                                            <li><a href="#">Tórax</a></li>
                                            <li><a href="#">Próstata</a></li>
                                            <li><a href="#">Oclusión venosa profunda</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <!-- <li>
                                <a href="#">Capacitación</a>
                            </li> -->
                            <li>
                                <a href="#">Contacto</a>
                            </li><!--  -->
                        </ul>
                    </nav>
                    <div class="main-header__right">
                        <!-- <div class="main-header__link">
                            <a href="contact.html" class="laboix-btn main-header__btn">Appoinment</a>
                        </div>
                        <div class="main-header__right__info">
                            <a href="#" class="search-toggler main-header__right__info__item"> <i class="icon-search" aria-hidden="true"></i> <span class="sr-only">Search</span> </a>
                            <a href="cart.html" class="main-header__right__info__item"> <i class="icon-trolley" aria-hidden="true"></i> <span class="sr-only">Search</span> </a>
                        </div>

                        <div class="mobile-nav__btn mobile-nav__toggler">
                            <span></span><span></span><span></span>
                        </div> -->

                    </div>
                    <div class="recuadro-derecho fila2">
                        <a href="tel:+92-3800-8060" class="main-header__right__llamar">
                            <div class="main-header__right__icon">
                                <?php include('assets/iconos/telephone-fill.php'); ?>
                            </div>
                            <div class="main-header__right__content">
                                <span class="main-header__right__content__text">Contactanos</span>
                                <h6 class="main-header__right__content__number">+54 11 51466977</h6>
                            </div>
                        </a>
                    </div>
                </div><!-- /.main-header__inner -->
            </div><!-- /.container-fluid -->
        </header>
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
    
    <!-- cards -->
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
                <?php 
                $tipo = $_GET['tipo'];
                        
                $cards = match ($tipo) { /* Agregarlo también en el href de navbar.html  */
                    'servicios' => $servicios,
                    'holiwis' => $holiwis,
                    'inmunoDeficiencias' => $inmunoDeficiencias,
                };   
                
                /*
                $tipo = $_POST['tipo'] ?? 'default'; include('./cards_data.php');

                switch($tipo) {
                    case 'holiwis':
                        $cards = $holiwis;
                        break;
                    case 'proteinas':
                        $cards = $proteinas;
                        break;
                    default:
                        $cards = $servicios_generales;
                } */

                foreach ($cards as $item): 
                ?>
                <div class="col-md-6 col-lg-4">
                    <div class="service-card wow fadeInUp" data-wow-duration='1500ms' data-wow-delay='<?= $item['delay'] ?>'>
                        <div class="service-card__inner">
                            <div class="service-card__top">
                                <h3 class="service-card__title">
                                    <a href="<?= $item['href'] ?>"><?= $item['titulo'] ?></a>
                                </h3>
                                <div class="service-card__icon">
                                    <?php include($item['icono']); ?>
                                </div>
                            </div>
                            <div class="service-card__thumb">
                                <div class="service-card__thumb__item">
                                    <img src="<?= $item['imagen'] ?>" alt="<?= $item['alt'] ?>">
                                </div>
                                <div class="service-card__thumb__shape">
                                    <img src="assets/images/shapes/shape-service.png" alt>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>
    <!-- cards section End -->

    <?php
    include('components/footer.html');
    ?>
</div><!-- /.page-wrapper -->
    
<?php
include('components/final.html');
?>