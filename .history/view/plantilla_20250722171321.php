    <?php

    //aqui se ejecuta la vista y se muestran los includes si la pagina cumple cierta condicion

    if ($vista != "inicio-view.php" && $vista != "404-view.php" && $vista != "inicio-sesion-view.php" && $vista != "registro-empresa-view.php") {
        include_("view/includes/links.php");
        require_("view/includes/header.html");
        include_("php/" . $vista);
        require_("view/includes/footer.html");
        include_("view/includes/scripts.php");
    }

    include_("view/includes/links.php");
    require_("php/" . $vista);
    include_("view/includes/scripts.php");

    ?>