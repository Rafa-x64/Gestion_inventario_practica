<?php

class seguridadM {

    public static function hasear_contraseña($contraseña){}

    public static function deshashear_contraseña($contraseña){
        return $contraseña;
    }

    public static function encriptar_varios_datos($datos){
        if(!is_array($datos)){
            throw new InvalidArgumentException("el parametro debe ser un array asociativo");
        }

        //

    }

    public static function desencriptar_varios_datos($datos){}

    public static function encriptar_dato($dato) {}

    public static function desencriptar_dato($dato){}


}

?>