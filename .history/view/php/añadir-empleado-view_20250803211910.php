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
    <div class="row d-flex flex-column justify-content-center align-items-center">
        <div class="col-10">
            <h1>registrar un empleado</h1>
        </div>
        <div class="col-10">
            <form action=""></form>
        </div>
    </div>
</div>

<?php
echo "<br>" . "datos desencriptados de la sesion" . "<br>";
print_r(crudEmpleadoC::desencriptar_sesion());
?>