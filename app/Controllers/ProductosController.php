<?php
namespace App\Controllers;

use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\RequestInterface as Request;
use App\Models\Producto;
use League\Plates\Engine;

class ProductosController {

    private $view;

    public function __construct(Engine $view)
    {
        $this->view = $view;
        require_once __DIR__.'/../../config/templates.php';
    }

    public function index(Request $request, Response $response, array $args){
        $prod = Producto::all();
        echo $this->view->render('views::home', ['productos' => $prod]);
        return $response;
    }

}