<?php
$routes = [
    '/' => 'Phonebook@index',
    '/page' => 'Phonebook@page',
    '/contacts/add' => 'Phonebook@addContact',
    // ...
];

// Обработка запроса

$uri = $_SERVER['REQUEST_URI'];

if (isset($routes[$uri])) {
    $controller = $routes[$uri];
    $controller = explode('@', $controller);
    $controllerClass = 'App\\Controllers\\' . $controller[0];
    $controllerMethod = $controller[1];
    $controller = new $controllerClass();
    $controller->$controllerMethod();
} else {
    // Обработайте ошибку 404
    echo "Страница не найдена";
}