    <?php

    //aqui se ejecuta la vista y se muestran los includes si la pagina cumple cierta condicion

    session_start();
    $rol = seguridadM::desencriptar_dato($_SESSION["ROL"]);

    if (!isset($_SESSION['rol'])) {
    require_once './controller/logout/cerrarSesion.php';
    cerrarSesion::cerrar_sesion();
    header('Location: index.php');
    exit;
}

switch ($_SESSION['rol']) {
    case 'admin':
        include("view/includes/header-admin.php");
        break;
    case 'empleado_vendedor':
        include("view/includes/header-empleado-vendedor.php");
        break;
    // otros roles...
    default:
        require_once './controller/logout/cerrarSesion.php';
        cerrarSesion::cerrar_sesion();
        header('Location: index.php');
        exit;
}

    ?>