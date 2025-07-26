<?php

include("./model/mainModel.php");

class empresaM extends mainModel {
    private $id_empresa = "";//crear una funcion que de el id 
    private $nombre_legal = "";
    private $rif = "";
    private $direccion = "";
    private $contacto = "";
    private $correo = "";
    private $nombre_representante = "";
    private $fecha_registro = "";//date
    private $estado_condicion = "";//booleano
}
