<?php

include_once("./model/mainModel.php");

class crudEmpleadoC extends mainModel
{

    public static function obtener_formulario($form): array
    {
        if (!is_array($form)) {
            throw new InvalidArgumentException("debe pasarse un array");
        }

        //sanitizar nombre
        $form["empleado_nombre"] = ucwords(trim($form["empleado_nombre"]));
        //sanitizar cedula
        if(strlen($form["empleado_cedula"]) < 9 || strlen($form["empleado_cedula"]) > 11){
            throw new InvalidArgumentException("la cedula debe tener entre 9 y 11 caracteres");
        }
        $form["empleado_cedula"] = trim($form["empleado_cedula"]);
        //sanitizar fecha de nacimiento ()

        return $form;
    }

    public static function registrarEmpleado($form)
    {
        if (!is_array($form)) {
            throw new InvalidArgumentException("debe pasarse un array");
        }



        return;
    }

    public static function obtener_id()
    {
        return $_SESSION["id_empresa"];
    }

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
        switch (self::desencriptar_dato($_SESSION["moneda"])) {
            case "Dolar":
                return MONEDA["dolar"];
            case "Bolivar":
                return MONEDA["bolivar"];
            case "Euro":
                return MONEDA["euro"];
            default:
                return "error";
        }
    }

    public static function generar_id()
    {
        return strtoupper(substr(uniqid("USR_"), 0, 12));
    }
}
