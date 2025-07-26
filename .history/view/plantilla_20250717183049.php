<?php

if(!($vista == "inicio-view" || $vista == "404-view")){
    require("view/");
    include("php/" . $vista);
}
