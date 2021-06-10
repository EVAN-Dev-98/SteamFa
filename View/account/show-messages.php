<?php
/* Created By Evan ( Sajad Gholami ) */
include "__php__.php";

if (!Authorization::check("MessageEdit")){
    Alert::alerts("متاسفانه شما مجوز مشاهده پیام های خود را ندارید!");
    redirect(account("dashboard.php"));
}

$title = "پنل مدیریت | پیام ها";
get_template("master", "panel", $title);
function main(){
    get_controller("get","message");
}