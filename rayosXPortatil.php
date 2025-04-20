<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8"/>
        <link rel="icon" href="./img/assets/favicon.ico"/>
        <meta name="viewport" content="width=device-width,initial-scale=1"/>
        <meta name="theme-color" content="#000000"/>
        <meta name="description" content="Onyva SRL sitio oficial"/>
        <meta name="msapplication-TileColor" content="#ffffff">
        <meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
        <meta name="theme-color" content="#ffffff">
        <link rel="manifest" href="/manifest.json"/>
        <title>Onyva SRL</title>
        <link href="./static/css/2.0a9c0159.chunk.css" rel="stylesheet">
        <link href="./static/css/main.0da4b609.chunk.css" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
        <link rel="stylesheet" href="components/css/navbar.css">
        <link rel="stylesheet" href="components/css/footer.css">
        <link href="./css/elements/imgPDF.css" rel="stylesheet">
        <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
        <script src="https://code.jquery.com/jquery-3.6.3.js" integrity="sha256-nQLuAZGRRcILA+6dMBOvcRh5Pe310sBpanc6+QBmyVM=" crossorigin="anonymous"></script>
</head>
    <body>
        <?php include 'components/navbar.php';?>

        <div class="mt-5">
            <div class="mx-5 mb-4">
                    <div aria-label="breadcrumb" class="altura navCategorias">
                        <ol class="breadcrumb alto">
                            <li class="breadcrumb-item"><a href="index.php">Inicio</a></li>
                            <li class="breadcrumb-item"><a href="categorias.php">Categorías</a></li>
                            <li class="breadcrumb-item"><a href="#">Otros productos médicos</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Rayos X Portatil</li>
                        </ol>
                </div>
            </div>

            <div class="row mx-4">
                <div class="mb-4 espacio secciones" data-aos="fade-left" data-aos-duration="1000" data-bs-spy="scroll" data-bs-target="#list-example" data-bs-smooth-scroll="true" class="scrollspy-example" tabindex="0"><!-- secciones col-10 -->
                    <div class="seccion pt-4">
                        <div class="d-flex justify-content-center mt-4">
                            <img src="./img/RayosXPortatil/REMEX-KA6_catalogo español_page-0001.jpg" alt="" data-aos="fade-down" data-aos-duration="1000" class="imgPDF">
                        </div>
                        <div class="d-flex justify-content-center mt-4">
                            <img src="./img/RayosXPortatil/REMEX-KA6_catalogo español_page-0002.jpg" alt="" data-aos="fade-down" data-aos-duration="1000" class="imgPDF">
                        </div>
                        <div class="d-flex justify-content-center mt-4">
                            <img src="./img/RayosXPortatil/REMEX-KA6_catalogo español_page-0003.jpg" alt="" data-aos="fade-down" data-aos-duration="1000" class="imgPDF">
                        </div>
                        <div class="d-flex justify-content-center mt-4">
                            <img src="./img/RayosXPortatil/REMEX-KA6_catalogo español_page-0004.jpg" alt="" data-aos="fade-down" data-aos-duration="1000" class="imgPDF">
                        </div>
                        <div class="d-flex justify-content-center mt-4">
                            <img src="./img/RayosXPortatil/REMEX-KA6_catalogo español_page-0005.jpg" alt="" data-aos="fade-down" data-aos-duration="1000" class="imgPDF">
                        </div>
                        <div class="d-flex justify-content-center mt-4">
                            <img src="./img/RayosXPortatil/REMEX-KA6_catalogo español_page-0006.jpg" alt="" data-aos="fade-down" data-aos-duration="1000" class="imgPDF">
                        </div>
                        <div class="d-flex justify-content-center mt-4">
                            <img src="./img/RayosXPortatil/REMEX-KA6_catalogo español_page-0007.jpg" alt="" data-aos="fade-down" data-aos-duration="1000" class="imgPDF">
                        </div>
                        <div class="d-flex justify-content-center mt-4">
                            <img src="./img/RayosXPortatil/REMEX-KA6_catalogo español_page-0008.jpg" alt="" data-aos="fade-down" data-aos-duration="1000" class="imgPDF">
                        </div>
                    </div>
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
    <?php include('components/footer.php'); ?>
</body>
</html>