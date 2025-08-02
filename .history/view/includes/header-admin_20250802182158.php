<header class="container-fluid" id="menu-superior">
    <div class="row bg-primary py-3">
        <!--parte izquierda del menu-superior-->
        <div class="col-3 col-md-2 col-lg-1 d-flex flex-column justify-content-center align-items-center">
            <button class="btn border-white rounded" data-bs-toggle="offcanvas" data-bs-target="#menu-izquierdo">
                <i
                    class="bi bi-caret-right-fill fs-sm-6 fs-md-4 fs-lg-1 text-white d-flex flex-row justify-content-center align-items-center">Menu</i>
            </button>
            <!--aqui va el offcanva-->
            <div class="offcanvas offcanvas-start" tabindex="-1" id="menu-izquierdo">
                <!--encaezado del offcanvas-->
                <div class="offcanvas-header">
                    <!--titulo del offcanva-->
                    <div class="offcanvas-title">
                        <h3>Menu Super Administrador</h3>
                        <!--boton que cierra el offcanva-->
                        <button class="btn border-primary rounded" data-bs-dismiss="offcanvas">
                            <i class="bi bi-caret-left-fill fs-6 text-primary">Cerrar</i>
                        </button>
                    </div>
                </div>
                <!--cuerpo del offcanva-->
                <div class="offcanvas-body">
                    <div class="row">
                        <div class="col-9 ps-lg-4 py-2 my-2 rounded">
                            <!-- Sección: Productos -->
                            <details title="Gestión directa de todo lo que entra, sale y se mantiene en stock.">
                                <summary class="pb-3">productos</summary>
                                <ul id="lista-opciones-menu-izquierdo">
                                    <li class="pt-2">
                                        <div class="row d-flex flex-row">
                                            <div
                                                class="col-1 px-0 d-flex flex-row justify-content-start align-items-center">
                                                <i class="bi bi-plus text-primary fs-5"></i>
                                            </div>
                                            <div
                                                class="col-11 px-0 d-flex flex-row justify-content-start align-items-center">
                                                <a href="">Ver productos en stock</a>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="pt-2">
                                        <div class="row d-flex flex-row">
                                            <div
                                                class="col-1 px-0 d-flex flex-row justify-content-start align-items-center">
                                                <i class="bi bi-plus text-primary fs-5"></i>
                                            </div>
                                            <div
                                                class="col-11 px-0 d-flex flex-row justify-content-start align-items-center">
                                                <a href="">Registrar entradas</a>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="pt-2">
                                        <div class="row d-flex flex-row">
                                            <div
                                                class="col-1 px-0 d-flex flex-row justify-content-start align-items-center">
                                                <i class="bi bi-plus text-primary fs-5"></i>
                                            </div>
                                            <div
                                                class="col-11 px-0 d-flex flex-row justify-content-start align-items-center">
                                                <a href="">Historial de movimientos</a>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="pt-2">
                                        <div class="row d-flex flex-row">
                                            <div
                                                class="col-1 px-0 d-flex flex-row justify-content-start align-items-center">
                                                <i class="bi bi-plus text-primary fs-5"></i>
                                            </div>
                                            <div
                                                class="col-11 px-0 d-flex flex-row justify-content-start align-items-center">
                                                <a href="">Alerta de bajo inventario</a>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </details>

                            <!-- Sección: Ventas -->
                            <details>
                                <summary class="pb-3">ventas</summary>
                                <ul id="lista-opciones-menu-izquierdo">
                                    <li class="pt-2">
                                        <div class="row d-flex flex-row">
                                            <div
                                                class="col-1 px-0 d-flex flex-row justify-content-start align-items-center">
                                                <i class="bi bi-plus text-primary fs-5"></i>
                                            </div>
                                            <div
                                                class="col-11 px-0 d-flex flex-row justify-content-start align-items-center">
                                                <a href="">Registrar venta</a>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="pt-2">
                                        <div class="row d-flex flex-row">
                                            <div
                                                class="col-1 px-0 d-flex flex-row justify-content-start align-items-center">
                                                <i class="bi bi-plus text-primary fs-5"></i>
                                            </div>
                                            <div
                                                class="col-11 px-0 d-flex flex-row justify-content-start align-items-center">
                                                <a href="">Historial de ventas</a>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="pt-2">
                                        <div class="row d-flex flex-row">
                                            <div
                                                class="col-1 px-0 d-flex flex-row justify-content-start align-items-center">
                                                <i class="bi bi-plus text-primary fs-5"></i>
                                            </div>
                                            <div
                                                class="col-11 px-0 d-flex flex-row justify-content-start align-items-center">
                                                <a href="">Ver productos vendidos</a>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </details>

                            <!-- Sección: Compras -->
                            <details>
                                <summary class="pb-3">compras</summary>
                                <ul id="lista-opciones-menu-izquierdo">
                                    <li class="pt-2">
                                        <div class="row d-flex flex-row">
                                            <div
                                                class="col-1 px-0 d-flex flex-row justify-content-start align-items-center">
                                                <i class="bi bi-plus text-primary fs-5"></i>
                                            </div>
                                            <div
                                                class="col-11 px-0 d-flex flex-row justify-content-start align-items-center">
                                                <a href="">Registrar compra</a>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="pt-2">
                                        <div class="row d-flex flex-row">
                                            <div
                                                class="col-1 px-0 d-flex flex-row justify-content-start align-items-center">
                                                <i class="bi bi-plus text-primary fs-5"></i>
                                            </div>
                                            <div
                                                class="col-11 px-0 d-flex flex-row justify-content-start align-items-center">
                                                <a href="">Historial de compras</a>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="pt-2">
                                        <div class="row d-flex flex-row">
                                            <div
                                                class="col-1 px-0 d-flex flex-row justify-content-start align-items-center">
                                                <i class="bi bi-plus text-primary fs-5"></i>
                                            </div>
                                            <div
                                                class="col-11 px-0 d-flex flex-row justify-content-start align-items-center">
                                                <a href="">Ver proveedores frecuentes</a>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </details>

                            <!-- Sección: Reportes -->
                            <details>
                                <summary class="pb-3">reportes</summary>
                                <ul id="lista-opciones-menu-izquierdo">
                                    <li class="pt-2">
                                        <div class="row d-flex flex-row">
                                            <div
                                                class="col-1 px-0 d-flex flex-row justify-content-start align-items-center">
                                                <i class="bi bi-plus text-primary fs-5"></i>
                                            </div>
                                            <div
                                                class="col-11 px-0 d-flex flex-row justify-content-start align-items-center">
                                                <a href="">Reporte de inventario</a>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="pt-2">
                                        <div class="row d-flex flex-row">
                                            <div
                                                class="col-1 px-0 d-flex flex-row justify-content-start align-items-center">
                                                <i class="bi bi-plus text-primary fs-5"></i>
                                            </div>
                                            <div
                                                class="col-11 px-0 d-flex flex-row justify-content-start align-items-center">
                                                <a href="">Reporte de ventas</a>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="pt-2">
                                        <div class="row d-flex flex-row">
                                            <div
                                                class="col-1 px-0 d-flex flex-row justify-content-start align-items-center">
                                                <i class="bi bi-plus text-primary fs-5"></i>
                                            </div>
                                            <div
                                                class="col-11 px-0 d-flex flex-row justify-content-start align-items-center">
                                                <a href="">Reporte de compras</a>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </details>

                            <!-- Sección: Empleados -->
                            <details>
                                <summary class="pb-3">Empleados</summary>
                                <ul id="lista-opciones-menu-izquierdo">
                                    <li class="pt-2">
                                        <div class="row d-flex flex-row">
                                            <div
                                                class="col-1 px-0 d-flex flex-row justify-content-start align-items-center">
                                                <i class="bi bi-plus text-primary fs-5"></i>
                                            </div>
                                            <div
                                                class="col-11 px-0 d-flex flex-row justify-content-start align-items-center">
                                                <a href="">Ver listado de empleados</a>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="pt-2">
                                        <div class="row d-flex flex-row">
                                            <div
                                                class="col-1 px-0 d-flex flex-row justify-content-start align-items-center">
                                                <i class="bi bi-plus text-primary fs-5"></i>
                                            </div>
                                            <div
                                                class="col-11 px-0 d-flex flex-row justify-content-start align-items-center">
                                                <a href="">Añadir empleado</a>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="pt-2">
                                        <div class="row d-flex flex-row">
                                            <div
                                                class="col-1 px-0 d-flex flex-row justify-content-start align-items-center">
                                                <i class="bi bi-plus text-primary fs-5"></i>
                                            </div>
                                            <div
                                                class="col-11 px-0 d-flex flex-row justify-content-start align-items-center">
                                                <a href="">Editar empleado</a>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="pt-2">
                                        <div class="row d-flex flex-row">
                                            <div
                                                class="col-1 px-0 d-flex flex-row justify-content-start align-items-center">
                                                <i class="bi bi-plus text-primary fs-5"></i>
                                            </div>
                                            <div
                                                class="col-11 px-0 d-flex flex-row justify-content-start align-items-center">
                                                <a href="">Eliminar empleado</a>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </details>

                            <!-- Sección: Configuración -->
                            <details>
                                <summary class="pb-3">configuracion</summary>
                                <ul id="lista-opciones-menu-izquierdo">
                                    <li class="pt-2">
                                        <div class="row d-flex flex-row">
                                            <div
                                                class="col-1 px-0 d-flex flex-row justify-content-start align-items-center">
                                                <i class="bi bi-plus text-primary fs-5"></i>
                                            </div>
                                            <div
                                                class="col-11 px-0 d-flex flex-row justify-content-start align-items-center">
                                                <a href="">Datos de empresa</a>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="pt-2">
                                        <div class="row d-flex flex-row">
                                            <div
                                                class="col-1 px-0 d-flex flex-row justify-content-start align-items-center">
                                                <i class="bi bi-plus text-primary fs-5"></i>
                                            </div>
                                            <div
                                                class="col-11 px-0 d-flex flex-row justify-content-start align-items-center">
                                                <a href="">Configurar impuestos</a>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="pt-2">
                                        <div class="row d-flex flex-row">
                                            <div
                                                class="col-1 px-0 d-flex flex-row justify-content-start align-items-center">
                                                <i class="bi bi-plus text-primary fs-5"></i>
                                            </div>
                                            <div
                                                class="col-11 px-0 d-flex flex-row justify-content-start align-items-center">
                                                <a href="">Usuario y contraseña</a>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </details>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--parte derecha del menu-->
        <div class="col-9 col-md-10 col-lg-11">
            <div class="row d-flex flex-row justify-content-end align-items-center">
                <div class="col-1 text-center">
                    <form method="post">
                        <a href="index.php?page=i" class="btn">
                            <i class="bi bi-box-arrow-left text-white fs-sm-6 fs-md-4 fs-lg-1"></i>
                        </a>
                    </form>
                </div>
                <div class="col-1 text-center">
                    <a href="" class="btn">
                        <i class="bi bi-question-octagon text-white fs-sm-6 fs-md-4 fs-lg-1"></i>
                    </a>
                </div>
                <div class="col-1">
                    <img src="" alt="imagen" class="img-fluid">
                </div>
            </div>
        </div>
    </div>
</header>

<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['cerrar_sesion'])) {
    require_once './controller/logout/cerrarSesion.php';
    cerrarSesion::cerrar_sesion();
    header('Location: index.php?page=inicio');
}
?>