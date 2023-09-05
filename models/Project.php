<?php 

namespace Model;

class Project extends SuperClass{

    protected static $tabla = 'project';
    protected static $columnasDB = ['id', 'nombre', 'descripcion', 'funcionalidad', 'tecnologias', 
    'github', 'netlify', 'imagen'];

    public $id;
    public $nombre;
    public $descripcion;
    public $funcionalidad;
    public $tecnologias;
    public $github;
    public $netlify;
    public $imagen;

    public function __construct($args = [])
    {
        $this->id = $args['id'] ?? null;
        $this->nombre = $args['nombre'] ?? '';
        $this->descripcion = $args['descripcion'] ?? '';
        $this->funcionalidad = $args['funcionalidad'] ?? '';
        $this->tecnologias = $args['tecnologias'] ?? '';
        $this->github = $args['github'] ?? 0;
        $this->netlify = $args['netlify'] ?? '';
        $this->imagen = $args['imagen'] ?? 0;
    }
}
?>