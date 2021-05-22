<?php
/* Created By Evan ( Sajad Gholami ) */
include "__php__.php";
require "Authentication-Check.php";

$title = "پنل مدیریت | پیام ها";

get_template("header","panel",$title,$row);
get_template("sidebar","panel",null,$row);
include $Controller . "get-message.php";