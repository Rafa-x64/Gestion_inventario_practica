<?php
require_once("./model/vistaM.php");

class vistaC extends vistaM
{

    public function cargarVista()
    {
        if (isset($_GET["page"])) {
            $vista = self::obtenerVista($_GET["page"]);
        } else {
            $vista = "inicio-view.php";
        }

        // IMPORTANTE: define $vista como variable accesible
        require("view/plantilla.php");
    }
}
