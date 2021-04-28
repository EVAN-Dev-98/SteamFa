<?php
/* Created By Evan ( Sajad Gholami ) */

include "__php__.php";
include  $Model . "initializer.php";


$title = "درباره ما | استیم فارسی";

get_template("header","",$title);
get_template("showcase");
get_template("about");
get_template("footer");