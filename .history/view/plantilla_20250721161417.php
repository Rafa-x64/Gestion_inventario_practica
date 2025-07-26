<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo NOMBRE_APLICACION; ?></title>
</head>

<body>
    <?php

    //aqui se ejecuta la vista y se muestran los includes si la pagina cumple cierta condicion

    if ($vista != "inicio-sesion-view.php" && $vista != "404-view.php") {
        require("view/includes/header.html");
        include("php/" . $vista);
        require("view/includes/footer.html");
        return;
    }

    include("php/" . $vista);
    ?>
</body>

</html>