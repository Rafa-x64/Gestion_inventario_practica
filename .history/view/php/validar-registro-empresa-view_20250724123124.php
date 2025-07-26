<?php
include("./controller/validarRegistroEmpresaC.php");
?>
<div class="container-fluid">
    <div class="col-12 text-center ">
        <h3>¿Los datos del formulario son validos?</h3>
    </div>
    <div class="row">
        <div class="col-10">
            <form action="" method="get" class="form-control pt-3">
                <div class="row d-flex flex-row justify-content-center align-items-center">
                    <div class="col-3">
                        <input type="text" class="form-control" value="<?= $_POST['nombre_legal'] ?>" readonly>
                    </div>
                    <div class="col-3">
                        <input type="text" class="form-control" value="<?= $_POST['prefijo'] . $_POST['rif'] ?>" readonly>
                    </div>
                    <div class="col-3">
                        <input type="text" class="form-control" value="<?= $_POST['direccion'] ?>" readonly>
                    </div>
                    <div class="col-3">
                        <input type="text" class="form-control" value="<?= $_POST['contacto'] ?>" readonly>
                    </div>
                    <div class="col-3">
                        <input type="text" class="form-control" value="<?= $_POST["correo"] ?>" readonly>
                    </div>
                    <div class="col-3">
                        <input type="text" class="form-control" value="<?= $_POST['nombre_representante'] ?>" readonly>
                    </div>
                    <div class="col-3">
                        <input type="text" class="form-control" value="<?= $_POST['fecha_registro'] ?>" readonly>
                    </div>
                    <div class="col-3">
                        <input type="text" class="form-control" value="<?= $_POST['estado_condicion'] ?>" readonly>
                    </div>
                    <div class="col-3">
                        <input type="text" class="form-control" value="<?= $_POST['tipo_empresa'] ?>" readonly>
                    </div>
                    <div class="col-3">
                        <input type="text" class="form-control" value="<?= $_POST['moneda'] ?>" readonly>
                    </div>
                    <div class="col-3">
                        <input type="text" class="form-control" value="<?= $_POST['zona_horaria'] ?>" readonly>
                    </div>
                </div>
                <div class="row d-flex flex-row align-items-center justify-content-center">
                    <div class="col-6 text-end">
                        <label for="valido_si">Si</label>
                    </div>
                    <div class="col-6">
                        <input type="radio" name="valido" id="valido_si" class="form-check-input" value="si" checked>
                    </div>
                </div>
                <div class="row d-flex flex-row align-items-center justify-content-center">
                    <div class="col-6 text-end">
                        <label for="valido_no">No</label>
                    </div>
                    <div class="col-6">
                        <input type="radio" name="valido" id="valido_no" class="form-check-input" value="no">
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 d-flex flex-row justify-content-center">
                        <input type="submit" value="confirmar" class="btn btn-success text-white">
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

<?php 
    if($_SERVER['REQUEST_METHOD'] == 'POST' && $_POST['valido'] == 'si'){
        $envio = validarRegistroEmpresaC::validar_formulario($_POST);
    }
?>