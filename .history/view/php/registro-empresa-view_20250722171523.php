<div class="container-fluid">
    <div class="row d-flex flex-column align-items-center justify-content-center">
        <div class="col-10">
            este es el pinche bootstrap
        </div>
    </div>
</div>

<?php
include("./controller/registroEmpresaC.php");
$registro = registroEmpresaC::getFormulario($_POST);
?>