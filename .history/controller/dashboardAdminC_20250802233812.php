<?php

require_once("./model/mainModel.php");
require_once("./model/seguridadM.php");

class dashboardAdminC extends mainModel
{

    public static function desencriptar_sesion()
    {
        //desencriptar datos de la sesion en el controlador del dashboard para poder mostrar los datos del usuario
        $datos = seguridadM::desencriptar_varios_datos($_SESSION);
        return $datos;
    }

    public function obtener_ruta_logo(){
        return $
    }
}
