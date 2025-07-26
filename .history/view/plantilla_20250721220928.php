    <?php

    include("view/includes/links.php");

    echo __DIR__;

    //aqui se ejecuta la vista y se muestran los includes si la pagina cumple cierta condicion

    if ($vista != "inicio-view.php" && $vista != "404-view.php") {
        require("view/includes/header.html");
        include("php/" . $vista);
        require("view/includes/footer.html");
        return;
    }

    include("php/" . $vista);

    include("view/includes/scripts.php");

    ?>