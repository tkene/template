<?php
require_once '../vendor/autoload.php';
require_once '../config/config.php';

use App\Controllers\HomeController;

$request_uri = explode('?', $_SERVER['REQUEST_URI'], 2)[0];

switch ($request_uri) {
    case '/':
        $controller = new HomeController();
        $controller->index();
        break;
    // Ajoutez d'autres routes ici
    default:
        header('HTTP/1.0 404 Not Found');
        echo '404 Not Found';
        break;
}
