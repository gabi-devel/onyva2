<?php
include('components/head.html');

/* Info de las cards en el archivo cards_data.php */ 
include('./components/cards_data.php');
?>

<div class="page-wrapper">
    <?php include('components/navbar.php'); ?>
    
    <!-- cards -->
    <section class="service-page--one py-5">
        <div class="service-page__bg" style="background-image: url(assets/images/shapes/service-shape-1-1.png);"></div>
        <div class="container py-4">
            <div class="row">
                <div class="col-12">
                    <div class="sec-title text-center wow fadeInUp" data-wow-duration='1500ms'>
                        <h3 class="sec-title__title"><img src="assets/images/shapes/sec-title-s-1.png" alt="our Service" class="sec-title__img">
                            TODOS SON PUTOS
                        </h3>
                    </div>
                </div>
            </div>
            <div class="row gutter-y-30">
                <?php 
                // Nombre entre comillas igual que el de cards_data.php
                $all_cards = 'otros_prod_med'; 

                $delays = ['400ms', '600ms', '800ms'];
                $index = 0;
                foreach ($$all_cards as &$card) {
                    $card['delay'] = $delays[$index % 3];
                    $index++;
                }
                unset($card);

                foreach ($$all_cards as $card): 
                ?>
                    <div class="col-md-6 col-lg-4">
                        <div class="service-card wow fadeInUp" data-wow-duration='1500ms' data-wow-delay='<?= $card['delay'] ?>'>
                            <div class="service-card__inner">
                                <div class="service-card__top">
                                    <h3 class="service-card__title">
                                        <a href="<?= $card['href'] ?>"><?= $card['titulo'] ?></a>
                                    </h3>
                                    <div class="service-card__icon">
                                        <?php include($card['icono']); ?>
                                    </div>
                                </div>
                                <div class="service-card__thumb">
                                    <div class="service-card__thumb__item">
                                        <img src="<?= $card['imagen'] ?>" alt="<?= $card['alt'] ?>">
                                    </div>
                                    <div class="service-card__thumb__shape">
                                        <img src="assets/images/shapes/shape-service.png" alt>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php 
                endforeach; 
                ?>
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