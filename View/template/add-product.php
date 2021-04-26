<?php
/* Created By Evan ( Sajad Gholami ) */

include "__php__.php";

include $inc . "functions.php";

$title = "پنل مدیریت | افزودن محصول";

get_view("header","account",$title);
get_view("sidebar","account");
get_view("addproduct","account");