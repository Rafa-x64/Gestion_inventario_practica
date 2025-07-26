<?php

include("./config/server.php");

class mainModel
{

    protected static function conectar_base_datos()
    {
        try {
            $con = new PDO(SGBD, USUARIO, CONSTRASEÑA);
            $con->exec("SET CARACTER SET utf8");
            return $con;
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }

    protected static function consulta_simple ($sentenciaSQL){
        $operacion = self::conectar_base_datos()->;
        $operacion->execute();
    }
}
