<?php

class inicioSesionC extends mainModel
{
    public static function obtener_formulario($formulario): array
    {
        if (!is_array($formulario)) {
            throw new InvalidArgumentException("el parametro debe ser un array asociativo");
        }



        return $formulario;
    }

    public static function validar_usuario(): bool 
    {
        

        return true;
    }
}
