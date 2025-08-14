<?php

include("./model/mainModel.php");

class usuarioM extends mainModel
{
    private $id = "ninguno";
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
    private $tipo_pago = "ninguno";
    private $banco = "ninguno";
    private $numero_cuenta = "ninguno";
    private $beneficios = "ninguno";
    private $usuario = "ninguno";
    private $contraseña = "ninguno";
    private $empresa_id = "ninguno";

    public function __construct(
        $id = "ninguno",
        $nombre = "ninguno",
        $cedula = "ninguno",
        $fecha_nacimiento = "ninguno",
        $sexo = "ninguno",
        $telefono = "ninguno",
        $estado_civil = "ninguno",
        $correo = "ninguno",
        $direccion = "ninguno",
        $rol = "ninguno",
        $fecha_ingreso = "ninguno",
        $tipo_contrato = "ninguno",
        $supervisor = "ninguno",
        $hora_entrada = "ninguno",
        $hora_salida = "ninguno",
        $estado = "ninguno",
        $salario = "ninguno",
        $bonificaciones = "ninguno",
        $motivo_bonificacion = "ninguno",
        $tipo_deduccion = "ninguno",
        $deduccion_monto = "ninguno",
        $tipo_pago = "ninguno",
        $banco = "ninguno",
        $numero_cuenta = "ninguno",
        $beneficios = "ninguno",
        $usuario = "ninguno",
        $contraseña = "ninguno",
        $empresa_id = "ninguno"
    ) {
        $this->id = $id;
        $this->nombre = $nombre;
        $this->cedula = $cedula;
        $this->fecha_nacimiento = $fecha_nacimiento;
        $this->sexo = $sexo;
        $this->telefono = $telefono;
        $this->estado_civil = $estado_civil;
        $this->correo = $correo;
        $this->direccion = $direccion;
        $this->rol = $rol;
        $this->fecha_ingreso = $fecha_ingreso;
        $this->tipo_contrato = $tipo_contrato;
        $this->supervisor = $supervisor;
        $this->hora_entrada = $hora_entrada;
        $this->hora_salida = $hora_salida;
        $this->estado = $estado;
        $this->salario = $salario;
        $this->bonificaciones = $bonificaciones;
        $this->motivo_bonificacion = $motivo_bonificacion;
        $this->tipo_deduccion = $tipo_deduccion;
        $this->deduccion_monto = $deduccion_monto;
        $this->tipo_pago = $tipo_pago;
        $this->banco = $banco;
        $this->numero_cuenta = $numero_cuenta;
        $this->beneficios = $beneficios;
        $this->usuario = $usuario;
        $this->contraseña = $contraseña;
        $this->empresa_id = $empresa_id;
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
