<?php include("./controller/crudEmpleadoC.php"); ?>

div.contrainer-fluid>div.row

<?php
echo "<br>" . "datos desencriptados de la sesion" . "<br>";
print_r(crudEmpleadoC::desencriptar_sesion());
?>