<?php

include("./config/server.php");

class mainModel{

protected static function conectarBD(){
    try{
        $con = new PDO(SGBD, USUARIO, CONSTRASEÑA);
    }catch(PDO){

    }
}

}

?>