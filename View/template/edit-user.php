<?php
/* Created By Evan ( Sajad Gholami ) */

include "__php__.php";
include  $Model . "initializer.php";

$title = "پنل مدیریت | ویرایش اطلاعات";

get_template("header","account",$title);
get_template("sidebar","account");
get_template("users","edit");