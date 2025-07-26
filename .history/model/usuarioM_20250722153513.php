<?php

include("./model/mainModel.php");

class usuarioM extends mainModel
{
    private $nombre = "";
    private $correo = "";
    private $contraseña = "";
    private $empresa_id = "";
    private $rol = "";

    public function __construct($nombre, $correo, $contraseña, $nombre_id, $rol)
    {
        $this->nombre = $nombre;
    }
}
