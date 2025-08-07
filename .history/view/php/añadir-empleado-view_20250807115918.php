<script>
    const temporal = new Date();
    const empleado_fecha_ingreso = temporal.toISOString().split("T")[0];
    document.cookie = "empleado_fecha_ingreso=" + encodeURIComponent(empleado_fecha_ingreso) + "; path=/";
</script>
<?php
include("./controller/crudEmpleadoC.php");
?>
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
                    <div class="col-12">
                        <small class="form-text text-muted d-flex">Las casillas marcadas con <p class="text-danger  px-1">&bull;</p> son campos obligatorios.</small>
                    </div>
                </div>
                <div class="row">
                    <div class="col-2">
                        <i class="bi bi-file-earmark-person fs-1 d-flex flex-row justify-content-end align-items-center"></i>
                    </div>
                    <div class="col-10 d-flex justify-content-center align-items-center">
                        <h5 class="ms-2">Información personal</h5>
                    </div>
                </div>
                <section class="container-fluid py-3" id="informacion_personal">
                    <div class="row">
                        <div class="col-12 pb-3">
                            <div class="row">
                                <div class="col-12 d-flex flex-row">
                                    <label for="empleado_nombre" class="form-label">Nombres y Apellidos</label>
                                    <p class="text-danger  px-1">&bull;</p>
                                </div>
                                <div class="col-11 pb-3">
                                    <input type="text" name="empleado_nombre" id="empleado_nombre" placeholder="Nombre completo del empleado" class="form-control" pattern="" required>
                                </div>
                            </div>
                        </div>
                        <div class="col-6 pb-3">
                            <div class="row">
                                <div class="col-12 d-flex flex-row">
                                    <label for="empleado_cedula" class="form-label">Cedula o documento de identidad</label>
                                    <p class="text-danger  px-1">&bull;</p>
                                </div>
                                <div class="col-12">
                                    <input type="text" name="empleado_cedula" id="empleado_cedula" class="form-control" placeholder="ejemplo: 12.345.678" pattern="" required>
                                </div>
                            </div>
                        </div>
                        <div class="col-6 pb-3">
                            <div class="row">
                                <div class="col-12 d-flex flex-row">
                                    <label for="empleado_fecha_nacimiento" class="form-label">Fecha de nacimiento</label>
                                    <p class="text-danger  px-1">&bull;</p>
                                </div>
                                <div class="col-12">
                                    <input type="date" name="empleado_fecha_nacimiento" id="empleado_fecha_nacimiento" class="form-control" required>
                                </div>
                            </div>
                        </div>
                        <div class="col-6 pb-3">
                            <div class="row">
                                <div class="col-12 d-flex flex-row">
                                    <label for="empleado_sexo" class="form-label">Sexo</label>
                                    <p class="text-danger  px-1">&bull;</p>
                                </div>
                                <div class="col-12">
                                    <select name="empleado_sexo" id="empleado_sexo" class="form-select" required>
                                        <option value="Masculino">Masculino</option>
                                        <option value="Femenino">Femenino
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="col-6 pb-3">
                            <div class="row">
                                <div class="col-12 d-flex flex-row">
                                    <label for="empleado_telefono" class="form-label">Numero de teléfono</label>
                                    <p class="text-danger  px-1">&bull;</p>
                                </div>
                                <div class="col-12">
                                    <input type="tel" name="empleado_telefono" id="empleado_telefono" class="form-control" pattern="" required>
                                </div>
                            </div>
                        </div>
                        <div class="col-6 pb-3">
                            <div class="row">
                                <div class="col-12 d-flex flex-row">
                                    <label for="empleado_estado_civil" class="form-label">Estado civil</label>
                                    <p class="text-danger  px-1">&bull;</p>
                                </div>
                                <div class="col-12">
                                    <select name="empleado_estado_civil" id="empleado_estado_civil" class="form-select" required>
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
                                <div class="col-12 d-flex flex-row">
                                    <label for="empleado_correo" class="form-label">Correo Electrónico</label>
                                    <p class="text-danger  px-1">&bull;</p>
                                </div>
                                <div class="col-12">
                                    <input type="email" name="empleado_correo" id="empleado_correo" class="form-control" pattern="" required>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 pb-3">
                            <div class="row">
                                <div class="col-12 d-flex flex-row">
                                    <label for="empleado_direccion" class="form-label">Direccion de residencia</label>
                                    <p class="text-danger  px-1">&bull;</p>
                                </div>
                                <div class="col-12">
                                    <input type="text" name="empleado_direccion" id="empleado_direccion" class="form-control" pattern="" required>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!--seccion de informacion laboral-->
                <div class="row">
                    <div class="col-2">
                        <i class="bi bi-list-columns-reverse fs-2 d-flex flex-row justify-content-end align-items-center"></i>
                    </div>
                    <div class="col-10 d-flex justify-content-center align-items-center">
                        <h5 class="ms-2">Informacion laboral</h5>
                    </div>
                </div>
                <section class="container-fluid py-3" id="informacion_personal">
                    <div class="row">
                        <div class="col-6 pb-3">
                            <div class="row">
                                <div class="col-12 d-flex flex-row">
                                    <label for="empleado_cargo" class="form-label">Cargo</label>
                                    <p class="text-danger  px-1">&bull;</p>
                                </div>
                                <div class="col-12">
                                    <select name="empleado_cargo" id="empleado_cargo" class="form-select" required>
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
                                <div class="col-12 d-flex flex-row">
                                    <label for="empleado_tipo_contrato" class="form-label">Tipo de contrato</label>
                                    <p class="text-danger  px-1">&bull;</p>
                                </div>
                                <div class="col-12">
                                    <select name="empleado_tipo_contrato" id="empleado_tipo_contrato" class="form-select" required>
                                        <option value="tiempo completo" selected>Tiempo completo</option>
                                        <option value="tiempo parcial">Tiempo parcial</option>
                                        <option value="temporal">Temporal</option>
                                        <option value="obra labor">Por obra o labor</option>
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
                                <div class="col-12 d-flex flex-row">
                                    <label for="" class="form-label">Horario laboral</label>
                                    <p class="text-danger  px-1">&bull;</p>
                                </div>
                                <div class="col-12">
                                    <div class="row">
                                        <div class="col-2 d-flex flex-row justify-content-center align-items-center">
                                            <label for="empleado_hora_entrada" class="form-label mb-0">Entrada</label>
                                        </div>
                                        <div class="col-4">
                                            <input type="time" name="empleado_hora_entrada" id="empleado_hora_entrada" class="form-control" required>
                                        </div>
                                        <div class="col-2 d-flex flex-row justify-content-center align-items-center">
                                            <label for="empleado_hora_salida" class="form-label mb-0">Salida</label>
                                        </div>
                                        <div class="col-4">
                                            <input type="time" name="empleado_hora_salida" id="empleado_hora_salida" class="form-control" required>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 pb-3">
                            <div class="row">
                                <div class="col-12 d-flex flex-row">
                                    <label for="empleado_estado" class="form-label">Estado del empleado</label>
                                    <p class="text-danger  px-1">&bull;</p>
                                </div>
                                <div class="col-12">
                                    <select name="empleado_estado" id="empleado_estado" class="form-select" required>
                                        <option value="activo" selected>Activo</option>
                                        <option value="suspendido" disabled>Suspendido</option>
                                        <option value="retirado" disabled>Retirado</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!--seccion de metrica salarial y beneficios-->
                <div class="row">
                    <div class="col-2">
                        <i class="bi bi-wallet2 fs-1 d-flex flex-row justify-content-end align-items-center"></i>
                    </div>
                    <div class="col-10 d-flex justify-content-center align-items-center">
                        <h5 class="ms-2">Metrica salarial y beneficios</h5>
                    </div>
                </div>
                <section class="container-fluid py-3" id="metrica_salarial">
                    <div class="row">
                        <div class="col-6 pb-3">
                            <div class="row">
                                <div class="col-12 d-flex flex-row">
                                    <label for="empleado_salario" class="form-label">Salario base</label>
                                    <p class="text-danger  px-1">&bull;</p>
                                </div>
                                <div class="col-11">
                                    <input type="number" class="form-control" name="empleado_salario" id="empleado_salario" placeholder="Ej. 1500.00<?php echo crudEmpleadoC::obtener_moneda() ?>" min="0" step="0.5" required>
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
                        <div class="col-12 pb-3">
                            <div class="row">
                                <div class="col-6">
                                    <label for="empleado_tipo_deduccion" class="form-label">Tipo de deduccion</label>
                                </div>
                                <div class="col-6">
                                    <label for="empleado_deduccion_monto" class="form-label">Monto de la deduccion</label>
                                </div>
                                <div class="col-6">
                                    <select name="empleado_tipo_deduccion" id="empleado_tipo_deduccion" class="form-select">
                                        <option value="ninguno">Seleccione una opción</option>
                                        <option value="seguridad social">Seguridad Social – Aporte obligatorio al IVSS o sistemas de salud</option>
                                        <option value="fondo salud">Fondo de salud – Descuentos para seguros médicos privados</option>
                                        <option value="parafiscales">Parafiscales – INCES, RPE y otros aportes obligatorios</option>
                                        <option value="caja ahorro">Caja de ahorro – Retención voluntaria para ahorros colectivos</option>
                                        <option value="prestamos">Préstamos internos – Abonos por préstamos otorgados al empleado</option>
                                        <option value="comedor">Beneficios de comedor – Servicio de alimentación empresarial</option>
                                        <option value="servicios">Servicios adicionales – Teléfono, transporte y otros según contrato</option>
                                    </select>
                                </div>
                                <div class="col-6">
                                    <input type="number" name="empleado_bonificaciones" id="empleado_deduccion_monto" class="form-control" placeholder="Ej. 150.00<?php echo crudEmpleadoC::obtener_moneda() ?>" step="0.25" min="0">
                                </div>
                            </div>
                        </div>
                        <div class="col-6 pb-3">
                            <div class="row">
                                <div class="col-12 d-flex flex-row">
                                    <label for="empleado_tipo_pago" class="form-label">Tipo de pago</label>
                                    <p class="text-danger  px-1">&bull;</p>
                                </div>
                                <div class="col-12">
                                    <select name="empleado_tipo_pago" id="empleado_tipo_pago" class="form-select" required>
                                        <option value="semanal">Semanal</option>
                                        <option value="quincenal" selected>Quincenal</option>
                                        <option value="mensual">Mensual</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="col-6 pb-3">
                            <div class="row">
                                <div class="col-12 d-flex flex-row">
                                    <label for="empleado_banco" class="form-label">Nombre del banco</label>
                                    <p class="text-danger  px-1">&bull;</p>
                                </div>
                                <div class="col-12">
                                    <input type="text" name="empleado_banco" id="empleado_banco" class="form-control" pattern="" required>
                                </div>
                            </div>
                        </div>
                        <div class="col-6 pb-3">
                            <div class="row">
                                <div class="col-12 d-flex flex-row">
                                    <label for="empleado_numero_cuenta" class="form-label">Numero de cuenta</label>
                                    <p class="text-danger  px-1">&bull;</p>
                                </div>
                                <div class="col-12">
                                    <input type="text" name="empleado_numero_cuenta" id="empleado_numero_cuenta" class="form-control" pattern="" required>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 pb-3">
                            <div class="row">
                                <div class="col-12">
                                    <label for="empleado_beneficios" class="form-label">Beneficios adicionales</label>
                                </div>
                                <div class="col-12">
                                    <select id="empleado_beneficios" class="form-select" name="beneficios[]" multiple>
                                        <option value="ninguno">Ninguno</option>
                                        <option value="seguro medico">Seguro médico</option>
                                        <option value="bono alimentacion">Bono alimentación</option>
                                        <option value="transporte">Transporte</option>
                                        <option value="horario flexible">Horario flexible</option>
                                        <option value="becas estudio">Becas de estudio</option>
                                        <option value="teletrabajo">Teletrabajo</option>
                                    </select>
                                    <small class="form-text text-muted">Puedes seleccionar múltiples beneficios usando Ctrl o Shift.</small>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!--seccion de accesos y credenciales-->
                <div class="row">
                    <div class="col-2">
                        <i class="bi bi-door-open fs-2"></i>
                    </div>
                    <div class="col-10 d-flex justify-content-center align-items-center">
                        <h5 class="ms-2">Accesos y credenciales</h5>
                    </div>
                </div>
                <section class="container-fluid py-3" id="accesos_credenciales">
                    <div class="row">
                        <div class="col-6 pb-3">
                            <div class="row">
                                <div class="col-12 d-flex flex-row">
                                    <label for="empleado_usuario">Nombre de usuario</label>
                                    <p class="text-danger  px-1">&bull;</p>
                                </div>
                                <div class="col-12">
                                    <input type="text" name="empleado_usuario" id="empleado_usuario" class="form-control" placeholder="nombre_usuario123" pattern="" required>
                                </div>
                            </div>
                        </div>
                        <div class="col-6 pb-3">
                            <div class="row">
                                <div class="col-12 d-flex flex-row">
                                    <label for="empleado_contraseña">Contraseña de usuario</label>
                                    <p class="text-danger  px-1">&bull;</p>
                                </div>
                                <div class="col-12">
                                    <input type="password" name="empleado_contraseña" id="empleado_contraseña" class="form-control" placeholder="contraseña.123" pattern="" required>
                                </div>
                            </div>
                        </div>
                        <div class="col-6 pb-3">
                            <div class="row">
                                <div class="col-12">
                                    <label for="empleado_id" class="form-label">ID de empleado</label>
                                </div>
                                <div class="col-12">
                                    <input type="text" name="empleado_id" id="empleado_id" class="form-control" value="<?php echo crudEmpleadoC::generar_id(); ?>" readonly>
                                </div>
                            </div>
                        </div>
                        <div class="col-6 pb-3">
                            <div class="row">
                                <div class="col-12 d-flex flex-row">
                                    <label for="empleado_contraseña2">Confirmar contraseña</label>
                                    <p class="text-danger  px-1">&bull;</p>
                                </div>
                                <div class="col-12">
                                    <input type="password" name="empleado_contraseña2" id="empleado_contraseña2" class="form-control" placeholder="contraseña.123" pattern="" required>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!--seccion de botones del formulario-->
                <section class="container-fluid pt-3">
                    <div class="row">
                        <div class="col-6 d-flex flex-row justify-content-center align-items-center">
                            <button type="submit" class="btn btn-success text-white">Agregar empleado</button>
                        </div>
                        <div class="col-6 d-flex flex-row justify-content-center align-items-center">
                            <input type="reset" value="Vaciar formulario" class="btn btn-danger text-white">
                        </div>
                    </div>
                </section>
            </form>
        </div>
    </div>
</div>

<?php
/*echo "<br>" . "datos desencriptados de la sesion" . "<br>";
print_r(crudEmpleadoC::desencriptar_sesion());*/

/*if ($_SERVER["REQUEST_METHOD"] == "$_POST") {
}*/

?>
?>