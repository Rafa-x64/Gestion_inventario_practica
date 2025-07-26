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
        <div class="col-8 align">
            <p>este es el pinche bootstrap</p>
        </div>
    </div>
</div>

<?php
include("./controller/registroEmpresaC.php");
$registro = registroEmpresaC::getFormulario($_POST);
?>