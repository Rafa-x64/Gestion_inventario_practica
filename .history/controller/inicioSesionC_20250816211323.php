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
    public static function login_usuario($usuario, $contraseña): bool
    {
        try {
            $con = self::conectar_base_datos();

            // 1. Buscar en tabla empresas (super admin)
            $stmt = $con->prepare("SELECT * FROM empresas WHERE usuario_admin = ?");
            $stmt->execute([$usuario]);
            $empresa = $stmt->fetch(PDO::FETCH_ASSOC);

            if ($empresa && parent::verificar_contraseña($contraseña, $empresa["contraseña_admin"])) {
                $empresa["ROL"] = "super_admin";
                self::guardar_sesion($empresa);
                return true;
            }

            // 2. Buscar en tabla empleado (admin y vendedor)
            $stmt = $con->prepare("SELECT * FROM empleados WHERE usuario = ? AND estado = 'activo'");
            $stmt->execute([$usuario]);
            $empleado = $stmt->fetch(PDO::FETCH_ASSOC);

            if ($empleado && parent::verificar_contraseña($contraseña, $empleado["contraseña"])) {
                self::guardar_sesion($empleado);
                return true;
            }

            return false; // No se encontró usuario válido

        } catch (PDOException $e) {
            echo "Error en login: " . $e->getMessage();
            return false;
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
