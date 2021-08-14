<?php

require_once '../vendor/autoload.php';

use App\Controllers\ProductosController;
use League\Plates\Engine;
use Dotenv\Dotenv;

use DI\Container;
use Slim\Factory\AppFactory;

$env = Dotenv::createImmutable(__DIR__.'/../');
$env->load();
require_once '../config/config.php';
$container = new Container();

AppFactory::setContainer($container);
$app = AppFactory::create();

$container->set('ProductosController', function(){
    $t = new Engine();
    $this->view->addFolder('views', dirname(__FILE__).'/../resources/views/');
    $this->view->addFolder('layouts',  dirname(__FILE__).'/../resources/layouts/');
    $this->view->addFolder('partial',  dirname(__FILE__).'/../resources/layouts/partials/');
        return new ProductosController($t);
});

require '../router/web.php';

$app->run();

