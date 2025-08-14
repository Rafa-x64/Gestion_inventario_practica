<?php

include("./model/mainModel.php");

class usuarioM extends mainModel
{
    private $id_usuario = "ninguno";
    private $nombre = "ninguno";
    private $cedula = "ninguno";
    private $fecha_nacimiento = "ninguno";
    private $sexo = "ninguno";
    private $telefono = "ninguno";
    private $estado_civil = "ninguno";
    private $correo = "ninguno";
    private $direccion = "ninguno";
    private $rol = "ninguno";
    private $fecha_ingreso = "ninguno";
    private $tipo_contrato = "ninguno";
    private $supervisor = "ninguno";
    private $hora_entrada = "ninguno";
    private $hora_salida = "ninguno";
    private $estado = "ninguno";
    private $salario = "ninguno";
    private $bonificaciones = "ninguno";
    private $motivo_bonificacion = "ninguno";
    private $tipo_deduccion = "ninguno";
    private $deduccion_monto = "ninguno";
    private $contraseña = "ninguno";
    private $empresa_id = "ninguno";

    public function __construct($nombre, $correo, $contraseña, $empresa_id = null, $rol = null)
    {
        $this->id_usuario = self::generarIdUsuario();
        $this->nombre = $nombre;
        $this->correo = $correo;
        $this->contraseña = $contraseña;
        $this->empresa_id = $empresa_id;
        $this->rol = $rol;
    }

    private static function generarIdUsuario()
    {
        return uniqid("EMP_");
    }

    public function getNombre()
    {
        return $this->nombre;
    }

    public function setNombre($nombre)
    {
        $this->nombre = $nombre;
    }

    public function getCorreo()
    {
        return $this->correo;
    }

    public function setCorreo($correo)
    {
        $this->correo = $correo;
    }

    public function getContraseña()
    {
        return $this->contraseña;
    }

    public function setContraseña($contraseña)
    {
        $this->contraseña = $contraseña;
    }

    public function getEmpresaId()
    {
        return $this->empresa_id;
    }

    public function setEmpresaId($empresa_id)
    {
        $this->empresa_id = $empresa_id;
    }

    public function getRol()
    {
        return $this->rol;
    }

    public function setRol($rol)
    {
        $this->rol = $rol;
    }

    public function __toString()
    {
        return "Usuario: {$this->nombre}, Correo: {$this->correo}, Rol: {$this->rol}, Empresa ID: {$this->empresa_id}";
    }
}
