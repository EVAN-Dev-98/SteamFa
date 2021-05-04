<?php
/* Created By Evan ( Sajad Gholami ) */

include "__php__.php";

$title = "پنل مدیریت | مشاهده محصولات";

$file = __FILE__;
$active = basename($file);
get_template("header","panel",$title);
get_template("sidebar","panel");
include $Controller . "get-product-list.php";