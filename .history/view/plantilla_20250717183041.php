<?php

if(!($vista == "inicio-view" || $vista == "404-view")){
    require("");
    include("php/" . $vista);
}
