<?php

require __DIR__ . '/autoload.php';

$parts = explode('/', $_SERVER['REQUEST_URI']);

$controllerName = $_GET['ctrl'] ?? 'Index';

$controllerClassName = '\\App\\Controller\\' . $controllerName;

$actionName = $_GET['act'] ?? 'All';

try {
    $controller = new $controllerClassName;
    $controller->action($actionName);
} catch (\App\Exception\Exception404 $error) {
    $controller->view(__DIR__ . '/template/error.php', $error);
}
