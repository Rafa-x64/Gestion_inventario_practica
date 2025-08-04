<?php include("./controller/crudEmpleadoC.php"); ?>

<style>
    [class^="row"] {
        border: 2px solid red;
    }

    [class^="col"] {
        border: 2px solid blue;
    }

    [class^="container"] {
        border: 2px solid black;
    }
</style>

<div class="contrainer-fluid">
    <div class="row">
        <div class="col 10">
            <h1>registrar un umpleado</h1>
        </div>
    </div>
</div>

<?php
echo "<br>" . "datos desencriptados de la sesion" . "<br>";
print_r(crudEmpleadoC::desencriptar_sesion());
?>