    <?php

    //aqui se ejecuta la vista y se muestran los includes si la pagina cumple cierta condicion

    $super_adminstrador = ["dashboard-admin-view.php"];
    $empleado_adminstrador = ["dashboard-empleado-admin-view.php"];
    $empleado_vendedor = ["dashboard-empleado-vendedor-view.php"];
    $otra = ["404-view.php", "inicio-view.php", "inicio-sesion-view.php", "registro-empresa-view.php"];

    session_start();
    $rol = seguridadM::desencriptar_dato($_SESSION["ROL"]);

    switch($rol){
        case: "super administrador":
            bre
    }

    ?>