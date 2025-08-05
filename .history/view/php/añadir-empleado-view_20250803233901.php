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
                    div.col-12>label{Nombres y Apellidos}
                    <div class="col-12">
                        <input type="text" name="empleadonombre" id="nombre">
                    </div>
                </div>
                <div class="row">
                    <div class="col-6">
                        <input type="text" name="" id="">
                    </div>
                    <div class="col-6">
                        <input type="text" name="" id="">
                    </div>
                    <div class="col-6">
                        <input type="text" name="" id="">
                    </div>
                    <div class="col-6">
                        <input type="text" name="" id="">
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