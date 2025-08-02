    <?php

    //aqui se ejecuta la vista y se muestran los includes si la pagina cumple cierta condicion

    $super_adminstrador = ["dashboard"];
    $empleado_adminstrador = [];
    $empleado_vendedor = [];
    $otra = [];

    if ($vista == "inicio-view.php" || $vista == "404-view.php" || $vista == "inicio-sesion-view.php" || $vista == "registro-empresa-view.php") {
        include("view/includes/links.php");
        require("php/" . $vista);
        include("view/includes/scripts.php");
    } else {
        session_start();
        $rol = seguridadM::desencriptar_dato($_SESSION["ROL"]);
        if ($rol == "super administrador") {
            echo "si es super administrador";
            include("view/includes/links.php");
            require("view/includes/header-admin.php");
            include("php/" . $vista);
            require("view/includes/footer.html");
            include("view/includes/scripts.php");
        }
    }

    ?>