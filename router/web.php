<?php

use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\RequestInterface as Request;
use App\Controllers\ProductosController;

$app->get('/', [ProductosController::class, 'index']);

$app->get('/cursos', [ProductosController::class, 'test']);