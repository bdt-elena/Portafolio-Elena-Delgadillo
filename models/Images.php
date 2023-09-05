<?php 

namespace Model;

class Images extends SuperClass{

    protected static $tabla = 'images';
    protected static $columnasDB = ['id', 'imagen', 'id_project'];

    public $id;
    public $imagen;
    public $id_project;
    
}

?>