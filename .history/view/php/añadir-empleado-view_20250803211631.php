<?php include("./controller/crudEmpleadoC.php"); ?>

div.contrainer-fluid>div

<?php
echo "<br>" . "datos desencriptados de la sesion" . "<br>";
print_r(crudEmpleadoC::desencriptar_sesion());
?>