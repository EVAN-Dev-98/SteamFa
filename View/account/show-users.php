<?php
/* Created By Evan ( Sajad Gholami ) */
include "__php__.php";
require "Authentication-Check.php";

$title = "پنل مدیریت | مشاهده کاربران";

get_template("header","panel",$title,$row);
get_template("sidebar","panel",null,$row);
include $Controller . "get-users.php";