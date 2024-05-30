<?php

namespace Controllers;


use MVC\Router;


class DashboardController {
    public static function index(Router $router) {

        session_start();
        isAuth();

        $router->render('dashboard/index', [
            'titulo' => 'Ocurrencias Técnicas'
        ]);

    }

    public static function nueva_ocurrencia(Router $router) {
        session_start();
        isAuth();

        $router->render('dashboard/nueva-ocurrencia', [
            'titulo' => 'Nueva Ocurrencia'
        ]);        
    }

    public static function perfil(Router $router) {
        session_start();
        isAuth();

        $router->render('dashboard/perfil', [
            'titulo' => 'Perfil'
        ]);        
    }

    public static function nuevo_perfil(Router $router) {
        session_start();
        isAuth();

        $router->render('dashboard/nuevo-perfil', [
            'titulo' => 'Nuevo Perfil'
        ]);        
    }
}