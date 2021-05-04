<?php
/* Created By Evan ( Sajad Gholami ) */

include "__php__.php";

$title = "پنل مدیریت | افزودن آیتم";

$file = __FILE__;
$active = basename($file);
get_template("header","panel",$title);
get_template("sidebar","panel");
get_template("add","product");