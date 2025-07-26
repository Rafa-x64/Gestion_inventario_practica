<?php

include_once("./config/server.php");

class mainModel
{

    protected static function conectar_base_datos()
    {
        try {
            $con = new PDO(SGBD, USUARIO, CONSTRASEÑA);
            $con->exec("SET CARACTER SET utf8_spanish2_ci");
            return $con;
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }

    protected static function consulta($sentenciaSQL, $)
    {
        $operacion = self::conectar_base_datos()->prepare($sentenciaSQL);
        $operacion->execute();
        return $operacion;
    }
}
