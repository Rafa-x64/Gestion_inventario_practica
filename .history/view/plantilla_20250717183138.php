<?php

if(!($vista == "inicio-view" || $vista == "404-view")){
    require("view/includ");
    include("php/" . $vista);
}
