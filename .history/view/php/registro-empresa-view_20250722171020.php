div.container-fluid>div.row.d-flex.flex-column.align-items-center.justify-content-center>

<?php
include("./controller/registroEmpresaC.php");
    $registro = registroEmpresaC::getFormulario($_POST);
?>