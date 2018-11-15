<?php

require "vendor/autoload.php";

$app = new \Slim\app;
$container = $app->getContainer();

$container['view'] = new \Slim\Views\PhpRenderer('Views/');

$app->get('/', function ($request, $response) {
	$response = $this->view->render($response, 'home.php');
    return $response;
});

$app->get('/ListaUsuarios', function ($request, $response) {
	$response = $this->view->render($response, 'ListaUsuarios.php');
    return $response;
});

$app->run();