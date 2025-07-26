<style>
    [class*="col"],
    [class*="row"],
    [class*="section"] {
        border: 2px solid black;
    }

    [class*="container"] {
        border: 2px solid black;
    }
</style>
<div class="container-fluid">
    <div class="row d-flex flex-column align-items-center justify-content-center">
        <div class="col-8 align-items-center justify-content-center">
            <div class="row d-flex flex-column justify-content-center align-items-center">
                <div class="col">
                    <header id="barra-navegacion">
                        <div class="container-fluid pt">
                            <div class="row flex-row py-4">
                                <div class="col-7 d-flex flex-row justify-content-start">
                                    <i class="bi bi-bricks fs-3 ps-3 text-white">WMS</i>
                                </div>
                            </div>
                        </div>
                    </header>
                </div>
                <div class="col-11 d-flex flex-column align-items-center justify-content-center">
                    <h1>Formulario de registro</h1>
                    <form action="" method="post" class="form-control d-flex flex-column align-items-center justify-content-center">
                        <div class="row d-flex flex-row align-items-center justify-content-center">
                            <div class="col-12 d-flex flex-column align-items-center justify-content-center">
                                <div class="row">
                                    <div class="col-12">
                                        <input type="text" name="nombre_legal" id="nombre_legal" placeholder="Nombre legal">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12 text-center">
                                        <label for="prefijo">Prefijo</label>
                                    </div>
                                    <div class="col-12 d-flex flex-row align-items-center justify-content-center">
                                        <select name="prefijo" id="prefijo">
                                            <option value="J">J</option>
                                            <option value="G">G</option>
                                            <option value="P">P</option>
                                            <option value="C">C</option>
                                        </select>
                                        <div class="col-12 d-flex flex-row align-items-center justify-content-center">
                                            <input type="text" name="rif" id="rif" placeholder="Nro. RIF">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12">
                                        <input type="text" name="direccion" id="direccion" placeholder="Direccion">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12">
                                        <input type="text" name="nombre_legal" id="nombre_legal" placeholder="Nombre legal">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12">
                                        <input type="mail" name="correo" id="correo" placeholder="Correo electronico">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12">
                                        <input type="text" name="nombre_representante" id="nombre_representante" placeholder="Nombre del representante">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12">
                                        <input type="text" name="fecha_registro" id="fecha_registro" placeholder="Fecha de registro">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12 text-center">
                                        <label for="estado_condicion">Estado o condicion</label>
                                    </div>
                                    <div class="col-12">
                                        <select name="estado_condicion" id="estado_condicion">
                                            <option value="activo">activo</option>
                                            <option value="inactivo">inactivo</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12 text-center">
                                        <label for="logo">Logo de la empresa</label>
                                    </div>
                                    <div class="col-12">
                                        <input type="file" name="logo" id="logo">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12">
                                        <label for="tipo_empresa">Tipo de Empresa</label>
                                    </div>
                                    <div class="col-12">
                                        <select name="tipo_empresa" id="tipo_empresa">
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
                                <div class="row">
                                    <div class="col-12">
                                        <label for="moneda">Moneda</label>
                                    </div>
                                    <div class="col-12">
                                        <select name="moneda" id="moneda">Moneda
                                            <option value="">Dolar</option>
                                            <option value="">Bolivares</option>
                                            <option value="">Euros</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12">
                                        <label for="zona_horaria">Zona horaria</label>
                                    </div>
                                    <div class="col-12">
                                        <input type="text" name="zona_horaria" id="zona_horaria" placeholder="Zona horaria" readonly>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-6">
                                <input type="submit" value="Registrar empresa" clas>
                            </div>
                            <div class="col-6">
                                <input type="reset" value="Limpiar formulario">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
include("./controller/registroEmpresaC.php");
$registro = registroEmpresaC::getFormulario($_POST);
?>