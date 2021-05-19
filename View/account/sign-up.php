<?php
/* Created By Evan ( Sajad Gholami ) */
include "__php__.php";

if ( Authentication::check() ){
    Alert::alerts("برای ثبت نام کاربر جدید ابتدا از حساب کاربری خود خارج شوید",null,"warning");
    redirect(view("home.php"));
}

$title = "ثبت نام | استیم فارسی";
get_template("header","",$title);
get_template("sign","up");