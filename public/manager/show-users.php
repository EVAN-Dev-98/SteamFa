<?php
/* Created By Evan ( Sajad Gholami ) */

include "__php__.php";

include $inc . "functions.php";

$title = "پنل مدیریت | مشاهده کاربران";

get_view("header","panel",$title);
get_view("sidebar","panel");
include $eng . "get-users.php";