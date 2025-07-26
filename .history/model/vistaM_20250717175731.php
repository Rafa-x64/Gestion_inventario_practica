<?php

class vistaM
{

    protected static function obtenerVista($pagina)
    {
        $paginas_existentes = ["404", "inicio-sesion", "inicio", "registro"];
        if (in_array($pagina, $paginas_existentes)) {
            return $pagina . "-view.php";
        }
        return ;
    }
}
