<?php
include('components/head.html');
$color_icon_navbar = '#0ebd66';
$color_icon_our_products = '#fff';
$size_our_products = "60"; 
?>

<div class="page-wrapper">
    <?php include('components/navbar.html'); ?>

    <section class="contact-one">
            <div class="container">
                <div class="row">
                    <div class="col-lg-5">
                        <div class="contact-one__content">
                            <ul class="list-unstyled contact-one__info">
                                <li class="contact-one__info__item">
                                    <div class="contact-one__info__icon">
                                        <i class="icon-telephone-call-1"></i>
                                    </div>
                                    <div class="contact-one__info__content">
                                        <p class="contact-one__info__text">Teléfono</p>
                                        <h4 class="contact-one__info__title"><a href="tel:++54 11 5235-3970">+54 11 5235-3970</a></h4><!-- /.contact-one__info__title -->
                                    </div><!-- /.contact-one__info__content -->
                                </li>
                                <li class="contact-one__info__item">
                                    <div class="contact-one__info__icon">
                                        <i class="icon-email"></i>
                                    </div>
                                    <div class="contact-one__info__content">
                                        <p class="contact-one__info__text">Email</p>
                                        <h4 class="contact-one__info__title"><a href="mailto:ventas@onyva.com.ar">ventas@onyva.com.ar</a></h4>
                                    </div>
                                </li>
                                <li class="contact-one__info__item">
                                    <div class="contact-one__info__icon">
                                        <i class="icon-pin"></i>
                                    </div><!-- /.contact-one__info__icon -->
                                    <div class="contact-one__info__content">
                                        <p class="contact-one__info__text">Visitanos</p> <!-- /.contact-one__info__text -->
                                        <h4 class="contact-one__info__title"><a href="#">Dr. Adolfo Dickman 990</a></h4><!-- /.contact-one__info__title -->
                                    </div><!-- /.contact-one__info__content -->
                                </li>
                            </ul><!-- /.list-unstyled -->

                            <div class="contact-one__content__thumb">
                                <img src="assets/images/shapes/hero-1-1.png" alt="laboix">
                            </div><!-- /.contact-one__content__thumb -->
                            <div class="contact-one__content__social">
                                <a href="https://instagram.com"> <i class="fab fa-instagram" aria-hidden="true"></i> <span class="sr-only">Instagram</span></a>
                                <a href="https://facebook.com"> <i class="fab fa-facebook-f" aria-hidden="true"></i> <span class="sr-only">Facebook</span> </a>
                                <a href="https://twitter.com"> <i class="fab fa-twitter" aria-hidden="true"></i> <span class="sr-only">Twitter</span> </a>
                                <a href="https://pinterest.com"> <i class="fab fa-pinterest-p" aria-hidden="true"></i> <span class="sr-only">Pinterest</span></a>
                            </div>
                        </div><!-- /.contact-one__content -->
                    </div><!-- /.col-xl-7 -->

                    <div class="col-lg-7">
                        <div class="contact-one__left">
                            <div class="contact-one__top">
                                <div class="sec-title wow fadeInUp animated" data-wow-duration="700ms" style="visibility: visible; animation-duration: 700ms; animation-name: fadeInUp;">
                                    <h6 class="sec-title__tagline"><img src="assets/images/shapes/sec-title-s-1.png" alt="Contact with  Us" class="sec-title__img">Contactanos</h6><!-- /.sec-title__tagline -->
                                    <h3 class="sec-title__title">Complete este breve formulario y nos pondremos en contacto con Ud. a la brevedad</h3><!-- /.sec-title__title -->
                                </div><!-- /.sec-title -->
                            </div><!-- /.contact-one__top -->
                            <form class="contact-one__form contact-form-validated form-one background-base wow fadeInUp animated" data-wow-duration="1500ms" action="inc/sendemail.php" novalidate="novalidate" style="visibility: visible; animation-duration: 1500ms; animation-name: fadeInUp;">
                                <div class="form-one__group">
                                    <div class="form-one__control">
                                        <input placeholder="Ingrese su nombre" name="name" type="text" id="name" class="form-control" value="">
                                    </div><!-- /.form-one__control form-one__control__full -->

                                    <div class="form-one__control">
                                    <input placeholder="Empresa o Laboratorio" name="company" type="text" id="company" class="form-control" value="">
                                    </div><!-- /.form-one__control form-one__control__full -->
                                    
                                    <div class="form-one__control">
                                        <input placeholder="Ingrese su email" name="email" type="email" id="email" class="form-control" value="">
                                        <div class="invalid-feedback"></div>
                                    </div>
                                    <div class="form-one__control">
                                        <input placeholder="Reingrese su email" name="confirmEmail" type="email" id="confirmEmail" class="form-control" value="">
                                        <div class="invalid-feedback"></div>
                                    </div>

                                    <div class="form-one__control form-one__control--full">
                                        <textarea name="message" placeholder="Escriba su mensaje"></textarea><!-- /# -->
                                    </div><!-- /.form-one__control -->
                                    <div class="form-one__control form-one__control--full">
                                        <div class="form-check">
                                            <input name="terms" type="checkbox" class="form-check-input">
                                            <p title="" class="form-check-label">Acepto recibir información sobre productos y servicios</p>
                                        </div>
                                    </div><!-- /.form-one__control -->
                                    <div class="form-one__control form-one__control--full">
                                        <button type="submit" class="laboix-btn laboix-btn--submite">Enviar</button>
                                    </div><!-- /.form-one__control -->
                                </div><!-- /.form-one__group -->
                            </form>
                        </div>
                    </div><!-- /.col-xl-5 -->

                </div><!-- /.row -->
            </div><!-- /.container -->
        </section>



    <?php
    include('components/footer.html');
    ?>
</div><!-- /.page-wrapper -->
    
<?php
include('components/final.html');
?>