<?php

if (!($vista == "inicio-view" || $vista == "404-view")) {
    require("view/includes/header.html");
    include("php/" . $vista);
    require("view/includes/footer.");
}
