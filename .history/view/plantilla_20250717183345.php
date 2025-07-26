<?php

if ($vista == "inicio" || $vista == "404") {
    include("php/" . $vista);
} else {
    require("view/includes/header.html");
    include("php/" . $vista);
    require("view/includes/footer.html");
}
