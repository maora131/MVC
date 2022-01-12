<?php
namespace App\Model;

class Usuario {
    
    //Variables o atributos
    var $id;
    var $usuario;
    var $clave;
    var $fecha_acceso;
    var $activo;
    var $usuarios;
    var $noticias;

    function __construct($fecha=null){
        
        $this->id = ($fecha) ? $fecha->id : null;
        $this->usuario = ($fecha) ? $fecha->usuario : null;
        $this->clave = ($fecha) ? $fecha->clave : null;
        $this->fecha_acceso = ($fecha) ? $fecha->fecha_acceso : null;
        $this->activo = ($fecha) ? $fecha->activo : null;
        $this->usuarios = ($fecha) ? $fecha->usuarios : null;
        $this->noticias = ($fecha) ? $fecha->noticias : null;
        
    }

}