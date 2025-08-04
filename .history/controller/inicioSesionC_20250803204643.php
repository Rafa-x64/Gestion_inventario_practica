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
    public static function validar_usuario($nombre_legal, $usuario, $contraseña): bool
    {
        if (!is_string($nombre_legal) || !is_string($usuario) || !is_string($contraseña)) {
            throw new InvalidArgumentException("los parametros deben ser strings");
            return false;
        }

        try {

            $con = self::conectar_base_datos();
            $obtener = $con->prepare("SELECT * FROM empresas WHERE nombre_legal = ? AND usuario_admin = ?");
            $obtener->execute([$nombre_legal, $usuario]);
            $datos = $obtener->fetch(PDO::FETCH_ASSOC);

            if ($datos["contraseña_admin"] == false || $datos["nombre_legal"] == null || $datos["usuario_admin"] == null) {
                return false;
            }

            if (!parent::verificar_contraseña($contraseña, $datos["contraseña_admin"])) {
                return false; //contraseña incorrecta
            }

            self::guardar_sesion($datos);
            return true; //contraseña correcta, datos encriptados y guardados en sesion

        } catch (PDOException $e) {
            echo $e->getMessage();
            return false; //error
        }
    }

    //---------------guardar los datos del usuario en la sesion----------------
    private static function guardar_sesion($datos_empleado)
    {
        foreach ($datos_empleado as $key => $value) {
            $dato = parent::encriptar_dato($value);
            $_SESSION[$key] = $dato;
        }
    }
}
