<?php
include("./controller/validarRegistroEmpresaC.php");
?>
<div class="container-fluid">
    <div class="col-12">
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
                        <input type="text" class="form-control" readonly><?= $_POST['prefijo'] . $_POST['rif'] ?>>
                    </div>
                    <div class="col-3">
                        <input type="text" class="form-control" readonly><?= $_POST['direccion'] ?>>
                    </div>
                    <div class="col-3">
                        <input type="text" class="form-control" readonly><?= $_POST['contacto'] ?>>
                    </div>
                    <div class="col-3">
                        <input type="text" class="form-control" readonly><?= $_POST["correo"] ?>>
                    </div>
                    <div class="col-3">
                        <input type="text" class="form-control" readonly><?= $_POST['nombre_representante'] ?>>
                    </div>
                    <div class="col-3">
                        <input type="text" class="form-control" readonly><?= $_POST['fecha_registro'] ?>>
                    </div>
                    <div class="col-3">
                        <input type="text" class="form-control" readonly><?= $_POST['estado_condicion'] ?>>
                    </div>
                    <div class="col-3">
                        <input type="text" class="form-control" readonly><?= $_POST['tipo_empresa'] ?>>
                    </div>
                    <div class="col-3">
                        <input type="text" class="form-control" readonly><?= $_POST['moneda'] ?>>
                    </div>
                    <div class="col-3">
                        <input type="text" class="form-control" readonly><?= $_POST['zona_horaria'] ?>>
                    </div>
                    <div class="col-3">
                        <input type="text" class="form-control" readonly><?= $_POST["id_empresa"] ?>>
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