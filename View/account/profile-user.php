<?php
/* Created By Evan ( Sajad Gholami ) */

include "__php__.php";

$title = "پنل مدیریت | ویرایش اطلاعات";
$alerts = Alert::alerts();
get_template("header","panel",$title);
get_template("sidebar","panel");
include $Controller . "edit-user.php";
get_template("profile","panel");