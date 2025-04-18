
<?php
include('components/head.html');
?>

<body class="custom-cursor">

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
        </div>
        


        <?php
            $holis = 'uno.php';
            include($holis);
        ?>

        <?php
            include('components/footer.html');
        ?>


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