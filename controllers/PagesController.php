<?php 

namespace Controllers;

use Model\ArtDesignProjects;
use Model\Images;
use Model\Project;
use Model\ResponsiveImages;
use MVC\Router;

class PagesController{

    public static function index(Router $router){

        $router->render('/pages/index', [
            'titulo' => 'Inicio'
        ]);
    }

    public static function projects(Router $router){

        $projects = Project::all();
        $projectsDesign = ArtDesignProjects::where_all('id_categoria', '1');;
        $projectsArt = ArtDesignProjects::where_all('id_categoria', '2');
        array_shift($projectsArt);
        
        $router->render('pages/projects', [
            'titulo' => 'Projects',
            'projects' => $projects,
            'projectsDesign' => $projectsDesign,
            'projectsArt' => $projectsArt
        ]);
    }

    public static function aboutme(Router $router){

        $router->render('pages/aboutme', [
            'titulo' => 'About Me'
        ]);
    }

    public static function project(Router $router){

         // Validar el ID
        $id = $_GET['id'];
        $id = filter_var($id, FILTER_VALIDATE_INT);

        if(!$id) {
            header('Location: /projects');
        }

        $project = Project::find($id);
        $images = Images::where_all('id_project', $project->id);
        $responsive_images = ResponsiveImages::where_all('id_project', $project->id);

        if(!$project){
            header('Location: /projects');
        }

        $router->render('pages/project', [
            
            'project' => $project,
            'tecnologias' => $project->tecnologias,
            'responsive' => $responsive_images,
            'images' => $images
        ]);
    }
}

?>