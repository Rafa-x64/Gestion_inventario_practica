    <?php

    //aqui se ejecuta la vista y se muestran los includes si la pagina cumple cierta condicion

    if ($vista != "inicio-view.php" && $vista != "404-view.php" && $vista != "inicio-sesion-view.php" && $vista != "inicio-view.php" &&) {
        include("view/includes/links.php");
        require("view/includes/header.html");
        include("php/" . $vista);
        require("view/includes/footer.html");
        include("view/includes/scripts.php");
        return;
    }

    include("view/includes/links.php");
    require("php/" . $vista);
    include("view/includes/scripts.php");

    ?>