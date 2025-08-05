<?php include("./controller/crudEmpleadoC.php"); ?>
<!--
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
-->

<div class="contrainer-fluid">
    <div class="row d-flex flex-column justify-content-center align-items-center my-4">
        <div class="col-10">
            <h1>Registro de Empleado</h1>
        </div>
        <div class="col-8 d-flex flex-column justify-content-center align-items-center">
            <form action="" method="post" class="form-control d-flex flex-column align-items-center justify-content-center py-4 px-4 mb-5">
                <div class="row">
                    <div class="col-12 pb-3">
                        <div class="row">
                            <div class="col-12">
                                <label for="empleado_nombre" class="form-label">Nombres y Apellidos</label>
                            </div>
                            <div class="col-12 pb-3">
                                <input type="text" name="empleado_nombre" id="empleado_nombre" placeholder="Nombre completo del empleado" class="form-control">
                            </div>
                        </div>
                    </div>
                    <div class="col-6 pb-3">
                        <div class="row">
                            <div class="col-12">
                                <label for="empleado_cedula" class="form-label">Cedula o documento de identidad</label>
                            </div>
                            <div class="col-12">
                                <input type="text" name="empleado_cedula" id="empleado_cedula" class="form-control">
                            </div>
                        </div>
                    </div>
                    <div class="col-6 pb-3">
                        <div class="row">
                            <div class="col-12">
                                <label for="empleado_fecha_nacimiento" class="form-label">Fecha de nacimiento</label>
                            </div>
                            <div class="col-12">
                                <input type="date" name="empleado_fecha_nacimiento" id="empleado_fecha_nacimiento" class="form-control">
                            </div>
                        </div>
                    </div>
                    <div class="col-6 pb-3">
                        <div class="row">
                            <div class="col-12">
                                <label for="empleado_sexo" class="form-label">Sexo</label>
                            </div>
                            <div class="col-12">
                                <select name="empleado_sexo" id="empleado_sexo" class="form-select">
                                    <option value="Masculino">Masculino</option>
                                    <option value="Femenino">Femenino
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 pb-3">
                        <div class="row">
                            <div class="col-12">
                                <label for="empleado_telefono" class="form-label">Numero de teléfono</label>
                            </div>
                            <div class="col-12">
                                <input type="tel" name="empleado_telefono" id="empleado_telefono" class="form-control">
                            </div>
                        </div>
                    </div>
                    <div class="col-12 pb-3">
                        <div class="row">
                            <div class="col-12">
                                <label for="empleado_direccion" class="form-label">Direccion de residencia</label>
                            </div>
                            <div class="col-12">
                                <input type="tel" name="empleado_direccion" id="empleado_direccion" class="form-control">
                            </div>
                        </div>
                    </div>
                    <div class="col-12 pb-3">
                        <div class="row">
                            <div class="col-12">
                                <label for="empleado_estado_civil" class="form-label">Estado civil</label>
                            </div>
                            <div class="col-12">
                                <select name="" id=""></select>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 pb-3">
                        <div class="row">
                            <div class="col-12">
                                <label for="empleado_direccion" class="form-label">Direccion de residencia</label>
                            </div>
                            <div class="col-12">
                                <input type="tel" name="empleado_direccion" id="empleado_direccion" class="form-control">
                            </div>
                        </div>
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