<?php

include_once("./model/mainModel.php");
include_once()

class inicioSesionC extends mainModel
{
    public static function obtener_formulario($formulario): array
    {
        if (!is_array($formulario)) {
            throw new InvalidArgumentException("el parametro debe ser un array asociativo");
        }

        self::validar_usuario($formulario['nombre_legal'], $formulario['usuario'], $formulario['contraseña']);

        return $formulario;
    }

    public static function validar_usuario($nombre_legal, $usuario, $contraseña): bool
    {


        return true;
    }
}
