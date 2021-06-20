<?php
/* Created By Evan ( Sajad Gholami ) */
include "__php__.php";

if (!Authorization::check("RoleMaster")){
    Alert::alerts("متاسفانه شما مجوز مشاهده مجوز ها را ندارید!");
    redirect(account("dashboard.php"));
}

$title = "پنل مدیریت | مجوز ها";
get_template("master", "panel", $title);
function main(){
    get_controller("get","role");
}