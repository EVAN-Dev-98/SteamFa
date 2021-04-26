<?php
/* Created By Evan ( Sajad Gholami ) */

include "__php__.php";

include $inc . "functions.php";

$title = "پنل مدیریت | ویرایش اطلاعات";

get_view("header","account",$title);
get_view("sidebar","account");
get_view("users","edit");
include $eng . "do-edit-user.php";
