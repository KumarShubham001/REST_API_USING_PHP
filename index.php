<?php
require __DIR__ . "/inc/bootstrap.php";

$uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$uri = explode('/', $uri);

$baseIndex = array_search('index.php', $uri);

$baseRoute = $uri[$baseIndex + 1];
$baseRouteOp = $uri[$baseIndex + 2];

// place all the allowed routes for the application in lowercase
$allowedBaseRoutes = ['user'];

echo $baseIndex . ' and next value ' . $baseRoute . ' ' . $baseRouteOp . ' & is present? ' . in_array(strtolower($baseRoute), $allowedBaseRoutes);

if ((isset($uri[$baseIndex + 1]) && !in_array(strtolower($baseRoute), $allowedBaseRoutes)) || !isset($uri[$baseIndex + 2])) {
    header("HTTP/1.1 404 Not Found");
    exit();
}

require PROJECT_ROOT_PATH . "/Controller/Api/UserController.php";

$objFeedController = new UserController();
$strMethodName = $baseRouteOp . 'Action';
$objFeedController->{$strMethodName}();