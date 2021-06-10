<?php
/* Created By Evan ( Sajad Gholami ) */
include "__php__.php";

if (!Authorization::check("ItemEdit")){
    Alert::alerts("متاسفانه شما مجوز مشاهده آیتم های خود را ندارید!");
    redirect(account("dashboard.php"));
}

$title = "پنل مدیریت | مشاهده آیتم های شما";
get_template("master", "panel", $title);
function main(){
    get_controller("get", "item-list");
}