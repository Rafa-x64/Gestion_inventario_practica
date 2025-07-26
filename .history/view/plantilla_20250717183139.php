<?php

if(!($vista == "inicio-view" || $vista == "404-view")){
    require("view/includes");
    include("php/" . $vista);
}
