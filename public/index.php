<?php

require_once '../vendor/autoload.php';
use League\Plates\Engine;

$t = new Engine();
$t->addFolder('views', __DIR__.'/../resources/views/');
$t->addFolder('layouts', __DIR__.'/../resources/layouts/');
$t->addFolder('partial', __DIR__.'/../resources/layouts/partials/');
$prod = new \App\Controllers\ProductosController;

echo $t->render('views::home',['title' => 'Dashboard']);

