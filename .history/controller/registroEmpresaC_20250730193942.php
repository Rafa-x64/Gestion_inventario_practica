<?php


include_once("./model/mainModel.php");
include_once("./model/empresaM.php");


class registroEmpresaC extends mainModel
{
    public static function obtener_formulario($formulario, $imagen)
    {
        $id_empresa = self::generarIdEmpresa();
        $nombre_legal = $formulario['nombre_legal'];
        $rif = $formulario['prefijo'] . $formulario['rif'];
        $direccion = $formulario['direccion'];
        $contacto = $formulario['contacto'];
        $correo = $formulario['correo'];
        $nombre_representante = $formulario['nombre_representante'];
        $fecha_registro = $formulario['fecha_registro'];
        $estado_condicion = $formulario['estado_condicion'];
        $tipo_empresa = $formulario['tipo_empresa'];
        $logo = $imagen["logo"];
        $moneda = $formulario['moneda'];
        $zona_horaria = $formulario['zona_horaria'];
        $usuario_admin = $formulario['usuario_admin'];
        $contraseña = $formulario['contraseña_admin']; //contraseña sin hashear
        $contraseña_admin = seguridadM::hasear_contraseña($contraseña); //contraseña hasheada

        if ($logo['error'] === UPLOAD_ERR_OK) {
            $nombreFinal = uniqid('logo_') . '.' . pathinfo($logo['name'], PATHINFO_EXTENSION);
            $rutaDestino = __DIR__ . '/../uploads/logos/' . $nombreFinal;

            if (move_uploaded_file($logo['tmp_name'], $rutaDestino)) {
                // Éxito al mover el archivo
            } else {
                return;
            }
        } else {
            return;
        }

        $empresa = new empresaM(
            $id_empresa,
            $nombre_legal,
            $rif,
            $direccion,
            $contacto,
            $correo,
            $nombre_representante,
            $fecha_registro,
            $estado_condicion,
            $rutaDestino,
            $tipo_empresa,
            $moneda,
            $zona_horaria,
            $usuario_admin,
            $contraseña_admin
        );

        if ($empresa->registrar_empresa() == true) {
            self::guardar_datos_sesion($formulario);
            return true;
        } else {
            return false;
        };
    }

    public static function obtener_zona_horaria()
    {
        if (isset($_COOKIE['timezone'])) {
            $zona = $_COOKIE['timezone'];
            return $zona;
        } else {
            return "No se ha detectado la zona horaria.";
        }
    }
    public static function obtener_feha_registro()
    {
        if (isset($_COOKIE['registro_hora'])) {
            $fecha = $_COOKIE['registro_hora'];
            return $fecha;
        } else {
            return "No se ha detectado la fecha de registro.";
        }
    }

    private static function generarIdEmpresa()
    {
        return uniqid("EMP_");
    }

    /*private static function hashear_contraseña($contraseña): string
    {
        $options = ["cost" => 12];
        return password_hash($contraseña, PASSWORD_DEFAULT, $options);
    }*/

    private static function guardar_datos_sesion($formulario)
    {
        foreach ($formulario as $key => $value) {
            $valor_encriptado = self::encriptar_dato($value);
            $_SESSION[$key] = $valor_encriptado;
        }
    }

    /*private static function encriptar_dato($dato): string
    {
        return openssl_encrypt($dato, METHOD, CLAVE, 0, IV);
    }
}
