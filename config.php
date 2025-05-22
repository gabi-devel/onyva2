<?php
define('APP_PATH', __DIR__ . '/'); // __DIR__ devuelve la ruta del directorio donde está ubicado el archivo config.php (en este caso, raiz). Agregar '/' al final asegura consistencia al concatenar rutas.

define('COMPONENTS_PATH', APP_PATH . 'components/');
define('PAGES_PATH', APP_PATH . 'paginas/');

define('BASE_URL', '/'); // Ruta base para URLs (ajusta si el proyecto está en una subcarpeta, ej. '/proyecto/')
?>