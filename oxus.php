<?php
include('components/head.html'); ?>
<body>
        <?php include 'components/navbar.php'; ?>

        <style>
        .bannerOxus::before {
            content: "";
            position: absolute;
            left: 0;
            top: 125px;
            width: 100%;
            z-index: 1;
            height: 451px;
            /* background: rgba(var(--laboix-base-rgb, 2, 25, 54), 0.3); */
        }
        </style>

            <div class="col-12 text-center bannerOxus">
                <img src="assets/images/banner_oxus.jpg" width=100% alt="oxus"></img>
            </div>
            <!-- <div class="col-12 text-center mt-4 mb-4">
                <h1 class="titulo">RAK-U06M2E</h1>
                <h2 class="subtitulo">Oxus</h2>
                <h3 class="subtitulo">Oxígeno Medicinal</h3>    
            </div> -->
            <div class="row mx-4">
                <div class="mb-4 espacio secciones" data-aos="fade-left" data-aos-duration="1000" data-bs-spy="scroll" data-bs-target="#list-example" data-bs-smooth-scroll="true" class="scrollspy-example" tabindex="0"><!-- secciones col-10 -->
                    <div class="seccion pt-4">
                        <?php for ($i=1; $i<=7; $i++) { 
                            $imageName = sprintf('./assets/images/Ox_OXUS/RAK-U06M2E español_page-%04d.jpg', $i);
                             /* En el contexto de sprintf() o printf():
                                %: Indica el comienzo de la especificación de formato.
                                0: Indica que se debe rellenar con ceros.
                                4: Especifica el ancho mínimo del campo numérico. En este caso, se indica que se deben usar al menos cuatro caracteres.
                                d: Indica que el argumento es un número entero decimal (en este caso, $i). 
                                */
                        ?>
                        <div class="d-flex justify-content-center mt-4">
                            <div class="w-100" style="max-width: 90%;"><?php // ajustar tamaño imagem ?>
                                <img src="<?php echo $imageName; ?>" class="imgPDF w-100" alt="" data-aos="fade-down" data-aos-duration="1000">
                            </div>
                        </div>
                        <?php } ?>
                    </div>
                </div>
            </div>
    
        <script>
        const encabezados = document.querySelectorAll('.contenedor .encabezado');
        const enlaces = document.querySelectorAll('#enlaces a');

        const observer = new IntersectionObserver((entradas, observador) => {
            entradas.forEach(entrada => {
                if(entrada.isIntersecting){
                    const id = '#' + entrada.target.id;
                    history.pushState({}, entrada.target.innetText, id);

                    enlaces.forEach(enlace => {
                        enlace.classList.remove('activo');

                        const href = enlace.attributes.href.nodeValue;
                        if(href === id){
                            enlace.classList.add('activo');
                        }
                    });
                }
            });
        }, {
            threshold: 1,
            rootMargin: '0px 0px -50% 0px'
        });

        encabezados.forEach(encabezado => {
            observer.observe(encabezado);
        });
        </script>

        <script>
            $(document).ready(function(){
                $('.ir-arriba').click(function() {
                    $('body, html').animate({
                        scrollTop: '0px'
                    }, 300); // milisegundos
                });
            });
        </script>
        
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
    <?php
    include('components/footer.html');
    ?>
</body>