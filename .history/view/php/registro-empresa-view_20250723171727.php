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

                                    </div>
                                </div>
                                
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