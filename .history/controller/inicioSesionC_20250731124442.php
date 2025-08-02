<?php

include_once("./model/mainModel.php");
include_once("./model/seguridadM.php");

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
        if (!is_string($nombre_legal) || !is_string($usuario) || !is_string($contraseña)) {
            throw new InvalidArgumentException("los parametros deben ser strings");
            return false;
        }

        try {
            $con = self::conectar_base_datos();
            $obtener = $con->prepare("SELECT * FROM empresas WHERE nombre_legal = ? AND usuario_admin = ? AND contraseña_admin = ?");
            $obtener->execute([$nombre_legal, $usuario, $]);

            if (seguridadM::verificar_contraseña($contraseña, $datos_empleado["contraseña_admin"]));
        } catch (PDOException $e) {
            echo $e->getMessage();
            return false;
        }
    }
}
