<?php
/* Created By Evan ( Sajad Gholami ) */
include "__php__.php";

if ( Authentication::check() ){
    Alert::alerts("برای ورود با یک اکانت دیگر ابتدا از حساب کاربری خود خارج شوید",null,"warning");
    redirect(view("dashboard.php"));
}

$title = "ورود | استیم فارسی";
get_template("sign","in",$title);