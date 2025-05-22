<?php
    require_once APP_PATH . 'config.php'; // Incluir config.php para APP_PATH
    require_once COMPONENTS_PATH . 'head.php';
    require_once COMPONENTS_PATH . 'navbar.php'; 
?>

<!-- Contenido dinámico de la página -->
<?php echo $content; ?>

<?php 
    require_once COMPONENTS_PATH . 'footer.php';
    require_once COMPONENTS_PATH . 'final.html'; 
?>

<!-- ob_start() y ob_get_clean() capturan el contenido de la página en la variable $content, que luego se inserta en layout.php. -->