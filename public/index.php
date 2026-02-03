<?php 

require_once __DIR__ . '/../includes/app.php';

use MVC\Router;
use Controllers\IndexController;
use Controllers\Page404Controller;

$router = new Router();


// Index
$router->get('/', [IndexController::class, 'index']);
$router->post('/', [IndexController::class, 'index']);

// 404
$router->get('/404',[Page404Controller::class, 'error']);

$router->comprobarRutas();