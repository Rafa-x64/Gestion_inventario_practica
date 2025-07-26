<!--incluir controlador-->
<?php
include("./controller/registroEmpresaC.php");
?>

<div class="container-fluid">
    <div class="row d-flex flex-column align-items-center justify-content-center">
        <div class="col-12 col-md-10 col-lg-8 align-items-center justify-content-center">
            <!--header-->
            <div class="row d-flex flex-column justify-content-center align-items-center">
                <div class="col-sm-12 col-md-10 col-lg-11">
                    <header id="barra-navegacion">
                        <div class="container-fluid pt">
                            <div class="row flex-row py-4">
                                <div class="col-7 d-flex flex-row justify-content-start">
                                    <i class="bi bi-bricks fs-3 ps-3 text-white">WMS</i>
                                </div>
                                <div class="col-5 d-flex flex-row justify-content-end">
                                    <a href="index.php?page=inicio">
                                        <i class="bi bi-arrow-bar-left fs-5 text-white">Volver</i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </header>
                </div>
                <!--formulario-->
                <div class="col-12 col-md-10 col-lg-11 d-flex flex-column align-items-center justify-content-center">
                    <!--titulo formulario-->
                    <h1 class="mt-3 text-start">Inicio de sesion</h1>
                    <form action="" method="post" id="formulario_empresa" class="form-control d-flex flex-column align-items-center justify-content-center py-3 mb-5" enctype="multipart/form-data">
                        <div class="row d-flex flex-row align-items-center justify-content-center">
                            <div class="row d-flex flex-column justify-content-center align-items-center">
                                <div class="col-5 text-center">
                                    <i class="bi bi-person-circle fs-1"></i>
                                </div>
                            </div>
                            <div class="row d-flex flex-row justify-content-center align-items-center">
                                <div class="col-1 d-flex flex-row justify-content-end align-items-center">
                                    <i class="bi bi-person-check-fill fs-3"></i>
                                </div>
                                <div class="col-8">
                                    <input type="text" name="usuario" id="usuario" class="form-control my-3" placeholder="Usuario">
                                </div>
                            </div>
                            <div class="row d-flex flex-row justify-content-center align-items-center">
                                <div class="col-1 d-flex flex-row justify-content-end align-items-center">
                                    <i class="bi bi-shield-lock-fill fs-3"></i>
                                </div>
                                <div class="col-8">
                                    <input type="password" name="contraseña" id="contraseña" class="form-control my-3" placeholder="Contraseña">
                                </div>
                            </div>
                            <!--botones-->
                            <div class="row d-flex flex-row align-items-center justify-content-center">
                                <div class="col-sm-10 col-md-4 col-lg-4 pt-4 d-flex flex-lg-row flex-sm-column align-items-sm-center justify-content-sm-center align-items-lg-center justify-content-lg-end">
                                    <input type="submit" value="Iniciar sesion" class="btn btn-success text-white">
                                </div>
                                <div class="col-sm-10 col-md-4 col-lg-4 pt-4 d-flex flex-lg-row flex-sm-col align-items-sm-center justify-content-sm-center align-items-lg-center justify-content-lg-start">
                                    <input type="reset" value="Vaciar formulario" class="btn btn-danger text-white">
                                </div>
                            </div>
                    </form>
                </div>
                <!--fin del formulario-->
            </div>
            <!--fin de la columna-->
        </div>
        <!--fin de la fila-->
    </div>
    <!--fin del container-->
</div>