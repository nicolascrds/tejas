<?php

require_once __DIR__ . '/../app/controllers/HomeController.php';

$url = $_GET['url'] ?? '';

$url = trim($url, '/');

switch ($url) {

    case '':
        $controller = new HomeController();
        $controller->index();
        break;

    case 'inicio':
        $controller = new HomeController();
        $controller->index();
        break;

    default:
        http_response_code(404);

        echo "<h1>Error 404</h1>";
        echo "<p>Página no encontrada.</p>";
        break;
}