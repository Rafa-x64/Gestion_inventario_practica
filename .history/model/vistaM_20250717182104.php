<?php

class vistaM
{
    //metodo que obtiene la vista segun la url que se obtiene como parametro
    protected static function obtenerVista($pagina)//recive una variable pagina
    {
        $paginas_existentes = ["404", "inicio-sesion", "inicio", "registro"];//lista de paginas del proyecto
        if (in_array($pagina, $paginas_existentes)) {//si estan en el array entonces...
            return $pagina . "-view.php";//retorna $pagina-view para ser abierta por el controlador
        } else {
            return "404-view.php";//si no esta en el array entonces 
        }

        return "inicio-view.php";
    }
}
