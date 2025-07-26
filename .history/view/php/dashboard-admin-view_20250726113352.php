<?php
session_start();
require("./controller/dashboardAdminC.php");
require_once("./controller/logout/cerrarSesion.php");
//dashboardAdminC::desencriptar_datos();//si funciona el metodo para desencriptar todos los datos
?>
<!--hacer el dashboard del admin y agregar una opcion para agregar un empleado-->
<h1>este es el dashboard del admin</h1>

<!--recordar que solo se hashea la contraseña al guardarse en la base de datos, y al ini-->

<?php
print_r($_SESSION);
?>