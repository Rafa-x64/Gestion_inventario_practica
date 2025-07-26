<?php

include_once("./model/mainModel.php");

class empresaM extends mainModel
{
    private $id_empresa = "";
    private $nombre_legal = "";
    private $rif = "";
    private $direccion = "";
    private $contacto = "";
    private $correo = "";
    private $nombre_representante = "";
    private $fecha_registro = "";
    private $estado_condicion = "";
    private $ruta_logo = "";
    private $tipo_empresa = "";
    private $moneda = "";
    private $zona_horaria = "";
    private $usuario_admin = "";
    private $contraseña_admin = "";

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
        $ruta_logo,
        $tipo_empresa,
        $moneda,
        $zona_horaria,
        $usuario_admin,
        $contraseña_admin
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
        $this->ruta_logo = $ruta_logo;
        $this->tipo_empresa = $tipo_empresa;
        $this->moneda = $moneda;
        $this->zona_horaria = $zona_horaria;
        $this->usuario_admin = $usuario_admin;
        $this->contraseña_admin = $contraseña_admin;
    }

    public function registrar_empresa()
    {
        try {
            $registrar = self::conectar_base_datos();
            $registrar_empresa = $registrar->prepare("INSERT INTO empresas 
                (id_empresa, 
                nombre_legal, 
                rif, 
                direccion, 
                contacto, 
                correo, 
                nombre_representante, 
                fecha_registro, 
                estado_condicion, 
                ruta_logo, 
                tipo_empresa, 
                moneda, 
                zona_horaria,
                usuario_admin,
                contraseña_admin)
            values (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)");
            $registrar_empresa->execute([
                $this->id_empresa,
                $this->nombre_legal,
                $this->rif,
                $this->direccion,
                $this->contacto,
                $this->correo,
                $this->nombre_representante,
                $this->fecha_registro,
                $this->estado_condicion,
                $this->ruta_logo,
                $this->tipo_empresa,
                $this->moneda,
                $this->zona_horaria,
                $this->usuario_admin,
                $this->contraseña_admin
            ]);
            return true;
        } catch (PDOException $e) {
            echo $e->getMessage();
            return false;
        }
    }

    

    public function __toString()
    {
        return "Id_empresa: {$this->id_empresa}, Empresa: {$this->nombre_legal}, RIF: {$this->rif}, Dirección: {$this->direccion}, Contacto: {$this->contacto}, Correo: {$this->correo}, Representante: {$this->nombre_representante}, Fecha de registro: {$this->fecha_registro}, Estado: {$this->estado_condicion}, Tipo: {$this->tipo_empresa}, Moneda: {$this->moneda}, Zona horaria: {$this->zona_horaria}, usuario_admin: {$this->usuario_admin}, contraseña_admin: {$this->contraseña_admin}";
    }
}
