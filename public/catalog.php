<?php

include "__php__.php";

include $inc . "settings.php";
include $inc . "functions.php";
$title = "محصولات | استیم فارسی";
get_view("header",null,$title);
get_view("showcase",null,null);

include $eng . "get-product.php";

if (isset($alerts)) echo $alerts;

get_view("footer",null,null);
