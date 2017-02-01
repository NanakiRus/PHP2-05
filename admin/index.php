<?php

require __DIR__ . '/../autoload.php';

$controllerName = $_GET['ctrl'] ?? 'Admin';

$controllerClassName = '\\App\\Controller\\' . $controllerName;

$controller = new $controllerClassName;

$actionName = $_GET['act'] ?? 'All';

try {
    $controller->action($actionName);
} catch (\App\Exception\ExceptionMulti $e) {
var_dump($e);
}
