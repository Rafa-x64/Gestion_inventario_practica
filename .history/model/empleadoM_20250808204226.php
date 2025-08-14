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

    public function getId()
    {
        return $this->id;
    }
    public function setId($id)
    {
        $this->id = $id;
    }

    public function getNombre()
    {
        return $this->nombre;
    }
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;
    }

    public function getCedula()
    {
        return $this->cedula;
    }
    public function setCedula($cedula)
    {
        $this->cedula = $cedula;
    }

    public function getFechaNacimiento()
    {
        return $this->fecha_nacimiento;
    }
    public function setFechaNacimiento($fecha_nacimiento)
    {
        $this->fecha_nacimiento = $fecha_nacimiento;
    }

    public function getSexo()
    {
        return $this->sexo;
    }
    public function setSexo($sexo)
    {
        $this->sexo = $sexo;
    }

    public function getTelefono()
    {
        return $this->telefono;
    }
    public function setTelefono($telefono)
    {
        $this->telefono = $telefono;
    }

    public function getEstadoCivil()
    {
        return $this->estado_civil;
    }
    public function setEstadoCivil($estado_civil)
    {
        $this->estado_civil = $estado_civil;
    }

    public function getCorreo()
    {
        return $this->correo;
    }
    public function setCorreo($correo)
    {
        $this->correo = $correo;
    }

    public function getDireccion()
    {
        return $this->direccion;
    }
    public function setDireccion($direccion)
    {
        $this->direccion = $direccion;
    }

    public function getRol()
    {
        return $this->rol;
    }
    public function setRol($rol)
    {
        $this->rol = $rol;
    }

    public function getFechaIngreso()
    {
        return $this->fecha_ingreso;
    }
    public function setFechaIngreso($fecha_ingreso)
    {
        $this->fecha_ingreso = $fecha_ingreso;
    }

    public function getTipoContrato()
    {
        return $this->tipo_contrato;
    }
    public function setTipoContrato($tipo_contrato)
    {
        $this->tipo_contrato = $tipo_contrato;
    }

    public function getSupervisor()
    {
        return $this->supervisor;
    }
    public function setSupervisor($supervisor)
    {
        $this->supervisor = $supervisor;
    }

    public function getHoraEntrada()
    {
        return $this->hora_entrada;
    }
    public function setHoraEntrada($hora_entrada)
    {
        $this->hora_entrada = $hora_entrada;
    }

    public function getHoraSalida()
    {
        return $this->hora_salida;
    }
    public function setHoraSalida($hora_salida)
    {
        $this->hora_salida = $hora_salida;
    }

    public function getEstado()
    {
        return $this->estado;
    }
    public function setEstado($estado)
    {
        $this->estado = $estado;
    }

    public function getSalario()
    {
        return $this->salario;
    }
    public function setSalario($salario)
    {
        $this->salario = $salario;
    }

    public function getBonificaciones()
    {
        return $this->bonificaciones;
    }
    public function setBonificaciones($bonificaciones)
    {
        $this->bonificaciones = $bonificaciones;
    }

    public function getMotivoBonificacion()
    {
        return $this->motivo_bonificacion;
    }
    public function setMotivoBonificacion($motivo_bonificacion)
    {
        $this->motivo_bonificacion = $motivo_bonificacion;
    }

    public function getTipoDeduccion()
    {
        return $this->tipo_deduccion;
    }
    public function setTipoDeduccion($tipo_deduccion)
    {
        $this->tipo_deduccion = $tipo_deduccion;
    }

    public function getDeduccionMonto()
    {
        return $this->deduccion_monto;
    }
    public function setDeduccionMonto($deduccion_monto)
    {
        $this->deduccion_monto = $deduccion_monto;
    }

    public function getTipoPago()
    {
        return $this->tipo_pago;
    }
    public function setTipoPago($tipo_pago)
    {
        $this->tipo_pago = $tipo_pago;
    }

    public function getBanco()
    {
        return $this->banco;
    }
    public function setBanco($banco)
    {
        $this->banco = $banco;
    }

    public function getNumeroCuenta()
    {
        return $this->numero_cuenta;
    }
    public function setNumeroCuenta($numero_cuenta)
    {
        $this->numero_cuenta = $numero_cuenta;
    }

    public function getBeneficios()
    {
        return $this->beneficios;
    }
    public function setBeneficios($beneficios)
    {
        $this->beneficios = $beneficios;
    }

    public function getUsuario()
    {
        return $this->usuario;
    }
    public function setUsuario($usuario)
    {
        $this->usuario = $usuario;
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

    public function __toString()
    {
        return "Usuario: {$this->nombre}, Correo: {$this->correo}, Rol: {$this->rol}, Empresa ID: {$this->empresa_id}";
    }
}
