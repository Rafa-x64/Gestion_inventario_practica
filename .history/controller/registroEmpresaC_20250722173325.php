<?php

include_once("./model/mainModel.php");
include_once("./model/empresaM.php");

class registroEmpresaC extends mainModel
{

    public static function getFormulario($formulario) {}

    public static function validar_rif(){
        /*Se usa el algoritmo Módulo 11, que toma los primeros 9 caracteres y les aplica una fórmula ponderada. El resultado final es el dígito verificador que valida el número completo.*/
    }
}
