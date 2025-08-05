<?php
include("./controller/crudEmpleadoC.php");
?>
<script>
    const temporal = new Date();
    const empleado_fecha_ingreso = temporal.toISOString().split("T")[0];
    document.cookie = "empleado_fecha_ingreso=" + encodeURIComponent(empleado_fecha_ingreso) + "; path=/";
</script>
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
        <div class="row d-flex flex-row justify-content-center align-items-center">
            <div class="col-10">
                <h1>Registro de Empleado</h1>
            </div>
        </div>
        <div class="col-8 d-flex flex-column justify-content-center align-items-center">
            <form action="" method="post" class="form-control d-flex flex-column align-items-start justify-content-center py-4 px-4 mb-5">
                <div class="row">
                    <div class="col-2">
                        <i class="bi bi-file-earmark-person fs-1 d-flex flex-row justify-content-end align-items-center"></i>
                    </div>
                    <div class="col-10">
                        <h5 class="ms-2">Información personal</h5>
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
                        <div class="col-12 pb-3">
                            <div class="row">
                                <div class="col-12">
                                    <label for="empleado_direccion" class="form-label">Direccion de residencia</label>
                                </div>
                                <div class="col-12">
                                    <input type="text" name="empleado_direccion" id="empleado_direccion" class="form-control">
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!--seccion de informacion laboral-->
                <div class="row">
                    <div class="col-2">
                        <i class="bi bi-list-columns-reverse fs-1 d-flex flex-row justify-content-end align-items-center"></i>
                    </div>
                    <div class="col-10">
                        <h5 class="ms-2">Informacion laboral</h5>
                    </div>
                </div>
                <section class="container-fluid py-3" id="informacion_personal">
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
                        <div class="col-6 pb-3">
                            <div class="row">
                                <div class="col-12">
                                    <label for="empleado_supervisor" class="form-label">Supervisor directo</label>
                                </div>
                                <div class="col-12">
                                    <input type="text" class="form-control" name="empleado_supervisor" id="empleado_supervisor" value="<?php echo crudEmpleadoC::obtener_supervisor(); ?>" readonly>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 pb-3">
                            <div class="row">
                                <div class="col-12">
                                    <label for="" class="form-label">Horario laboral</label>
                                </div>
                                <div class="col-12">
                                    <div class="row">
                                        <div class="col-2 d-flex flex-row justify-content-center align-items-center">
                                            <label for="empleado_hora_entrada" class="form-label mb-0">Entrada</label>
                                        </div>
                                        <div class="col-4">
                                            <input type="time" name="empleado_hora_entrada" id="" class="form-control" required>
                                        </div>
                                        <div class="col-2 d-flex flex-row justify-content-center align-items-center">
                                            <label for="empleado_hora_salida" class="form-label mb-0">Salida</label>
                                        </div>
                                        <div class="col-4">
                                            <input type="time" name="empleado_hora_salida" id="" class="form-control" required>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 pb-3">
                            <div class="row">
                                <div class="col-12">
                                    <label for="empleado_estado" class="form-label">Estado del empleado</label>
                                </div>
                                <div class="col-12">
                                    <select name="empleado_estado" id="empleado_estado" class="form-select">
                                        <option value="activo" selected>Activo</option>
                                        <option value="suspendido" disabled>Suspendido</option>
                                        <option value="retirado" disabled>Retirado</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="row">
                                <div class="col-6">
                                    <label for=""></label>
                                </div>
                                <div class="col-6">
                                    select.form-select>option
                                </div>
                                <div class="col-6">
                                    <label for=""></label>
                                </div>
                                <div class="col-6"></div>
                            </div>
                        </div>
                    </div>
                </section>
                <!--seccion de metrica salarial y beneficios-->
                <div class="row">
                    <div class="col-2">
                        <i class="bi bi-wallet2 fs-1 d-flex flex-row justify-content-end align-items-center"></i>
                    </div>
                    <div class="col-10">
                        <h5 class="ms-2">Metrica salarial y beneficios</h5>
                    </div>
                </div>
                <section class="container-fluid py-3" id="metrica_salarial">
                    <div class="row">
                        <div class="col-6 pb-3">
                            <div class="row">
                                <div class="col-12">
                                    <label for="empleado_salario" class="form-label">Salario base</label>
                                </div>
                                <div class="col-11">
                                    <input type="text" class="form-control" name="empleado_salario" id="empleado_salario" placeholder="Ej. 1500.00<?php echo crudEmpleadoC::obtener_moneda() ?>">
                                </div>
                                <div class="col-1 d-flex flex-column justify-content-center align-items-center">
                                    <p class="form-text mb-0"><?php echo crudEmpleadoC::obtener_moneda(); ?></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-6 pb-3">
                            <div class="row">
                                <div class="col-12">
                                    <label for="empleado_bonificaciones" class="form-label">Bonificaciones</label>
                                </div>
                                <div class="col-11">
                                    <input type="number" name="empleado_bonificaciones" id="empleado_bonificaciones" class="form-control" placeholder="Ej. 150.00<?php echo crudEmpleadoC::obtener_moneda() ?>" step="0.25" min="0">
                                </div>
                                <div class="col-1 d-flex flex-column justify-content-center align-items-center">
                                    <p class="form-text mb-0"><?php echo crudEmpleadoC::obtener_moneda(); ?></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 pb-3">
                            <div class="row">
                                <div class="col-12">
                                    <label for="empleado_motivos" class="form-label">Motivo de la bonificacion</label>
                                </div>
                                <div class="col-12">
                                    <textarea name="" id="" class="form-control" rows="4" placeholder="Ej. Por rendimiento excepcional durante este mes"></textarea>
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

<?php
echo "<br>" . "datos desencriptados de la sesion" . "<br>";
print_r(crudEmpleadoC::desencriptar_sesion());
?>