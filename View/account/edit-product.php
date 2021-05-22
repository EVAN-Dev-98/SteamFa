<?php
/* Created By Evan ( Sajad Gholami ) */
include "__php__.php";
require "Authentication-Check.php";

$title = "پنل مدیریت | ویرایش آیتم";

get_template("header","panel",$title,$row);
get_template("sidebar","panel",null,$row);
include $Controller . "edit-product.php";
get_template("edit","product");