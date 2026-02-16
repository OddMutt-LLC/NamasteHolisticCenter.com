<?php

namespace Controllers;

use MVC\Router;

class SubpagesController {
    public static function fertility(Router $router) {

        $alertas = [];

        // Render a la vista 
        $router->render('subpages/fertility', [
            'titulo' => 'Fertility',
            'alertas' => $alertas
        ]);
    }
}