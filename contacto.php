<?php
include('components/head.html');
?>
<style>
    .contact-one__content, .laboix-btn {
        background: #0c9c54;
    }
</style>

<div class="preloader" style="display: none;">
    <div class="preloader__image" style="background-image: url(assets/images/logo-onyva.png);"></div>
</div>
<div class="page-wrapper">
    <?php include('components/navbar.php'); ?>

    <section class="contact-one">
            <div class="container">
                <div class="row">
                    <div class="col-lg-5">
                        <div class="contact-one__content">
                            <ul class="list-unstyled contact-one__info">
                                <li class="contact-one__info__item">
                                    <div class="contact-one__info__icon">
                                        <i class="bi bi-telephone-fill"></i>
                                    </div>
                                    <div class="contact-one__info__content">
                                        <p class="contact-one__info__text">Teléfono</p>
                                        <h4 class="contact-one__info__title"><a href="tel:++54 11 5235-3970">+54 11 5235-3970</a></h4><!-- /.contact-one__info__title -->
                                    </div><!-- /.contact-one__info__content -->
                                </li>
                                <li class="contact-one__info__item">
                                    <div class="contact-one__info__icon">
                                        <!-- <i class="icon-email"></i> -->
                                        <i class="bi bi-envelope-fill"></i>
                                    </div>
                                    <div class="contact-one__info__content">
                                        <p class="contact-one__info__text">Email</p>
                                        <h4 class="contact-one__info__title"><a href="mailto:ventas@onyva.com.ar">ventas@onyva.com.ar</a></h4>
                                    </div>
                                </li>
                                <li class="contact-one__info__item">
                                    <div class="contact-one__info__icon">
                                        <i class="bi bi-geo-alt-fill"></i>
                                    </div><!-- /.contact-one__info__icon -->
                                    <div class="contact-one__info__content">
                                        <p class="contact-one__info__text">Visitanos</p> <!-- /.contact-one__info__text -->
                                        <h4 class="contact-one__info__title"><a href="#">Dr. Adolfo Dickman 990</a></h4><!-- /.contact-one__info__title -->
                                    </div><!-- /.contact-one__info__content -->
                                </li>
                            </ul><!-- /.list-unstyled -->

                            <div class="contact-one__content__thumb">
                                <img src="assets/images/about/veterinaria - copia.png" width="300" alt="laboix">
                            </div><!-- /.contact-one__content__thumb -->
                            <div class="contact-one__content__social">
                                <a href="https://instagram.com"> 
                                    <i class="bi bi-instagram"></i> <span class="sr-only">Instagram</span>
                                </a>
                                <a href="https://facebook.com"> 
                                    <i class="bi bi-facebook"></i> <span class="sr-only">Facebook</span> 
                                </a>
                                <a href="https://twitter.com"> 
                                    <i class="bi bi-twitter"></i> <span class="sr-only">Twitter</span> 
                                </a>
                                <a href="https://tiktok.com"> 
                                    <i class="bi bi-tiktok"></i> <span class="sr-only">Tik Tok</span>
                                </a>
                            </div>
                        </div><!-- /.contact-one__content -->
                    </div><!-- /.col-xl-7 -->

                    <div class="col-lg-7">
                        <div class="contact-one__left">
                            <div class="contact-one__top">
                                <div class="sec-title wow fadeInUp animated" data-wow-duration="700ms" style="visibility: visible; animation-duration: 700ms; animation-name: fadeInUp;">
                                    <h6 class="sec-title__tagline">Contactanos<img src="assets/images/shapes/aver2-96x96.png" width="30" alt="Contact with  Us" class="sec-title__img"></h6><!-- /.sec-title__tagline -->
                                    <h3 class="sec-title__title"><!-- Complete este breve formulario y n -->Nos pondremos en contacto con Ud. a la brevedad</h3><!-- /.sec-title__title -->
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
        <div class="contact-map  wow fadeInUp animated" data-wow-duration="1500ms" style="visibility: visible; animation-duration: 1500ms; animation-name: fadeInUp;">
            <div class="container-fluid">
                <div class="google-map google-map__contact">
                <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d6568.532921970831!2d-58.4637191633682!3d-34.5974229724563!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x95bcb5fe23a12aa3%3A0xadcdcabfc5b73867!2sONYVA%20SRL!5e0!3m2!1ses-419!2sar!4v1745004243828!5m2!1ses-419!2sar" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    <div class="google-map__contact__pin">
                        <img src="assets/images/shapes/pin.png" alt="waypoint">
                    </div>
                    <div class="google-map__contact__location">
                        <p class="google-map__contact__location__text"> Dr. Adolfo Dickman 990 </p>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </div>


    <?php
    include('components/footer.html');
    ?>
</div><!-- /.page-wrapper -->
    
<?php
include('components/final.html');
?>