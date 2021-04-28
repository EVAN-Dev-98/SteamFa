<?php
/* Created By Evan ( Sajad Gholami ) */

include "__php__.php";
include  $Model . "initializer.php";

$title = "پنل مدیریت | مشاهده کاربران";

get_template("header","account",$title);
get_template("sidebar","account");
include $Controller . "get-users.php";