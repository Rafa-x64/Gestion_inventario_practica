<?php include("./controller/crudEmpleadoC.php"); ?>

style{}

<div class="contrainer-fluid">
    <div class="row">
        <div class="col 10">

        </div>
    </div>
</div>

<?php
echo "<br>" . "datos desencriptados de la sesion" . "<br>";
print_r(crudEmpleadoC::desencriptar_sesion());
?>