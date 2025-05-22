<?php 
$color_icon_navbar = '#0ebd66';/* 42974f 083875 */
$color_icon_our_products = '#fff'; /* opacity: 0.2; */
$size_our_products = "60"; 
?>

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
                    <li class="topbar-one__info__item">
                        <i class="icon-email topbar-one__info__icon"></i>
                        <a class="topbar-one__info__item__telephone" style="color:#97A5B7;">
                        <?php include('assets/iconos/telephone-fill.php'); ?> +54 11 51466977</a>
                    </li>
                </ul><!-- /.list-unstyled topbar-one__info -->
                
                <div class="clock-navbar">
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
                    <!-- <?php include('assets/iconos/clock_fill.php'); ?>
                    <p class="topbar-one__text">
                        <i class="icon-clock1 topbar-one__right__icon"></i>
                        <span>Lunes a Viernes 9 a 18Hs</span>
                    </p>    -->
                </div> 
            </div><!-- /.topbar-one__inner -->
        </div><!-- /.container-fluid -->
    </div>
    <header class="main-header sticky-header sticky-header--normal">
        <div class="container-fluid" style="max-width:none;">
            <div class="main-header__inner">
                <div class="main-header__logo logo-laboix">
                    <a href="index.php">
                        <img src="assets/images/logo-onyva.png" alt="Laboix HTML" width="133">
                    </a>
                </div>

                <nav class="main-header__nav main-menu">
                    <ul class="main-menu__list">

                        <li class="dropdown">
                            <a href="./institucional.php">Institucional</a>
                        </li>

                        <li class="dropdown">
                            <a href="#">Productos Médicos de Diagnóstico</a>
                            <ul class="sub-menu">
                                <li><a href="./proteinas.php">Proteínas</a></li>
                                <li><a href="#">InmunoDeficiencias</a></li>
                                <li><a href="#">Microbiología</a></li>
                                <li><a href="#">Biología Molecular</a></li>
                                <li><a href="#">Autoinmunidad</a></li>
                                <li><a href="#">Hb glicosilada por HPLC</a></li>
                                <li><a href="#">EritroSedimentación</a></li>
                            </ul>
                        </li>

                        <li class="dropdown">
                            <a href="./otros_productos_medicos.php">Otros Productos Médicos</a>
                            <ul class="sub-menu">
                                <li><a href="./comfort-in.php">Sistema de Inyección sin aguja</a></li>
                                <li><a href="#">Rayos X Portátil</a></li><!-- ./rayosxportatil.php -->
                                <li><a href="./oxus.php">Oxígeno medicinal: Oxus</a></li>
                            </ul>
                        </li>

                        <li>
                            <a href="./veterinaria.php">Veterinaria</a>
                            <ul class="sub-menu">
                                <li><a href="#">Hematología</a></li>
                                <li><a href="#">Rayos X</a></li>
                                <li><a href="#">Test péptidos</a></li>
                            </ul>
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
                        <li>
                            <a href="#">Capacitación</a>
                        </li>
                        <li>
                            <a href="./contacto.php">Contacto</a>
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
                
            </div><!-- /.main-header__inner -->
        </div><!-- /.container-fluid -->
    </header>
</div>