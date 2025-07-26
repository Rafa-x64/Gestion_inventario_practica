div.container-fluid>div.row.d-flex flex>

<?php
include("./controller/registroEmpresaC.php");
    $registro = registroEmpresaC::getFormulario($_POST);
?>