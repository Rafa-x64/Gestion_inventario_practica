<?php

if ($vista == "inicio-view" || $vista == "404-view") {
    include("php/" . $vista);
} else {
    require("view/includes/header.html");
    
    require("view/includes/footer.html");
}
