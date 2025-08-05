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
            <h1>Registro de Empleado</h1>
        </div>
        <div class="col-10 d-flex flex-column justify-content-center align-items-center">
            <form action="" method="post" class="form-control d-flex flex-column align-items-center justify-content-center py-3 mb-5">
                <div class="row">
                    <div class="col-12">
                        <label for="empleado_nombre" class="form-label">Nombres y Apellidos</label>
                    </div>
                    <div class="col-12 pb-3">
                        <input type="text" name="empleado_nombre" id="empleado_nombre" placeholder="Nombre completo del empleado" class="form-control">
                    </div>
                </div>
                <div class="row">
                    <div class="col-6 pb-3">
                        <div class="row">
                            d
                        </div>
                        <input type="text" name="empleado_cedula" id="empleado_cedula" class="form-control">
                    </div>
                    <div class="col-6 pb-3">
                        <input type="text" name="" id="" class="form-control">
                    </div>
                    <div class="col-6 pb-3">
                        <input type="text" name="" id="" class="form-control">
                    </div>
                    <div class="col-6 pb-3">
                        <input type="text" name="" id="" class="form-control">
                    </div>
                </div>
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