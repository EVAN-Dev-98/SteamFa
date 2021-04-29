<?php
/* Created By Evan ( Sajad Gholami ) */

include "__php__.php";
include $Model . "initializer.php";

$title = "پنل مدیریت | پیام ها";

get_template("header","panel",$title);
get_template("sidebar","panel");
include $Controller . "get-message.php";