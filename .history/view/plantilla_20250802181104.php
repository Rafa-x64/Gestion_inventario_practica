    <?php

    //aqui se ejecuta la vista y se muestran los includes si la pagina cumple cierta condicion

    session_start();

    if ($vista == "404-view.php" || $vista == "inicio-sesion-view.php" || $vista == "registro-empresa-view.php" || $vista == "inicio-view.php") {
        include("view/includes/links.php");
        include("php/" . $vista);
        require("view/includes/footer.html");
        include("view/includes/scripts.php");
    } else if ($vista = "dashboard-admin-view.php") {
        include("view/includes/links.php");
        require_once("view/includes/header-admin.php");
        include("php/" . $vista);
        require("view/includes/footer.html");
        include("view/includes/scripts.php");
    }

    ?>