div.container-fluid>div.row.d-flex.flex-column.align-items-center.justify-content-center>div.col-9

<?php
include("./controller/registroEmpresaC.php");
    $registro = registroEmpresaC::getFormulario($_POST);
?>