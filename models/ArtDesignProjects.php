<?php 

namespace Model;

class ArtDesignProjects extends SuperClass{

    protected static $tabla = 'art_edit_projects';
    protected static $columnasDB = ['id', 'nombre', 'id_categoria'];

    public $id;
    public $nombre;
    public $id_categoria;
    
}

?>