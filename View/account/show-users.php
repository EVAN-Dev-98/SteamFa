<?php
/* Created By Evan ( Sajad Gholami ) */

include "__php__.php";

$title = "پنل مدیریت | مشاهده کاربران";
get_template("header","panel",$title);
get_template("sidebar","panel");
include $Controller . "get-users.php";