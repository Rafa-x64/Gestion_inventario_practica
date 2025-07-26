<?php

echo "#vista"

if ($vista == "inicio-view" || $vista == "404-view") {
    include("php/" . $vista);
} else {
    require("view/includes/header.html");
    include("php/" . $vista);
    require("view/includes/footer.html");
}
