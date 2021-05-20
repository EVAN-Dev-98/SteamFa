<?php
/* Created By Evan ( Sajad Gholami ) */
include "__php__.php";

$title = "ایمورتال ها | استیم فارسی";
get_template("header",null,$title);
get_template("showcase",null,null);

include $Controller . "get-immortals.php";

if (isset($alerts)) echo $alerts;

get_template("footer",null,null);