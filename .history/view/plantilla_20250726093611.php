    <?php

    //aqui se ejecuta la vista y se muestran los includes si la pagina cumple cierta condicion

    if ($vista == "inicio-view.php" || $vista == "404-view.php" || $vista == "inicio-sesion-view.php" || $vista == "registro-empresa-view.php") {
        include("view/includes/links.php");
        require("php/" . $vista);
        include("view/includes/scripts.php");
    } elseif ($vista == "inicio-sesion-view.php" || $vista == "registro-empresa-view.php") {
        include("view/includes/links.php");
        require("view/includes/regitro-login.html");
        include("php/" . $vista);
        require("view/includes/footer.html");
        include("view/includes/scripts.php");
    } else {
        include("view/includes/links.php");
        require("view/includes/header.html");
        include("php/" . $vista);
        require("view/includes/footer.html");
        include("view/includes/scripts.php");
    }

    ?>