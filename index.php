<?php
use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;

require 'vendor/autoload.php';

$app = new \Slim\App;

$app->get('/helloo', function(){
    echo 'ว่าไง';
});

$app->get('/user/register', function(){ echo '/user/register'; });
$app->get('/room /all', function(){ echo '/room/all'; });
$app->get('/room/reserve', function(){ echo '/room/reserve'; });

$app->get('/hello/{name}', function (Request $request, Response $response) {
    $name = $request->getAttribute('name');
    $response->getBody()->write("Hello, $name");

    return $response;
});
$app->run();