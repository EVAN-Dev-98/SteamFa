<?php
/* Created By Evan ( Sajad Gholami ) */
include "__php__.php";

if (!Authorization::check("ItemAdd")) {
    Alert::alerts("متاسفانه شما مجوز افزودن آیتم را ندارید!", "میتوانید با اضافه کردن لینک پروفایل استیم خود در قسمت پروفایل پنل کاربری مجوز افزودن آیتم را بصورت رایگان دریافت کنید", "info");
    redirect(account("dashboard.php"));
}

$title = "پنل مدیریت | آیتم های استیم شما";
get_template("master", "panel", $title);
function main()
{
    get_controller("get","inventory");
}