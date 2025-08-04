<?php include("./controller/crudEmpleadoC.php"); ?>

<div class="contrainer-fluid">

</div>
    
</div>

<?php
echo "<br>" . "datos desencriptados de la sesion" . "<br>";
print_r(crudEmpleadoC::desencriptar_sesion());
?>