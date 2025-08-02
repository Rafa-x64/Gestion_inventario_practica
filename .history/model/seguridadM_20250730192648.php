<?php

class seguridadM
{

    public static function hasear_contraseña($contraseña) {
        if (!is_array($contraseña)) {
            throw new InvalidArgumentException("el parametro debe ser un array asociativo");
        }

        //logica de hasheo de contraseña

        return $contraseña;
    }

    public static function deshashear_contraseña($contraseña)
    {
        if (!is_array($contraseña)) {
            throw new InvalidArgumentException("el parametro debe ser un array asociativo");
        }

        //logica de hasheo de contraseña

        return $contraseña;
    }

    public static function encriptar_varios_datos($datos)
    {
        if (!is_array($datos)) {
            throw new InvalidArgumentException("el parametro debe ser un array asociativo");
        }

        //logica de encriptar

        return 
    }

    public static function desencriptar_varios_datos($datos)
    {
        if (!is_array($datos)) {
            throw new InvalidArgumentException("el parametro debe ser un array asociativo");
        }

        //logica de desencriptacion

    }

    public static function encriptar_dato($dato)
    {
        if (!is_string($dato)) {
            throw new InvalidArgumentException("el parametro debe ser un string");
        }

        //logica de encriptacion
    }

    public static function desencriptar_dato($dato)
    {
        if (!is_string($dato)) {
            throw new InvalidArgumentException("el parametro debe ser un string");
        }

        //logica de desencriptacion
    }
}
