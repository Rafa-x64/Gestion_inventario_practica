<?php

include_once("./model/mainModel.php");
include_once("./model/empresaM.php");

class registroEmpresaC extends mainModel
{

    public static function validar_rif($rif)
    {
        // Eliminar guiones y prefijo si es necesario
        $rif = strtoupper(str_replace('-', '', $rif));
        $prefijo = substr($rif, 0, 1);
        $numeros = substr($rif, 1, 8);
        $verificador = substr($rif, -1);

        // Pesos según posición
        $pesos = [3, 2, 7, 6, 5, 4, 3, 2];
        $base = ['V' => 1, 'E' => 2, 'J' => 3, 'P' => 4, 'G' => 5, 'C' => 6];

        $suma = $base[$prefijo] * 4; // Peso fijo para el prefijo

        for ($i = 0; $i < 8; $i++) {
            $suma += intval($numeros[$i]) * $pesos[$i];
        }

        $resto = $suma % 11;
        $digito = ($resto > 1) ? (11 - $resto) : 0;

        return intval($verificador) === $digito;
    }

    public static function obtener_zona_horaria()
    {
        if (isset($_COOKIE['timezone'])) {
            $zona = $_COOKIE['timezone'];
            return $zona;
        } else {
            return "No se ha detectado la zona horaria.";
        }
    }
    public static function obtener_feha_registro()
    {
        if (isset($_COOKIE['registro_hora'])) {
            $fecha = $_COOKIE['registro_hora'];
            return $fecha;
        } else {
            return "No se ha detectado la fecha de registro.";
        }
    }

    public static function obtener_formulario($formulario)
    {

        $rif = $formulario['prefijo'] . $formulario['rif'];

        if (!self::validar_rif($rif)) {
            return "❌ RIF inválido según algoritmo Módulo 11";
        }

        $id_empresa = self::generarIdEmpresa();
        $nombre_legal = $formulario['nombre_legal'];
        $direccion = $formulario['direccion'];
        $contacto = $formulario['contacto'];
        $correo = $formulario['correo'];
        $nombre_representante = $formulario['nombre_representante'];
        $fecha_registro = $formulario['fecha_registro'];
        $estado_condicion = $formulario['estado_condicion'];
        $logo = $formulario['logo'];
        $tipo_empresa = $formulario['tipo_empresa'];
        $moneda = $formulario['moneda'];
        $zona_horaria = $formulario['zona_horaria'];

        $empresa = new empresaM(
            $id_empresa,
            $nombre_legal,
            $rif,
            $direccion,
            $contacto,
            $correo,
            $nombre_representante,
            $fecha_registro,
            $estado_condicion,
            $logo,
            $tipo_empresa,
            $moneda,
            $zona_horaria
        );

        return $empresa->__toString();
    }

    private static function generarIdEmpresa()
    {
        return uniqid("EMP_");
    }
}
