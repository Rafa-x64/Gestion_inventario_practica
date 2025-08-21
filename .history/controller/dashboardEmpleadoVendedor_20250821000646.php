<?php

require_once("./model/mainModel.php");

class dashboardEmpleadoVC extends mainModel
{

    public static function desencriptar_sesion()
    {
        //desencriptar datos de la sesion en el controlador del dashboard para poder mostrar los datos del usuario
        $datos = parent::desencriptar_varios_datos($_SESSION);
        return $datos;
    }
}
