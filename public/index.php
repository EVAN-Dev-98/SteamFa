<?php
/* Created By Evan ( Sajad Gholami ) */

include "__php__.php";

include $inc . "functions.php";
include $inc . "settings.php";

if ($FirstTime){
    include $inc . "setup.php";
    exit();
}

$title = "صفحه اصلی | استیم فارسی";

get_view("header","",$title);
get_view("showcase");
get_view("footer");