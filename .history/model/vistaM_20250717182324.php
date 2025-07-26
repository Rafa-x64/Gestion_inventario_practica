<?php

class vistaM
{
    //metodo que obtiene la vista segun la url que se obtiene como parametro
    protected static function obtenerVista($pagina) //recive una variable pagina
    {
        $paginas_existentes = ["404", "inicio-sesion", "inicio", "registro"]; //lista de paginas del proyecto
        if (!in_array($pagina, $paginas_existentes)) { //si no esta en el array entonces...
            return "404-view.php"; //pagina de 404
            exit();
        }
        
        return $pagina . "-view.php"; //retorna $pagina-view para ser abierta por el controlador
    }
}
