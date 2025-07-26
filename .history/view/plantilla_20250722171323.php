    <?php

    //aqui se ejecuta la vista y se muestran los includes si la pagina cumple cierta condicion

    if ($vista != "inicio-view.php" && $vista != "404-view.php" && $vista != "inicio-sesion-view.php" && $vista != "registro-empresa-view.php") {
        include_once("view/includes/links.php");
        require_once("view/includes/header.html");
        include_once("php/" . $vista);
        require_once("view/includes/footer.html");
        include_once("view/includes/scripts.php");
    }

    include_once("view/includes/links.php");
    require_once("php/" . $vista);
    include_once("view/includes/scripts.php");

    ?>