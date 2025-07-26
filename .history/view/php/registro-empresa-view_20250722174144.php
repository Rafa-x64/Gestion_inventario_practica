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
                        (input:text#nombre_legal[placeholder="Nombre legal"])+(select>option*6)+(input:text#rif[placeholder="RIF"])+(input:text#direccion[placeholder="Direccion"])+(input:text#nombre_legal[placeholder="Nombre legal"])+(input:mail#correo[placeholder="Correo electronico"])+(input:text#nombre_representante[placeholder="Nombre del representante"])+(input:text#fecha_registro[placeholder="Fecha de registro"])+(select>option*2)+(input:file#logo)+(sele)
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