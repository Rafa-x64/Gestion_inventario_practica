<?php

require_once("./model/mainModel.php");
require_once("./model/");

class dashboardAdminC extends mainModel
{

    public static function desencriptar_sesion()
    {
        //desencriptar datos de la sesion en el controlador del dashboard para poder mostrar los datos del usuario
        $datos = $_SESSION;
        
    }

    public static function desencriptar_un_dato($dato){
        
    }
}
