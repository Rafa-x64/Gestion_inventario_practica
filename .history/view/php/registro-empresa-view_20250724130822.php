<!--incluir controlador-->
<?php include("./controller/registroEmpresaC.php"); ?>

<div class="container-fluid">
    <div class="row d-flex flex-column align-items-center justify-content-center">
        <div class="col-12 col-md-10 col-lg-8 align-items-center justify-content-center">
            <!--header-->
            <div class="row d-flex flex-column justify-content-center align-items-center">
                <div class="col-sm-12 col-md-10 col-lg-11">
                    <header id="barra-navegacion">
                        <div class="container-fluid pt">
                            <div class="row flex-row py-4">
                                <div class="col-7 d-flex flex-row justify-content-start">
                                    <i class="bi bi-bricks fs-3 ps-3 text-white">WMS</i>
                                </div>
                                <div class="col-5 d-flex flex-row justify-content-end">
                                    <a href="index.php?page=inicio">
                                        <i class="bi bi-arrow-bar-left fs-5 text-white">Volver</i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </header>
                </div>
                <!--formulario-->
                <div class="col-12 col-md-10 col-lg-11 d-flex flex-column align-items-center justify-content-center">
                    <!--titulo formulario-->
                    <h1 class="mt-3 text-start">Formulario de registro</h1>
                    <form action="" method="post" id="formulario_empresa" class="form-control d-flex flex-column align-items-center justify-content-center py-3 mb-5">
                        <div class="row d-flex flex-row align-items-center justify-content-center">
                            <!--nombre legal-->
                            <div class="row">
                                <div class="col-12">
                                    <input type="text" name="nombre_legal" id="nombre_legal" class="form-control" placeholder="Nombre legal de la empresa" pattern="[a-zA-ZÀ-ÿ0-9\s\.\-&]{2,100}" required>
                                </div>
                            </div>
                            <!--prefijo y rif-->
                            <div class="row d-flex flex-row align-items-center justify-content-center">
                                <div class="col-4 col-md-3 col-lg-2 pt-3">
                                    <select name="prefijo" id="prefijo" class="form-select">
                                        <option value="J-">J</option>
                                        <option value="G-">G</option>
                                        <option value="P-">P</option>
                                        <option value="C-">C</option>
                                    </select>
                                </div>
                                <div class="col-8 col-md-9 col-lg-10 d-flex align-items-center justify-content-center pt-3">
                                    <input type="text" name="rif" id="rif" class="form-control" placeholder="Nro RIF." pattern="\d{8}-\d" title="ej: J-12345678-9" required>
                                </div>
                            </div>
                            <!--direccion-->
                            <div class="row">
                                <div class="col-12 pt-3">
                                    <input type="text" name="direccion" id="direccion" class="form-control" placeholder="Direccion" pattern="[A-Za-zÀ-ÿ0-9\s\.,\-#]{5,100}" title="Ejemplo: Calle 10, Edif. Sol, Piso 2" required>
                                </div>
                            </div>
                            <!--numero de contacto-->
                            <div class="row">
                                <div class="col-12 pt-3">
                                    <input type="tel" name="contacto" id="contacto" class="form-control" placeholder="Telefono de contacto" pattern="\d{11}" title="Debe contener exactamente 11 dígitos numéricos sin guiones ni espacios" required>
                                </div>
                            </div>
                            <!--correo-->
                            <div class="row">
                                <div class="col-12 pt-3">
                                    <input type="email" name="correo" id="correo" class="form-control" placeholder="Correo electronico" pattern="[^@\s]+@[^@\s]+\.[^@\s]+" title="Debe ser un correo válido, como usuario@dominio.com" required>
                                </div>
                            </div>
                            <!--nombre del representante-->
                            <div class="row">
                                <div class="col-12 pt-3">
                                    <input type="text" name="nombre_representante" id="nombre_representante" class="form-control" placeholder="Nombre del representante" pattern="[A-Za-zÀ-ÿñÑ\s'\-]{2,100}" title="Solo letras, espacios, apóstrofos o guiones. Mínimo 2 caracteres." required>
                                </div>
                            </div>
                            <!--fecha de registro-->
                            <div class="row">
                                <div class="col-12 text-center pt-3">
                                    <label for="fecha_registro">Fecha de registro</label>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12 pt-3">
                                    <input type="text" name="fecha_registro" id="fecha_registro" value="<?php echo registroEmpresaC::obtener_feha_registro(); ?>" class="form-control" readonly>
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
                            <!--cuadricula de 4x4 con los inputs-->
                            <div class="row">
                                <!--estado o condicion-->
                                <div class="col-6">
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
                                </div>
                                <!--logo de la empresa-->
                                <div class="col-6">
                                    <div class="row">
                                        <div class="col-12 text-center pt-3">
                                            <label for="logo">Logo de la empresa</label>
                                        </div>
                                        <div class="col-12">
                                            <input type="file" name="logo" id="logo" class="form-control">
                                        </div>
                                    </div>
                                </div>
                                <!--moneda-->
                                <div class="col-6">
                                    <div class="row">
                                        <div class="col-12 text-center pt-3">
                                            <label for="moneda">Moneda</label>
                                        </div>
                                        <div class="col-12 d-flex flex-column align-items-center justify-content-center">
                                            <select name="moneda" id="moneda" class="form-select">
                                                <option value="Dolar">Dolar</option>
                                                <option value="Bolivar">Bolivar</option>
                                                <option value="Euro">Euro</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <!--zona horaria-->
                                <div class="col-6">
                                    <div class="row">
                                        <div class="col-12 text-center pt-3">
                                            <label for="zona_horaria">Zona horaria</label>
                                        </div>
                                        <div class="col-12 d-flex flex-column align-items-center justify-content-center">
                                            <input type="text" name="zona_horaria" id="zona_horaria" value="<?php echo registroEmpresaC::obtener_zona_horaria(); ?>" class="form-control" readonly>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12 pt-3">
                                <input type="text" name="usuario_admin" id="usuario_admin" class="form-control" placeholder="Nombre de usuario (administrador)" pattern="^[a-zA-Z][a-zA-Z0-9._]{3,19}$" title="El nombre de usuario debe comenzar con una letra y tener entre 4 y 20 caracteres. Puedes usar letras, números, guiones bajos y puntos." required>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12 pt-3">
                                <input type="password" name="contraseña_admin" id="contraseña_admin" class="form-control" placeholder="Contraseña (administrador)" pattern="^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&#.^(){}[\]|\\]).{8,}$" title="La contraseña debe tener al menos 8 caracteres, incluyendo una letra mayúscula, una minúscula, un número y un símbolo." required>
                            </div>
                        </div>
                        <!--botones-->
                        <div class="row">
                            <div class="col-sm-12 col-md-6 col-lg-6 pt-4 d-flex flex-row align-items-center justify-content-center">
                                <input type="submit" value="Registrar empresa" class="btn btn-success text-white" onclick="validar_formulario()">
                            </div>
                            <div class=" col-sm-12 col-md-6 col-lg-6 pt-4 d-flex flex-row align-items-center justify-content-center">
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
<script>
    function validar_formulario() {
        if (confirm('¿Los datos del formulario son válidos?')) {
            document.getElementById('formulario_empresa').submit();
        }
    }
</script>

<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $envio = registroEmpresaC::obtener_formulario($_POST);
} else {
}
?>