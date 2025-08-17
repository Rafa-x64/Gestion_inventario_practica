<?php

include_once("./model/mainModel.php");

class inicioSesionC extends mainModel
{
    //---------------------obtener formulario desde la vista------------------------
    public static function obtener_formulario($formulario): array
    {
        if (!is_array($formulario)) {
            throw new InvalidArgumentException("el parametro debe ser un array asociativo");
        }

        $datos_usuario = $formulario;

        return $datos_usuario;
    }

    //---------------------validar un usuario ingresado en la vista-------------------------
    

    //---------------guardar los datos del usuario en la sesion----------------
    private static function guardar_sesion($datos)
    {
        foreach ($datos as $key => $value) {
            if (!is_null($value)) {
                $_SESSION[$key] = parent::encriptar_dato($value);
            }
        }
    }
}
