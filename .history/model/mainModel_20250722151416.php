<?php

include("./config/server.php");

class mainModel
{

    protected static function conectarBD()
    {
        try {
            $con = new PDO(SGBD, USUARIO, CONSTRASEÑA);
            $con->exec("SET CARACTER SET utf8");
            return $con;
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }

    protected stat
}
