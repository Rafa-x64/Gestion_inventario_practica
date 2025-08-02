<?php
require_once "config/app.php";
require_once "controller/vistaC.php";
require_once "model/";

$controlador = new vistaC();
$controlador->cargarVista();
