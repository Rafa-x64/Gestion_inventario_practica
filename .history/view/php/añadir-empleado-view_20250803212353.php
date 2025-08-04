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
    <div class="row d-flex flex-column justify-content-center align-items-center my-4">
        <div class="col-10">
            <h1>registrar un empleado</h1>
        </div>
        <div class="col-10 d-flex flex-column justify-content-center align-items-center">
            <form action="" method="post">
                div.row>
                <div class="row">
                    <div class="col-12">
                        <button type="submit" class="btn btn-success text-white">Agregar empleado</button>
                        <input type="reset" value="Vaciar formulario" class="btn btn-danger text-white">
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

<?php
echo "<br>" . "datos desencriptados de la sesion" . "<br>";
print_r(crudEmpleadoC::desencriptar_sesion());
?>