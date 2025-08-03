    <?php

    //aqui se ejecuta la vista y se muestran los includes si la pagina cumple cierta condicion

    session_start();

    $rol = null;
    if (isset($_SESSION["ROL"]) && is_string($_SESSION["ROL"])) {
        $rol = seguridadM::desencriptar_dato($_SESSION["ROL"]);
    }

    // Rol desencriptado
    $rol = seguridadM::desencriptar_dato($_SESSION["ROL"]);

    // Listado de vistas que NO deben incluir ningún header
    $vistas_sin_header = [
        "404-view.php",
        "inicio-sesion-view.php",
        "registro-empresa-view.php",
        "inicio-view.php"
    ];

    include("view/includes/links.php");

    // Verifica si la vista actual está entre las que no llevan header
    if (in_array($vista, $vistas_sin_header)) {
        include("php/" . $vista);
    } else {
        // Header según rol
        switch ($rol) {
            case "super administrador":
                require("view/includes/header-admin.php");
                break;
            case "empleado administrador":
                require("view/includes/header-empleado-admin.php");
                break;
            case "empleado vendedor":
                require("view/includes/header-empleado-vendedor.php");
                break;
            default:
                break;
        }

        include("php/" . $vista);
        require("view/includes/footer.html");
    }

    include("view/includes/scripts.php");
    ?>
