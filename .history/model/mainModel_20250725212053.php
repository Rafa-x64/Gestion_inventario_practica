<?php

include_once("./config/server.php");

class mainModel
{

    protected static function conectar_base_datos()
    {
        try {
<<<<<<< HEAD
            $con = new PDO(SGBD, USUARIO, CONSTRASEÑA, [
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
                PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES 'utf8' COLLATE 'utf8_spanish_ci'"
            ]);
=======
            $con = new PDO(SGBD, USUARIO, CONSTRASEÑA);
            $con->exec("SET CARACTER SET utf8");
>>>>>>> 5a616af58d0ab88c4bf6e4f3b2a6ad4cf6221d56
            return $con;
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }

<<<<<<< HEAD
    protected static function consulta($sentenciaSQL)
=======
    protected static function consulta_simple($sentenciaSQL)
>>>>>>> 5a616af58d0ab88c4bf6e4f3b2a6ad4cf6221d56
    {
        $operacion = self::conectar_base_datos()->prepare($sentenciaSQL);
        $operacion->execute();
        return $operacion;
    }
}
