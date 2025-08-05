<?php
include("./controller/crudEmpleadoC.php");
?>
<1
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
        <div class="row d-flex flex-row justify-content-center align-items-center">
            <div class="col-10">
                <h1>Registro de Empleado</h1>
            </div>
        </div>
        <div class="col-8 d-flex flex-column justify-content-center align-items-center">
            <form action="" method="post" class="form-control d-flex flex-column align-items-start justify-content-center py-4 px-4 mb-5">
                <div class="row">
                    <div class="col-12">
                        <h5>Informacion personal</h5>
                    </div>
                </div>
                <section class="container-fluid py-3" id="informacion_personal">
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
                        <div class="col-6 pb-3">
                            <div class="row">
                                <div class="col-12">
                                    <label for="empleado_estado_civil" class="form-label">Estado civil</label>
                                </div>
                                <div class="col-12">
                                    <select name="empleado_estado_civil" id="empleado_estado_civil" class="form-select">
                                        <option value="Soltero">Soltero</option>
                                        <option value="Casado">Casado</option>
                                        <option value="Divorciado">Divorciado</option>
                                        <option value="Viudo">Viudo</option>
                                        <option value="Union libre">Union libre</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="col-6 pb-3">
                            <div class="row">
                                <div class="col-12">
                                    <label for="empleado_correo" class="form-label">Correo Electrónico</label>
                                </div>
                                <div class="col-12">
                                    <input type="email" name="empleado_correo" id="empleado_correo" class="form-control">
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!--seccion de informacion laboral-->
                <div class="row">
                    <div class="col-12">
                        <h5>Informacion laboral</h5>
                    </div>
                </div>
                <section class="container-fluid pt-3" id="informacion_personal">
                    <div class="row">
                        <div class="col-6 pb-3">
                            <div class="row">
                                <div class="col-12">
                                    <label for="empleado_cargo" class="form-label">Cargo</label>
                                </div>
                                <div class="col-12">
                                    <select name="empleado_cargo" id="empleado_cargo" class="form-select">
                                        <option value="super administrador" disabled>Super administrador</option>
                                        <option value="empleado administrador">Administrador</option>
                                        <option value="empleado vendedor">Vendedor</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="col-6 pb-3">
                            <div class="row">
                                <div class="col-12">
                                    <label for="empleado_fecha_ingreso" class="form-label">Fecha de ingreso</label>
                                </div>
                                <div class="col-12">
                                    <input type="text" name="empleado_fecha_registro" id="empleado_fecha_registro" class="form-control" value="<?php echo crudEmpleadoC::obtener_fecha_registro(); ?>" readonly>
                                </div>
                            </div>
                        </div>
                        <div class="col-6 pb-3">
                            <div class="row">
                                <div class="col-12">
                                    <label for="empleado_tipo_contrato" class="form-label">Tipo de contrato</label>
                                </div>
                                <div class="col-12">
                                    <select name="empleado_tipo_contrato" id="empleado_tipo_contrato" class="form-select">
                                        <option value="tiempo_completo" selected>Tiempo completo</option>
                                        <option value="tiempo_parcial">Tiempo parcial</option>
                                        <option value="temporal">Temporal</option>
                                        <option value="obra_labor">Por obra o labor</option>
                                        <option value="prueba">De prueba</option>
                                        <option value="indefinido">Indefinido</option>
                                        <option value="freelance">Freelance</option>
                                        <option value="pasantia">Pasantía</option>
                                        <option value="remoto">Remoto</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!--seccion de botones del formulario-->
                <section class="container-fluid pt-3">
                    <div class="row">
                        <div class="col-12">
                            <button type="submit" class="btn btn-success text-white">Agregar empleado</button>
                            <input type="reset" value="Vaciar formulario" class="btn btn-danger text-white">
                        </div>
                    </div>
                </section>
            </form>
        </div>
    </div>
</div>

<script>
    const temporal = new Date();
    const empleado_fecha_ingreso = temporal.toISOString().split("T")[0];
    document.cookie = "empleado_fecha_ingreso=" + encodeURIComponent(empleado_fecha_ingreso) + "; path=/";
</script>

<?php
echo "<br>" . "datos desencriptados de la sesion" . "<br>";
print_r(crudEmpleadoC::desencriptar_sesion());
?>