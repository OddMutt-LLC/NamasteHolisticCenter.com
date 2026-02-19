<?php 

require_once __DIR__ . '/../includes/app.php';

use MVC\Router;
use Controllers\IndexController;
use Controllers\Page404Controller;
use Controllers\SubpagesController;

$router = new Router();


// Index
$router->get('/', [IndexController::class, 'index']);
$router->post('/', [IndexController::class, 'index']);

// Subpages

$router->get('/about', [SubpagesController::class, 'about']);
$router->post('/about', [SubpagesController::class, 'about']);

$router->get('/faq', [SubpagesController::class, 'faq']);
$router->post('/faq', [SubpagesController::class, 'faq']);

$router->get('/contact', [SubpagesController::class, 'contact']);
$router->post('/contact', [SubpagesController::class, 'contact']);

$router->get('/specialties/fertility', [SubpagesController::class, 'fertility']);
$router->post('/specialties/fertility', [SubpagesController::class, 'fertility']);

$router->get('/specialties/pain-management', [SubpagesController::class, 'painManagement']);
$router->post('/specialties/pain-management', [SubpagesController::class, 'painManagement']);

// 404
$router->get('/404',[Page404Controller::class, 'error']);

$router->comprobarRutas();