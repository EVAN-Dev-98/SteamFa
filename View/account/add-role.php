<?php
/* Created By Evan ( Sajad Gholami ) */
include "__php__.php";

if (!Authorization::check("RoleMaster")){
    Alert::alerts("متاسفانه شما مجوز افزودن مجوز را ندارید!");
    redirect(account("dashboard.php"));
}

$title = "پنل مدیریت | افزودن مجوز";
get_template("master", "panel", $title);
function main(){
    get_template("add","role");
}