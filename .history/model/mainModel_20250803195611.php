<?php

include_once("./config/server.php");
include_once("./model/seguridadM.php");

class mainModel
{

    protected static function conectar_base_datos()
    {
        try {
            $con = new PDO(SGBD, USUARIO, CONSTRASEÑA, [
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
                PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES 'utf8' COLLATE 'utf8_spanish_ci'"
            ]);
            return $con;
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }

    protected static function consulta($sentenciaSQL)
    {
        $operacion = self::conectar_base_datos()->prepare($sentenciaSQL);
        $operacion->execute();
        return $operacion;
    }

    protected static function desencriptar_sesion()
    {
        //desencriptar datos de la sesion en el controlador del dashboard para poder mostrar los datos del usuario
        $datos = self::desencriptar_varios_datos($_SESSION);
        return $datos;
    }

    //----------------hashear una contraseña------------------------
    protected static function hashear_contraseña($contraseña): string
    {
        if (!is_string($contraseña)) {
            throw new InvalidArgumentException("el parametro debe ser un string");
        }

        $options = ["cost" => 12];
        $contraseña = password_hash($contraseña, PASSWORD_DEFAULT, $options);

        return $contraseña;
    }

    //pendiente por hacer al hacer el login
    protected static function verificar_contraseña($contraseña, $contraseña_hasheada): bool
    {
        if (!is_string($contraseña)) {
            throw new InvalidArgumentException("el parametro debe ser un string");
        }

        if (password_verify($contraseña, $contraseña_hasheada) == true) {
            return true; //contraseña valida
        } else {
            return false; //contraseña incorrecta
        };
    }

    //----------------encriptar varios datos------------------------
    public static function encriptar_varios_datos($datos): array
    {
        if (!is_array($datos)) {
            throw new InvalidArgumentException("el parametro debe ser un array asociativo");
        }

        $resultado = [];

        foreach ($datos as $key => $value) {
            $valor_encriptado = self::encriptar_dato($value);
            $resultado[$key] = $valor_encriptado;
        }

        return $resultado;
    }

    //----------------desencriptar varios datos------------------------
    public static function desencriptar_varios_datos($datos): array
    {
        if (!is_array($datos)) {
            throw new InvalidArgumentException("el parametro debe ser un array asociativo");
        }

        $resultado = [];

        foreach ($datos as $key => $value) {
            $valor_desencriptado = self::desencriptar_dato($value);
            $resultado[$key] = $valor_desencriptado;
        }

        return $resultado;
    }

    //----------------encriptar un dato------------------------
    public static function encriptar_dato($dato)
    {
        if (!is_string($dato)) {
            throw new InvalidArgumentException("el parametro debe ser un string");
        }

        return openssl_encrypt($dato, METHOD, CLAVE, 0, IV);
    }

    //----------------desencriptar un dato------------------------
    public static function desencriptar_dato($dato)
    {
        if (!is_string($dato)) {
            throw new InvalidArgumentException("el parametro debe ser un string");
        }

        return openssl_decrypt($dato, METHOD, CLAVE, 0, IV);
    }
}
