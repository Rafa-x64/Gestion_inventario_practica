<!--incluir controlador-->
<?php include("./controller/registroEmpresaC.php"); ?>

<div class="container-fluid">
    <div class="row d-flex flex-column align-items-center justify-content-center">
        <div class="col-8 align-items-center justify-content-center">
            <!--header-->
            <div class="row d-flex flex-column justify-content-center align-items-center">
                <div class="col">
                    <header id="barra-navegacion">
                        <div class="container-fluid pt">
                            <div class="row flex-row py-4">
                                <div class="col-7 d-flex flex-row justify-content-start">
                                    <i class="bi bi-bricks fs-3 ps-3 text-white">WMS</i>
                                </div>
                                <div class="col-5">
                                    <a href="pa"></a>
                                </div>
                            </div>
                        </div>
                    </header>
                </div>
                <!--formulario-->
                <div class="col-11 d-flex flex-column align-items-center justify-content-center">
                    <!--titulo formulario-->
                    <h1 class="mt-3">Formulario de registro</h1>
                    <form action="" method="post" class="form-control d-flex flex-column align-items-center justify-content-center py-3 mb-5">
                        <div class="row d-flex flex-row align-items-center justify-content-center">
                            <!--nombre legal-->
                            <div class="row">
                                <div class="col-12">
                                    <input type="text" name="nombre_legal" id="nombre_legal" placeholder="Nombre legal" class="form-control">
                                </div>
                            </div>
                            <!--prefijo y rif-->
                            <div class="row d-flex flex-row align-items-center justify-content-center">
                                <div class="col-2 pt-3">
                                    <select name="prefijo" id="prefijo" class="form-select">
                                        <option value="J">J</option>
                                        <option value="G">G</option>
                                        <option value="P">P</option>
                                        <option value="C">C</option>
                                    </select>
                                </div>
                                <div class="col-10 d-flex align-items-center justify-content-center pt-3">
                                    <input type="text" name="rif" id="rif" placeholder="Nro RIF. ejemplo: J-12345678-9" class="form-control">
                                </div>
                            </div>
                            <!--direccion-->
                            <div class="row">
                                <div class="col-12 pt-3">
                                    <input type="text" name="direccion" id="direccion" placeholder="Direccion" class="form-control">
                                </div>
                            </div>
                            <!--numero de contacto-->
                            <div class="row">
                                <div class="col-12 pt-3">
                                    <input type="tel" name="contacto" id="contacto" placeholder="Telefono de contacto" class="form-control">
                                </div>
                            </div>
                            <!--correo-->
                            <div class="row">
                                <div class="col-12 pt-3">
                                    <input type="mail" name="correo" id="correo" placeholder="Correo electronico" class="form-control">
                                </div>
                            </div>
                            <!--nombre del representante-->
                            <div class="row">
                                <div class="col-12 pt-3">
                                    <input type="text" name="nombre_representante" id="nombre_representante" placeholder="Nombre del representante" class="form-control">
                                </div>
                            </div>
                            <!--fecha de registro-->
                            <div class="row">
                                <div class="col-12 pt-3">
                                    <input type="text" name="fecha_registro" id="fecha_registro" value="<?php echo registroEmpresaC::obtener_feha_registro(); ?>" class="form-control" readonly>
                                </div>
                            </div>
                            <!--estado o condicion-->
                            <div class="row">
                                <div class="col-12 text-center pt-3">
                                    <label for="estado_condicion">Estado o condicion</label>
                                </div>
                                <div class="col-12 d-flex flex-column align-items-center justify-content-center">
                                    <select name="estado_condicion" id="estado_condicion" class="form-select">
                                        <option value="activo">activo</option>
                                        <option value="inactivo">inactivo</option>
                                    </select>
                                </div>
                            </div>
                            <!--logo de la empresa-->
                            <div class="row">
                                <div class="col-12 text-center pt-3">
                                    <label for="logo">Logo de la empresa</label>
                                </div>
                                <div class="col-12">
                                    <input type="file" name="logo" id="logo" class="form-control">
                                </div>
                            </div>
                            <!--tipo de empresa-->
                            <div class="row d-flex flex-column align-items-center justify-content-center">
                                <div class="col-12 text-center pt-3">
                                    <label for="tipo_empresa">Tipo de Empresa</label>
                                </div>
                                <div class="col-12">
                                    <select name="tipo_empresa" id="tipo_empresa" class="form-select">
                                        <option value="otra">Otra</option>
                                        <option value="persona_natural">Persona Natural</option>
                                        <option value="sociedad_anonima">Sociedad Anónima (S.A.)</option>
                                        <option value="sociedad_de_responsabilidad_limitada">Sociedad de Responsabilidad Limitada (S.R.L.)</option>
                                        <option value="sociedad_comanditaria">Sociedad Comanditaria</option>
                                        <option value="sociedad_civil">Sociedad Civil</option>
                                        <option value="cooperativa">Cooperativa</option>
                                        <option value="fundacion">Fundación</option>
                                        <option value="comunidad_de_bienes">Comunidad de Bienes</option>
                                        <option value="empresa_del_estado">Empresa del Estado</option>
                                        <option value="comercial">Comercial</option>
                                        <option value="industrial">Industrial</option>
                                        <option value="servicios">Servicios</option>
                                        <option value="agropecuario">Agropecuario</option>
                                        <option value="tecnologico">Tecnológico</option>
                                        <option value="salud">Salud</option>
                                        <option value="educacion">Educación</option>
                                        <option value="transporte">Transporte</option>
                                        <option value="construccion">Construcción</option>
                                        <option value="turismo">Turismo</option>
                                        <option value="financiero">Financiero</option>
                                        <option value="energia">Energía</option>
                                        <option value="local">Local</option>
                                        <option value="regional">Regional</option>
                                        <option value="nacional">Nacional</option>
                                        <option value="multinacional">Multinacional</option>
                                        <option value="transnacional">Transnacional</option>
                                        <option value="microempresa">Microempresa</option>
                                        <option value="pequena">Pequeña</option>
                                        <option value="mediana">Mediana</option>
                                        <option value="grande">Grande</option>
                                        <option value="privada">Privada</option>
                                        <option value="publica">Pública</option>
                                        <option value="mixta">Mixta</option>
                                        <option value="primario">Primario</option>
                                        <option value="secundario">Secundario</option>
                                        <option value="terciario">Terciario</option>
                                        <option value="cuaternario">Cuaternario</option>
                                        <option value="quinario">Quinario</option>
                                    </select>
                                </div>
                            </div>
                            <!--moneda-->
                            <div class="row">
                                <div class="col-12 text-center pt-3">
                                    <label for="moneda">Moneda</label>
                                </div>
                                <div class="col-12 d-flex flex-column align-items-center justify-content-center">
                                    <select name="moneda" id="moneda" class="form-select">
                                        <option value="">Dolar</option>
                                        <option value="">Bolivar</option>
                                        <option value="">Euro</option>
                                    </select>
                                </div>
                            </div>
                            <!--zona horaria-->
                            <div class="row">
                                <div class="col-12 text-center pt-3">
                                    <label for="zona_horaria">Zona horaria</label>
                                </div>
                                <div class="col-12 d-flex flex-column align-items-center justify-content-center">
                                    <input type="text" name="zona_horaria" id="zona_horaria" value="<?php echo registroEmpresaC::obtener_zona_horaria(); ?>" class="form-control" readonly>
                                </div>
                            </div>
                        </div>
                        <!--botones-->
                        <div class="row">
                            <div class="col-6 pt-4">
                                <input type="submit" value="Registrar empresa" class="btn btn-success text-white">
                            </div>
                            <div class="col-6 pt-4">
                                <input type="reset" value="Limpiar formulario" class="btn btn-danger text-white">
                            </div>
                        </div>
                    </form>
                </div>
                <!--fin del formulario-->
            </div>
            <!--fin de la columna-->
        </div>
        <!--fin de la fila-->
    </div>
    <!--fin del container-->
</div>

<!--para obtener la zona horaria del navegador-->
<script>
    const timezone = Intl.DateTimeFormat().resolvedOptions().timeZone;
    document.cookie = "timezone=" + encodeURIComponent(timezone) + "; max-age=600; path=/";
</script>
<!--para obtener la fecha de registro-->
<script>
    const ahora = new Date();
    const soloFecha = ahora.toISOString().split("T")[0];
    document.cookie = "registro_hora=" + encodeURIComponent(soloFecha) + "; max-age=600; path=/";
</script>

<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    echo "el formulario se envio";
    $envio = registroEmpresaC::obtener_formulario($_POST);
    echo $envio;
} else {
    echo "el formulario aun no se envia";
}
?>