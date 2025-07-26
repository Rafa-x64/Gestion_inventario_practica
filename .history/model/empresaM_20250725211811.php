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
<<<<<<< HEAD
        $ruta_logo,
        $tipo_empresa,
        $moneda,
        $zona_horaria,
        $usuario_admin,
        $contraseña_admin
    ) {
        $this->id_empresa = $id_empresa;
=======
        $logo,
        $tipo_empresa,
        $moneda,
        $zona_horaria
    ) {
        $this->id_empresa = $this->generarIdEmpresa();
>>>>>>> 5a616af58d0ab88c4bf6e4f3b2a6ad4cf6221d56
        $this->nombre_legal = $nombre_legal;
        $this->rif = $rif;
        $this->direccion = $direccion;
        $this->contacto = $contacto;
        $this->correo = $correo;
        $this->nombre_representante = $nombre_representante;
        $this->fecha_registro = $fecha_registro;
        $this->estado_condicion = $estado_condicion;
<<<<<<< HEAD
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

    // ID Empresa
=======
        $this->logo = $logo;
        $this->tipo_empresa = $tipo_empresa;
        $this->moneda = $moneda;
        $this->zona_horaria = $zona_horaria;
    }

    private function generarIdEmpresa()
    {
        return uniqid("EMP_");
    }

>>>>>>> 5a616af58d0ab88c4bf6e4f3b2a6ad4cf6221d56
    public function getIdEmpresa()
    {
        return $this->id_empresa;
    }

<<<<<<< HEAD
    public function setIdEmpresa($id_empresa)
    {
        $this->id_empresa = $id_empresa;
    }

    // Nombre Legal
=======
>>>>>>> 5a616af58d0ab88c4bf6e4f3b2a6ad4cf6221d56
    public function getNombreLegal()
    {
        return $this->nombre_legal;
    }

    public function setNombreLegal($nombre_legal)
    {
        $this->nombre_legal = $nombre_legal;
    }

<<<<<<< HEAD
    // RIF
=======
>>>>>>> 5a616af58d0ab88c4bf6e4f3b2a6ad4cf6221d56
    public function getRif()
    {
        return $this->rif;
    }

    public function setRif($rif)
    {
        $this->rif = $rif;
    }

<<<<<<< HEAD
    // Dirección
=======
>>>>>>> 5a616af58d0ab88c4bf6e4f3b2a6ad4cf6221d56
    public function getDireccion()
    {
        return $this->direccion;
    }

    public function setDireccion($direccion)
    {
        $this->direccion = $direccion;
    }

<<<<<<< HEAD
    // Contacto
=======
>>>>>>> 5a616af58d0ab88c4bf6e4f3b2a6ad4cf6221d56
    public function getContacto()
    {
        return $this->contacto;
    }

    public function setContacto($contacto)
    {
        $this->contacto = $contacto;
    }

<<<<<<< HEAD
    // Correo
=======
>>>>>>> 5a616af58d0ab88c4bf6e4f3b2a6ad4cf6221d56
    public function getCorreo()
    {
        return $this->correo;
    }

    public function setCorreo($correo)
    {
        $this->correo = $correo;
    }

<<<<<<< HEAD
    // Nombre del representante
=======
>>>>>>> 5a616af58d0ab88c4bf6e4f3b2a6ad4cf6221d56
    public function getNombreRepresentante()
    {
        return $this->nombre_representante;
    }

    public function setNombreRepresentante($nombre_representante)
    {
        $this->nombre_representante = $nombre_representante;
    }

<<<<<<< HEAD
    // Fecha de registro
=======
>>>>>>> 5a616af58d0ab88c4bf6e4f3b2a6ad4cf6221d56
    public function getFechaRegistro()
    {
        return $this->fecha_registro;
    }

    public function setFechaRegistro($fecha_registro)
    {
        $this->fecha_registro = $fecha_registro;
    }

<<<<<<< HEAD
    // Estado de condición
=======
>>>>>>> 5a616af58d0ab88c4bf6e4f3b2a6ad4cf6221d56
    public function getEstadoCondicion()
    {
        return $this->estado_condicion;
    }

    public function setEstadoCondicion($estado_condicion)
    {
        $this->estado_condicion = $estado_condicion;
    }

<<<<<<< HEAD
    // Ruta del logo
    public function getRutaLogo()
    {
        return $this->ruta_logo;
    }

    public function setRutaLogo($ruta_logo)
    {
        $this->ruta_logo = $ruta_logo;
    }

    // Tipo de empresa
=======
    public function getLogo()
    {
        return $this->logo;
    }

    public function setLogo($logo)
    {
        $this->logo = $logo;
    }

>>>>>>> 5a616af58d0ab88c4bf6e4f3b2a6ad4cf6221d56
    public function getTipoEmpresa()
    {
        return $this->tipo_empresa;
    }

    public function setTipoEmpresa($tipo_empresa)
    {
        $this->tipo_empresa = $tipo_empresa;
    }

<<<<<<< HEAD
    // Moneda
=======
>>>>>>> 5a616af58d0ab88c4bf6e4f3b2a6ad4cf6221d56
    public function getMoneda()
    {
        return $this->moneda;
    }

    public function setMoneda($moneda)
    {
        $this->moneda = $moneda;
    }

<<<<<<< HEAD
    // Zona horaria
=======
>>>>>>> 5a616af58d0ab88c4bf6e4f3b2a6ad4cf6221d56
    public function getZonaHoraria()
    {
        return $this->zona_horaria;
    }

    public function setZonaHoraria($zona_horaria)
    {
        $this->zona_horaria = $zona_horaria;
    }

<<<<<<< HEAD
    // Usuario administrador
    public function getUsuarioAdmin()
    {
        return $this->usuario_admin;
    }

    public function setUsuarioAdmin($usuario_admin)
    {
        $this->usuario_admin = $usuario_admin;
    }

    // Contraseña administrador
    public function getContraseñaAdmin()
    {
        return $this->contraseña_admin;
    }

    public function setContraseñaAdmin($contraseña_admin)
    {
        $this->contraseña_admin = $contraseña_admin;
    }

    public function __toString()
    {
        return "Id_empresa: {$this->id_empresa}, Empresa: {$this->nombre_legal}, RIF: {$this->rif}, Dirección: {$this->direccion}, Contacto: {$this->contacto}, Correo: {$this->correo}, Representante: {$this->nombre_representante}, Fecha de registro: {$this->fecha_registro}, Estado: {$this->estado_condicion}, Tipo: {$this->tipo_empresa}, Moneda: {$this->moneda}, Zona horaria: {$this->zona_horaria}, usuario_admin: {$this->usuario_admin}, contraseña_admin: {$this->contraseña_admin}";
=======
    public function __toString()
    {
        return "Empresa: {$this->nombre_legal}, RIF: {$this->rif}, Dirección: {$this->direccion}, Contacto: {$this->contacto}, Correo: {$this->correo}, Representante: {$this->nombre_representante}, Fecha de registro: {$this->fecha_registro}, Estado: {$this->estado_condicion}, Tipo: {$this->tipo_empresa}, Moneda: {$this->moneda}, Zona horaria: {$this->zona_horaria}";
>>>>>>> 5a616af58d0ab88c4bf6e4f3b2a6ad4cf6221d56
    }
}
