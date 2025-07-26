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
    </div>
</div>

<?php
include("./controller/registroEmpresaC.php");
$registro = registroEmpresaC::getFormulario($_POST);
?>