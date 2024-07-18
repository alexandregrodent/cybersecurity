<?php
require_once '../src/helpers/utils.php';

require_absolute('config/config.inc.php');
require_absolute('src/controllers/Controller.php');

// Récupérer l'URL demandée
$url = $_GET['url'] ?? 'home';
$url = rtrim($url, '/');
$url = filter_var($url, FILTER_SANITIZE_URL);
$urlSegments = explode('/', $url);

$controller = new Controller();

// Gérer la route demandée
switch ($urlSegments[0]) {
    case 'home':
        $controller->home();
        break;
    case 'vulnerabilities':
        if (isset($urlSegments[1])) {
            $controller->vulnerability($urlSegments[1]);
        } else {
            $controller->error();
        }
        break;
    default:
        $controller->error();
        break;
}
