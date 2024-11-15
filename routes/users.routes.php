<?php
require_once __DIR__ . '/../controller/users.controller.php';

use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;
use App\Controller;

$app->get('/users', function(Request $req, Response $res, $params) {

    $result = Controller\getAllUsers($req, $res, $params);

    $res->getBody()->write(json_encode($result));
    return $res->withHeader("Content-Type", "Application/json");
});
