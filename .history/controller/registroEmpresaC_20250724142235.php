<?php

include_once("./model/mainModel.php");
include_once("./model/empresaM.php");

class registroEmpresaC extends mainModel
{

    public static function obtener_formulario($formulario)
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
        $logo = $formulario['logo'];
        $tipo_empresa = $formulario['tipo_empresa'];
        $moneda = $formulario['moneda'];
        $zona_horaria = $formulario['zona_horaria'];
        $usuario_admin = $formulario['usuario_admin'];
        $contraseña_admin = $formulario['contraseña_admin'];
        $logo = $_FILES["logo"];

        // Validamos que no haya errores al subir
        if ($logo['error'] === UPLOAD_ERR_OK) {
            // Puedes renombrar el archivo si quieres evitar duplicados
            $nombreFinal = uniqid('logo_') . '.' . pathinfo($logo['name'], PATHINFO_EXTENSION);
            $rutaDestino = SERVERURL . $nombreFinal;

            if (move_uploaded_file($logo['tmp_name'], $rutaDestino)) {
                // Éxito al mover el archivo
            } else {
                echo "Error al guardar la imagen en el servidor.";
                return;
            }
        } else {
            echo "Error con el archivo subido.";
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
            $imagen = ["nombre" => $logo["name"], "tipo" => $logo["type"], "tamaño" => $logo["size"], "ruta" => $logo["tmp_name"], "error" => $logo["error"]],
            $tipo_empresa,
            $moneda,
            $zona_horaria,
            $usuario_admin,
            $contraseña_admin
        );

        $empresa->registrar_empresa();
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
}
