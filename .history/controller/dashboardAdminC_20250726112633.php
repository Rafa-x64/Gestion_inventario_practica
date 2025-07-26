<?php

require_once("./model/mainModel.php");

class dashboardAdminC extends mainModel
{

    public static function desencriptar_datos()
    {
        //desencriptar datos de la sesion en el controlador del dashboard para poder mostrar los datos del usuario
        $datos = $_SESSION;
        foreach ($datos as $key => $value) {
            $valor_desencriptado = openssl_decrypt($value, METHOD, CLAVE, 0, IV);
            $_SESSION[$key] = $valor_desencriptado;
        }
    }

    public static function desencriptar_dato
}
