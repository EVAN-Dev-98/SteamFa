<?php
/* Created By Evan ( Sajad Gholami ) */

include "__php__.php";

include $inc . "functions.php";

$title = "پنل مدیریت | افزودن محصول";

get_view("header","panel",$title);
get_view("sidebar","panel");
get_view("addproduct","panel");