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

    public static function painManagement(Router $router) {

        $alertas = [];

        // Render a la vista 
        $router->render('subpages/pain-management', [
            'titulo' => 'Pain Management & Functional Wellness',
            'alertas' => $alertas
        ]);
    }

    public static function fertility(Router $router) {

        $alertas = [];

        // Render a la vista 
        $router->render('subpages/fertility', [
            'titulo' => 'Fertility Support for Women & Men',
            'alertas' => $alertas
        ]);
    }
}