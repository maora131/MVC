<?php
namespace App\Controller;

use App\Model\Noticia;
use App\Helper\ViewHelper;
use App\Helper\DbHelper;


class AppController
{
    var $db;
    var $view;

    function __construct()
    {
        //Conexión coa BBDD
        $dbHelper = new DbHelper();
        $this->db = $dbHelper->db;

        //Instanciar ViewHelper
        $viewHelper = new ViewHelper();
        $this->view = $viewHelper;
    }

    public function index(){

        //Consultar á bbdd
        $rowset = $this->db->query("SELECT * FROM noticias WHERE activo=1 AND home=1 ORDER BY fecha DESC");

        //Asignar resultados a un array de instancias do modelo
        $noticias = array();
        while ($row = $rowset->fetch(\PDO::FETCH_OBJ)){
            array_push($noticias,new noticia($row));
        }

        //Chamar á vista
        $this->view->vista("app", "index", $noticias);
    }

    public function acercade(){

        //Chamar á vista
        $this->view->vista("app", "acerca-de");

    }

    public function contacto(){

        //Chamar á  vista
        $this->view->vista("app", "contacto");

    }

    public function noticias(){

        //Consultar á bbdd
        $rowset = $this->db->query("SELECT * FROM noticias WHERE activo=1 ORDER BY fecha DESC");

        //Asignar os resultados a un array de instancias do modelo
        $noticias = array();
        while ($row = $rowset->fetch(\PDO::FETCH_OBJ)){
            array_push($noticias,new noticia($row));
        }

        //Chamar á vista
        $this->view->vista("app", "noticias", $noticias);

    }

    public function noticia($slug){

        //Consultar á bbdd
        $rowset = $this->db->query("SELECT * FROM noticias WHERE activo=1 AND slug='$slug' LIMIT 1");

        //Asignar o resultado a unha instancia do modelo
        $row = $rowset->fetch(\PDO::FETCH_OBJ);
        $noticia = new noticia($row);

        //Chamar á vista
        $this->view->vista("app", "noticia", $noticia);

    }
}