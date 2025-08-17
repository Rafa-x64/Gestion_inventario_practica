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
    public static function login_usuario($nombre_legal, $usuario, $contraseña): array
    {
        try {
            $con = self::conectar_base_datos();

            // Buscar en empresas (super administrador)
            $stmt = $con->prepare("SELECT * FROM empresas WHERE nombre_legal = ? AND usuario_admin = ?");
            $stmt->execute([$nombre_legal, $usuario]);
            $empresa = $stmt->fetch(PDO::FETCH_ASSOC);

            if ($empresa) {
                if (parent::verificar_contraseña($contraseña, $empresa["contraseña_admin"])) {
                    $empresa["ROL"] = "super administrador";
                    self::guardar_sesion($empresa);
                    return ["success" => true, "rol" => "super administrador", "mensaje" => "Acceso concedido como super administrador"];
                } else {
                    return ["success" => false, "mensaje" => "Contraseña incorrecta para super administrador"];
                }
            }

            // Buscar en empleados (administrador o vendedor)
            $stmt = $con->prepare("SELECT * FROM empleados WHERE usuario = ? AND estado = 'activo'");
            $stmt->execute([$usuario]);
            $empleado = $stmt->fetch(PDO::FETCH_ASSOC);

            if ($empleado) {
                if (parent::verificar_contraseña($contraseña, $empleado["contraseña"])) {
                    self::guardar_sesion($empleado);
                    return ["success" => true, "rol" => $empleado["ROL"], "mensaje" => "Acceso concedido como " . $empleado["ROL"]];
                } else {
                    return ["success" => false, "mensaje" => "Contraseña incorrecta para empleado"];
                }
            }

            return ["success" => false, "mensaje" => "Usuario no encontrado en ninguna tabla"];
        } catch (PDOException $e) {
            return ["success" => false, "mensaje" => "Error en login: " . $e->getMessage()];
        }
    }

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
