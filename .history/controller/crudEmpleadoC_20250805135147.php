<?php

include_once("./model/mainModel.php");

class crudEmpleadoC extends mainModel
{

    public static function desencriptar_sesion()
    {
        return parent::desencriptar_sesion();
    }

    public static function obtener_fecha_registro()
    {
        return $_COOKIE["empleado_fecha_ingreso"];
    }

    public static function obtener_supervisor()
    {
        return self::desencriptar_dato($_SESSION["ROL"]);
    }

    public static function obtener_moneda()
    {
        switch(self::desencriptar_dato($_SESSION["moneda"])){
            case "":
        }
        return self::desencriptar_dato($_SESSION["moneda"]) . "es";
    }
}
