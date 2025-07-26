<form action="" method="post"></form>

<?php
include("./controller/registroEmpresaC.php");
    $registro = registroEmpresaC::getFormulario($_POST);
?>