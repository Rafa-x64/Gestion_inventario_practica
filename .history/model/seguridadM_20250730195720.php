<?php

class seguridadM
{

    public static function hasear_contraseña($contraseña): string
    {
        if (!is_string($contraseña)) {
            throw new InvalidArgumentException("el parametro debe ser un string");
        }

        //logica de hasheo de contraseña
        $options = ["cost" => 12];
        $contraseña = password_hash($contraseña, PASSWORD_DEFAULT, $options);

        return $contraseña;
    }

    public static function verificar_contraseña($contraseña, $contraseña_hasheada): bool
    {
        if (!is_string($contraseña) && !is_string($contraseña_hasheada)) {
            throw new InvalidArgumentException("los parametros deben ser un string");
        }

        //logica de hasheo de contraseña
        $options = ["cost" => 12];
        $contraseña 
        if (password_verify($contraseña_hasheada, PASSWORD_DEFAULT, $options) == ) {
            return true; //contraseña valida
        } else {
            return false; //contraseña incorrecta
        };
    }

    public static function encriptar_varios_datos($datos): array
    {
        if (!is_array($datos)) {
            throw new InvalidArgumentException("el parametro debe ser un array");
        }

        //logica de encriptar


        return $datos;
    }

    public static function desencriptar_varios_datos($datos)
    {
        if (!is_array($datos)) {
            throw new InvalidArgumentException("el parametro debe ser un array");
        }

        //logica de desencriptacion

        return $datos;
    }

    public static function encriptar_dato($dato)
    {
        if (!is_string($dato)) {
            throw new InvalidArgumentException("el parametro debe ser un string");
        }

        //logica de encriptacion

        return $dato;
    }

    public static function desencriptar_dato($dato)
    {
        if (!is_string($dato)) {
            throw new InvalidArgumentException("el parametro debe ser un string");
        }

        //logica de desencriptacion

        return $dato;
    }
}
