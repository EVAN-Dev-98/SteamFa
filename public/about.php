<?php
/* Created By Evan ( Sajad Gholami ) */

include "__php__.php";

include $inc . "functions.php";

$title = "درباره ما | استیم فارسی";

get_view("header","",$title);
get_view("showcase");
get_view("about");
get_view("footer");