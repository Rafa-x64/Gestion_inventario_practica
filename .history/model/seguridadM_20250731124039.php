<?php

include_once("./model/mainModel.php");

class seguridadM extends mainModel
{

    //----------------hashear una contraseña------------------------
    public static function hashear_contraseña($contraseña): string
    {
        if (!is_string($contraseña)) {
            throw new InvalidArgumentException("el parametro debe ser un string");
        }

        $options = ["cost" => 12];
        $contraseña = password_hash($contraseña, PASSWORD_DEFAULT, $options);

        return $contraseña;
    }

    //pendiente por hacer al hacer el login
    public static function verificar_contraseña($contraseña, $contraseña_hasheada): bool
    {
        if (!is_string($contraseña)) {
            throw new InvalidArgumentException("el parametro debe ser un string");
        }

        //logica de hasheo de contraseña
        $options = ["cost" => 12];

        if (password_verify($contraseña, $contraseña_hass) == ) {
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
