<?php
/* Created By Evan ( Sajad Gholami ) */
include "__php__.php";

if (!Authorization::check("UserViewOther")){
    Alert::alerts("متاسفانه شما مجوز مشاهده کاربران را ندارید!");
    redirect(account("dashboard.php"));
}

$title = "پنل مدیریت | مشاهده کاربران";
get_template("master", "panel", $title);
function main(){
    get_controller("get","users");
}