<?php
require_once "config/app.php";
require_once "controller/vistaC.php";

echo __DIR__;

$controlador = new vistaC();
$controlador->cargarVista();
