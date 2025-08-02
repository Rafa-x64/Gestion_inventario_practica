<?php

include("./model/mainModel.php");

class usuarioM extends mainModel
{
    private $id_usuario = "";
    private $nombre = "";
    private $correo = "";
    private $contraseña = "";
    private $empresa_id = "";
    private $rol = "";

    public function __construct($nombre, $correo, $contraseña, $empresa_id = null, $rol = null)
    {
        $this->id_usuario =
        $this->nombre = $nombre;
        $this->correo = $correo;
        $this->contraseña = $contraseña;
        $this->empresa_id = $empresa_id;
        $this->rol = $rol;
    }

    private

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
