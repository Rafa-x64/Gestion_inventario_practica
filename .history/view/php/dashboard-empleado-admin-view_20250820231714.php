<?php
include("./controller/dashboardEmpleadoAdminC.php")
?>

<h1>este es el dashboard del empleado administrador</h1>

<?php
echo "<br>" . "datos desencriptados de la sesion" . "<br>";
print_r(dashboardEAdminC::desencriptar_sesion());
?>