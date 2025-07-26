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
            <div class="row">
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
                    <form action="" method="post">
                        (input:text#nombre_legal[placeholder="Nombre legal"])+(select>option*6)+(input:text#rif[placeholder="RIF"])+(input:text#direccion[placeholder="Direccion"])+(input:text#nombre_legal[placeholder="Nombre legal"])+(input:mail#correo[placeholder="Correo electronico"])+(input:text#nombre_representante[placeholder="Nombre del representante"])+(input:text#fecha_registro[placeholder="Fecha de registro"])+(select>option*2)+(input:file#logo)+(label{Tipo de Empresa}+select[name="tipo_empresa"]>option[value="persona_natural"]{Persona Natural}+option[value="sociedad_anonima"]{Sociedad Anónima (S.A.)}+option[value="sociedad_de_responsabilidad_limitada"]{Sociedad de Responsabilidad Limitada (S.R.L.)}+option[value="sociedad_comanditaria"]{Sociedad Comanditaria}+option[value="sociedad_civil"]{Sociedad Civil}+option[value="cooperativa"]{Cooperativa}+option[value="fundacion"]{Fundación}+option[value="comunidad_de_bienes"]{Comunidad de Bienes}+option[value="empresa_del_estado"]{Empresa del Estado}+option[value="comercial"]{Comercial}+option[value="industrial"]{Industrial}+option[value="servicios"]{Servicios}+option[value="agropecuario"]{Agropecuario}+option[value="tecnologico"]{Tecnológico}+option[value="salud"]{Salud}+option[value="educacion"]{Educación}+option[value="transporte"]{Transporte}+option[value="construccion"]{Construcción}+option[value="turismo"]{Turismo}+option[value="financiero"]{Financiero}+option[value="energia"]{Energía}+option[value="local"]{Local}+option[value="regional"]{Regional}+option[value="nacional"]{Nacional}+option[value="multinacional"]{Multinacional}+option[value="transnacional"]{Transnacional}+option[value="microempresa"]{Microempresa}+option[value="pequena"]{Pequeña}+option[value="mediana"]{Mediana}+option[value="grande"]{Grande}+option[value="privada"]{Privada}+option[value="publica"]{Pública}+option[value="mixta"]{Mixta}+option[value="primario"]{Primario}+option[value="secundario"]{Secundario}+option[value="terciario"]{Terciario}+option[value="cuaternario"]{Cuaternario}+option[value="quinario"]{Quinario})+(select>option)

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