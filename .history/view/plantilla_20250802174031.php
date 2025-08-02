    <?php

    //aqui se ejecuta la vista y se muestran los includes si la pagina cumple cierta condicion

    session_start();
    $rol = seguridadM::desencriptar_dato($_SESSION["ROL"]);

    switch ($rol) {
        case "super administrador":

            echo "si es super administrador";
            include("view/includes/links.php");
            require("view/includes/header-admin.php");
            include("php/" . $vista);
            require("view/includes/footer.html");
            include("view/includes/scripts.php");

            break;

        case "empleado administrador":
            echo "si es empleado administrador";
            include("view/includes/links.php");
            require("view/includes/header-empleado-admin.php");
            include("php/" . $vista);
            require("view/includes/footer.html");
            include("view/includes/scripts.php");

            break;

        case "empleado vendedor":
            echo "si es empleado vendedor";
            include("view/includes/links.php");
            require("view/includes/header-empleado-vendedor.php");
            include("php/" . $vista);
            require("view/includes/footer.html");
            include("view/includes/scripts.php");

            
    }

    ?>