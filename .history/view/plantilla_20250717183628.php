<?php



if ($vista == "inicio-view.php" || $vista == "404-view.php") {
    include("php/" . $vista);
} else {
    require("view/includes/header.html");
    include("php/" . $vista);
    require("view/includes/footer.html");
}
