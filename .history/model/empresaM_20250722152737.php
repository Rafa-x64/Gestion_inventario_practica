<?php

include("./model/mainModel.php");

class empresaM extends mainModel
{
    private $id_empresa = ""; //crear una funcion que genere el id de la empresa
    private $nombre_legal = "";
    private $rif = ""; //validar que sea un rif valido segun el pais
    private $direccion = "";
    private $contacto = "";
    private $correo = "";
    private $nombre_representante = "";
    private $fecha_registro = ""; //date
    private $estado_condicion = ""; //booleano
    private $logo = ""; //imagen;
    private $tipo_empresa = "";
    private $moneda = "";//seleccionar las monedas exis
    private $zona_horaria = "";
}
