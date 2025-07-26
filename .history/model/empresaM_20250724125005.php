<?php

include_once("./model/mainModel.php");

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
    private $moneda = ""; //seleccionar las monedas existentes en ./config/server.php
    private $zona_horaria = "";

    public function __construct(
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
    ) {
        $this->id_empresa = $id_empresa;
        $this->nombre_legal = $nombre_legal;
        $this->rif = $rif;
        $this->direccion = $direccion;
        $this->contacto = $contacto;
        $this->correo = $correo;
        $this->nombre_representante = $nombre_representante;
        $this->fecha_registro = $fecha_registro;
        $this->estado_condicion = $estado_condicion;
        $this->logo = $logo;
        $this->tipo_empresa = $tipo_empresa;
        $this->moneda = $moneda;
        $this->zona_horaria = $zona_horaria;
    }

    public function registrar_empresa(){
        $registrar = self::consulta("INSERT INTO empresa (id_empresa, nombre_legal, rif, direccion, contacto, correo, nombre_representante, fecha_registro, estado_condicion, logo, tipo_empresa, moneda, zona_horaria");
    }

    public function setIdEmpresa($id_empresa)
    {
        $this->id_empresa = $id_empresa;
    }

    public function getIdEmpresa()
    {
        return $this->id_empresa;
    }

    public function getNombreLegal()
    {
        return $this->nombre_legal;
    }

    public function setNombreLegal($nombre_legal)
    {
        $this->nombre_legal = $nombre_legal;
    }

    public function getRif()
    {
        return $this->rif;
    }

    public function setRif($rif)
    {
        $this->rif = $rif;
    }

    public function getDireccion()
    {
        return $this->direccion;
    }

    public function setDireccion($direccion)
    {
        $this->direccion = $direccion;
    }

    public function getContacto()
    {
        return $this->contacto;
    }

    public function setContacto($contacto)
    {
        $this->contacto = $contacto;
    }

    public function getCorreo()
    {
        return $this->correo;
    }

    public function setCorreo($correo)
    {
        $this->correo = $correo;
    }

    public function getNombreRepresentante()
    {
        return $this->nombre_representante;
    }

    public function setNombreRepresentante($nombre_representante)
    {
        $this->nombre_representante = $nombre_representante;
    }

    public function getFechaRegistro()
    {
        return $this->fecha_registro;
    }

    public function setFechaRegistro($fecha_registro)
    {
        $this->fecha_registro = $fecha_registro;
    }

    public function getEstadoCondicion()
    {
        return $this->estado_condicion;
    }

    public function setEstadoCondicion($estado_condicion)
    {
        $this->estado_condicion = $estado_condicion;
    }

    public function getLogo()
    {
        return $this->logo;
    }

    public function setLogo($logo)
    {
        $this->logo = $logo;
    }

    public function getTipoEmpresa()
    {
        return $this->tipo_empresa;
    }

    public function setTipoEmpresa($tipo_empresa)
    {
        $this->tipo_empresa = $tipo_empresa;
    }

    public function getMoneda()
    {
        return $this->moneda;
    }

    public function setMoneda($moneda)
    {
        $this->moneda = $moneda;
    }

    public function getZonaHoraria()
    {
        return $this->zona_horaria;
    }

    public function setZonaHoraria($zona_horaria)
    {
        $this->zona_horaria = $zona_horaria;
    }

    public function __toString()
    {
        return "Id_empresa: {$this->id_empresa}, Empresa: {$this->nombre_legal}, RIF: {$this->rif}, Dirección: {$this->direccion}, Contacto: {$this->contacto}, Correo: {$this->correo}, Representante: {$this->nombre_representante}, Fecha de registro: {$this->fecha_registro}, Estado: {$this->estado_condicion}, Tipo: {$this->tipo_empresa}, Moneda: {$this->moneda}, Zona horaria: {$this->zona_horaria}";
    }
}
