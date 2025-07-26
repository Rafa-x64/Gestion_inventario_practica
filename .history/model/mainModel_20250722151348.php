<?php

include("./config/server.php");

class mainModel{

protected static function conectarBD(){
    try{
        $con = new PDO(SGBD, USUARIO, CONSTRASEÑA);
            $con->exec("SET CARACTER SET utf8");
            return $conexion;
    }catch(PDOException $e){
        echo $e->getMessage();
    }
}

}

?>