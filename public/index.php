<?php

use Controllers\PagesController;
use MVC\Router;

require_once __DIR__ . '/../includes/app.php';

$router = new Router();

$router->get('/', [PagesController::class, 'index']);
$router->get('/projects', [PagesController::class, 'projects']);
$router->get('/aboutme', [PagesController::class, 'aboutme']);
$router->get('/project', [PagesController::class, 'project']);


$router->comprobarRutas();