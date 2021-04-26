<?php
/* Created By Evan ( Sajad Gholami ) */

include "__php__.php";

include $inc . "functions.php";

$title = "پنل مدیریت | مشاهده کاربران";

get_view("header","account",$title);
get_view("sidebar","account");
include $eng . "get-users.php";