<?php
require_once("./model/vistaM.php");//debe incluir el codigo del modelo

class vistaC extends vistaM//extiende del modelo para usar sus metodos
{

    public function cargarVista()//funcion que carga la vista segun la url que se obtiene como parametro
    {
        if (isset($_GET["page"])) {//page es el parametro especificado en .htaccess
            $vista = self::obtenerVista($_GET["page"]);//
        } else {
            $vista = "inicio-view.php";
        }

        // IMPORTANTE: define $vista como variable accesible
        require("view/plantilla.php");
    }
}
