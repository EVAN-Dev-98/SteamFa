<?php
/* Created By Evan ( Sajad Gholami ) */
include "__php__.php";

if (!Authorization::check("UserEdit")){
    Alert::alerts("متاسفانه شما مجوز ویرایش حساب خود را ندارید!");
    redirect(account("dashboard.php"));
}

$title = "پنل مدیریت | ویرایش پروفایل";
get_template("master", "panel", $title);
function main($row){
    get_template("profile", "panel", null, $row);
}