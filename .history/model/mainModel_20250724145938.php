<?php

include_once("./config/server.php");

class mainModel
{

    protected static function conectar_base_datos()
    {
        try {
            $con = new PDO(SGBD, USUARIO, CONSTRASEÑA, [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
            PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES 'utf8' COLLATE 'utf8_spanish_ci'"
        ]);;
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
}
