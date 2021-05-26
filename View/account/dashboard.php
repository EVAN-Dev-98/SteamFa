<?php
/* Created By Evan ( Sajad Gholami ) */
include "__php__.php";
require "Authentication-Check.php";

$title = "پنل مدیریت | صفحه اصلی";

get_template("header","panel",$title,$row);
get_template("sidebar","panel",null,$row);
get_template("dashboard","panel");
get_template("footer","panel");