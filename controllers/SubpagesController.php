<?php

namespace Controllers;

use MVC\Router;

class SubpagesController {
    public static function faq(Router $router) {

        $alertas = [];

        // Render a la vista 
        $router->render('subpages/faq', [
            'titulo' => 'Frequently Asked Questions',
            'alertas' => $alertas
        ]);
    }

    public static function contact(Router $router) {

        $alertas = [];

        // Render a la vista 
        $router->render('subpages/contact', [
            'titulo' => 'Contact Us',
            'alertas' => $alertas
        ]);
    }

    public static function fertility(Router $router) {

        $alertas = [];

        // Render a la vista 
        $router->render('subpages/fertility', [
            'titulo' => 'Fertility',
            'alertas' => $alertas
        ]);
    }
}