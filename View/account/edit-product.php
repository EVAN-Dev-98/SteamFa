<?php
/* Created By Evan ( Sajad Gholami ) */

include "__php__.php";

$title = "پنل مدیریت | ویرایش آیتم";
get_template("header","panel",$title);
get_template("sidebar","panel");
include $Controller . "edit-product.php";
get_template("edit","product");