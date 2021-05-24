<?php
/* Created By Evan ( Sajad Gholami ) */
include "__php__.php";
require "Authentication-Check.php";

$title = "پنل مدیریت | مشاهده محصولات";

get_template("header","panel",$title,$row);
get_template("sidebar","panel",null,$row);
include $Controller . "get-product-list.php";
get_template("footer", "panel");