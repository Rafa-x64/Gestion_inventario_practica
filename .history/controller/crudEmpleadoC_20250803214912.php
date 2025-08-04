<?php

include_once("./model/mainModel.php");

class crudEmpleadoC extends mainModel
{
    public static function obtener_formulario($formulario):array{
        return $formulario
    }

    public static function desencriptar_sesion()
    {
        return parent::desencriptar_sesion();
    }
}
