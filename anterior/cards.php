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
                        <!-- <div class="topbar-one__right">
                            <p class="topbar-one__text">
                                <i class="icon-clock1 topbar-one__right__icon"></i>
                                <span>Mon - Mon 8:00 to 6:00 Thu - Closed</span>
                            </p>
                            <div class="topbar-one__social">
                                <a href="https://twitter.com"> <i class="fab fa-twitter" aria-hidden="true"></i> <span class="sr-only">Twitter</span> </a>
                                <a href="https://facebook.com"> <i class="fab fa-facebook-f" aria-hidden="true"></i> <span class="sr-only">Facebook</span> </a>
                                <a href="https://pinterest.com"> <i class="fab fa-pinterest-p" aria-hidden="true"></i> <span class="sr-only">Pinterest</span></a>
                                <a href="https://instagram.com"> <i class="fab fa-instagram" aria-hidden="true"></i> <span class="sr-only">Instagram</span></a>
                            </div>
                        </div> -->
                    </div><!-- /.topbar-one__inner -->
                </div><!-- /.container-fluid -->
            </div>
            <?php /* include('components/navbar.php'); */ ?>

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
           
        </div>
        


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
        

    </div><!-- /.page-wrapper -->
    <!-- Custom Cursor -->
    <!-- <div class="custom-cursor__cursor"></div>
    <div class="custom-cursor__cursor-two"></div> -->
    <section class="blog-one">
        <div class="container">
            
            <div class="row gutter-y-30">
                <div class="col-md-6 col-lg-4">
                    <div class="blog-card wow fadeInUp animated" data-wow-duration="1500ms" data-wow-delay="400ms" style="visibility: visible; animation-duration: 1500ms; animation-delay: 400ms; animation-name: fadeInUp;">
                        <div class="blog-card__image">
                            <div class="blog-card__image__item">
                                <img src="assets/images/about/veterinaria.png" alt="Lab safety is everyone’s responsivity">
                                <a href="blog-details-right.html" class="blog-card__image__link"></a>
                            </div>
                        </div><!-- /.blog-card__image -->
                        <div class="blog-card__content">

                            <h3 class="blog-card__title"><a href="blog-details-right.html">Lab safety is everyone’s responsivity</a></h3><!-- /.blog-card__title -->
                            <p class="blog-card__subtitle">contenido de relleno, adornistore accesible desde el 14/04 test1</p>
                            

                        </div><!-- /.blog-card__content -->
                    </div><!-- /.blog-card -->
                </div><!-- /.col-md-6 col-lg-4 -->
                <div class="col-md-6 col-lg-4">
                    <div class="blog-card wow fadeInUp animated" data-wow-duration="1500ms" data-wow-delay="600ms" style="visibility: visible; animation-duration: 1500ms; animation-delay: 600ms; animation-name: fadeInUp;">
                        <div class="blog-card__image">
                            <div class="blog-card__image__item">
                                <img src="assets/images/about/veterinaria.png" alt="Lab safety is everyone’s responsivity">
                                <a href="blog-details-right.html" class="blog-card__image__link"></a>
                            </div>
                            
                        </div><!-- /.blog-card__image -->
                        <div class="blog-card__content">
                            
                            <h3 class="blog-card__title"><a href="blog-details-right.html">Lab safety is everyone’s responsivity</a></h3><!-- /.blog-card__title -->
                            <p class="blog-card__subtitle"><a>fdfdfd</a>contenido de relleno, adornistore accesible desde el 14/04 ghfhfgh</p>
                            

                        </div><!-- /.blog-card__content -->
                    </div><!-- /.blog-card -->
                </div><!-- /.col-md-6 col-lg-4 -->
                <div class="col-md-6 col-lg-4">
                    <div class="blog-card wow fadeInUp animated" data-wow-duration="1500ms" data-wow-delay="800ms" style="visibility: visible; animation-duration: 1500ms; animation-delay: 800ms; animation-name: fadeInUp;">
                        <div class="blog-card__image">
                            <div class="blog-card__image__item">
                                <img src="assets/images/about/intartif37.jpg" alt="Lab safety is everyone’s responsivity">
                                <a href="blog-details-right.html" class="blog-card__image__link"></a>
                            </div>
                            
                        </div><!-- /.blog-card__image -->
                        <div class="blog-card__content">
                            <h3 class="blog-card__title"><a href="blog-details-right.html">Lab safety is everyone’s responsivity</a></h3><!-- /.blog-card__title -->
                            <p class="blog-card__subtitle"> contenido de relleno, adornistore accesible desde el 14/04, envio gratuito a toda la Argentina y el exterior con banco BBVA, santander, Galicia, Tarjeta Naranja, Tarjeta SUBE y PAMI</p>
                            

                        </div><!-- /.blog-card__content -->
                    </div><!-- /.blog-card -->
                </div><!-- /.col-md-6 col-lg-4 -->
                <div class="col-md-6 col-lg-4">
                    <div class="blog-card wow fadeInUp animated" data-wow-duration="1500ms" data-wow-delay="600ms" style="visibility: visible; animation-duration: 1500ms; animation-delay: 600ms; animation-name: fadeInUp;">
                        <div class="blog-card__image">
                            <div class="blog-card__image__item">
                                <img src="assets/images/about/veterinaria.png" alt="Lab safety is everyone’s responsivity">
                                <a href="blog-details-right.html" class="blog-card__image__link"></a>
                            </div>
                            
                        </div><!-- /.blog-card__image -->
                        <div class="blog-card__content">
                            <h3 class="blog-card__title"><a href="blog-details-right.html">Lab safety is everyone’s responsivity</a></h3><!-- /.blog-card__title -->
                            <p class="blog-card__subtitle"> contenido de relleno, adornistore accesible desde el 14/04</p>
                            

                        </div><!-- /.blog-card__content -->
                    </div><!-- /.blog-card -->
                </div><!-- /.col-md-6 col-lg-4 -->
            </div><!-- /.row -->
            
        </div><!-- /.container -->
    </section>


<?php
include('components/final.html');
?>