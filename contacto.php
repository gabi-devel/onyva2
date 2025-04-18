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
                                        <p class="contact-one__info__text">Have any question?</p>
                                        <h4 class="contact-one__info__title"><a href="tel:+92(8800)-8960">Free + 23 (000)-8050</a></h4><!-- /.contact-one__info__title -->
                                    </div><!-- /.contact-one__info__content -->
                                </li>
                                <li class="contact-one__info__item">
                                    <div class="contact-one__info__icon">
                                        <i class="icon-email"></i>
                                    </div>
                                    <div class="contact-one__info__content">
                                        <p class="contact-one__info__text">Send email</p>
                                        <h4 class="contact-one__info__title"><a href="mailto:needhelp@company.com">demo@gmail.com</a></h4>
                                    </div>
                                </li>
                                <li class="contact-one__info__item">
                                    <div class="contact-one__info__icon">
                                        <i class="icon-pin"></i>
                                    </div><!-- /.contact-one__info__icon -->
                                    <div class="contact-one__info__content">
                                        <p class="contact-one__info__text">Visit anytime</p> <!-- /.contact-one__info__text -->
                                        <h4 class="contact-one__info__title"><a href="#">86391 elgin st. delaware</a></h4><!-- /.contact-one__info__title -->
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
                                    <h6 class="sec-title__tagline"><img src="assets/images/shapes/sec-title-s-1.png" alt="Contact with  Us" class="sec-title__img">Contact with Us</h6><!-- /.sec-title__tagline -->
                                    <h3 class="sec-title__title">Feel free to write us anytime</h3><!-- /.sec-title__title -->
                                </div><!-- /.sec-title -->
                            </div><!-- /.contact-one__top -->
                            <form class="contact-one__form contact-form-validated form-one background-base wow fadeInUp animated" data-wow-duration="1500ms" action="inc/sendemail.php" novalidate="novalidate" style="visibility: visible; animation-duration: 1500ms; animation-name: fadeInUp;">
                                <div class="form-one__group">
                                    <div class="form-one__control">
                                        <input type="text" name="name" placeholder="Your name">
                                    </div><!-- /.form-one__control form-one__control__full -->
                                    <div class="form-one__control">
                                        <input type="email" name="email" placeholder="Email address">
                                    </div><!-- /.form-one__control form-one__control__full -->
                                    <div class="form-one__control form-one__control">
                                        <input type="tel" name="form_phone" pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}" placeholder="Phone" required="" aria-required="true">
                                    </div><!-- /.form-one__control form-one__control__full -->
                                    <div class="form-one__control form-one__control">
                                        <input type="text" name="subject" placeholder="Subject">
                                    </div><!-- /.form-one__control form-one__control__full -->
                                    <div class="form-one__control form-one__control--full">
                                        <textarea name="message" placeholder="Write a message"></textarea><!-- /# -->
                                    </div><!-- /.form-one__control -->
                                    <div class="form-one__control form-one__control--full">
                                        <button type="submit" class="laboix-btn laboix-btn--submite">Send a message</button>
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