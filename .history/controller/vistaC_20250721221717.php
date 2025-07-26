<?php
require_once("./model/vistaM.php"); //debe incluir el codigo del modelo

class vistaC extends vistaM //extiende del modelo para usar sus metodos
{

    public function cargarVista() //funcion que carga la vista segun la url que se obtiene como parametro
    {
        if (isset($_GET["page"])) { //page es el parametro especificado en .htaccess
            
        }else{

        }

        $vista = self::obtenerVista($_GET["page"]); //se asigna esa url a vista si esta establecido

        require("view/plantilla.php"); //se requiere la plantilla para poder mostrar esa vista
    }
}
