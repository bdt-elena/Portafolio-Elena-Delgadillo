<?php 

namespace Model;

class ResponsiveImages extends SuperClass{

    protected static $tabla = 'responsive_images';
    protected static $columnasDB = ['id', 'imagen', 'id_project'];

    public $id;
    public $imagen;
    public $id_project;
    
}

?>