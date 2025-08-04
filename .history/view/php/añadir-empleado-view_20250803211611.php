<?php include("./controller/crudEmpleadoC.php"); ?>

contain

<?php
echo "<br>" . "datos desencriptados de la sesion" . "<br>";
print_r(crudEmpleadoC::desencriptar_sesion());
?>