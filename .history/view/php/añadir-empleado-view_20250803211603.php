<?php include("./controller/crudEmpleadoC.php"); ?>

<h1>registrar un empleado</h
<?php
echo "<br>" . "datos desencriptados de la sesion" . "<br>";
print_r(crudEmpleadoC::desencriptar_sesion());
?>