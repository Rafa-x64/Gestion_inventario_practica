<?php
session_start();
require("./controller/dashboardAdminC.php");
require_once("./controller/logout/cerrarSesion.php");
das
?>

<h1>este es el dashboard del admin</h1>

<?php
print_r($_SESSION);
?>