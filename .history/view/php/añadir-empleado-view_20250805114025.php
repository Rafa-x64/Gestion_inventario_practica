<?php
include("./controller/crudEmpleadoC.php");
?>

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
        <div class="row d-flex flex-row justify-content-center align-items-center">
            <div class="col-10">
                <h1>Registro de Empleado</h1>
            </div>
        </div>
        <div class="col-8 d-flex flex-column justify-content-center align-items-center">
            <form action="" method="post" class="form-control d-flex flex-column align-items-start justify-content-center py-4 px-4 mb-5">
                <!--seccion de informacion laboral-->
                <section class="container-fluid">
                    <div class="row">

                    </div>
                    
                </section>
                <!--seccion de botones del formulario-->
                <section class="row">
                    <div class="col-12">
                        <button type="submit" class="btn btn-success text-white">Agregar empleado</button>
                        <input type="reset" value="Vaciar formulario" class="btn btn-danger text-white">
                    </div>
                </section>
            </form>
        </div>
    </div>
</div>

<?php
echo "<br>" . "datos desencriptados de la sesion" . "<br>";
print_r(crudEmpleadoC::desencriptar_sesion());
?>