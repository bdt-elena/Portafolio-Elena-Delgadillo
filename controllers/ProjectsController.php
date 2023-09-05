<?php 

namespace Controllers;

use MVC\Router;

class ProjectsController{

    public static function index(Router $router){

        $router->render('/pages/index', [
            'titulo' => 'Inicio'
        ]);
    }
}
?>