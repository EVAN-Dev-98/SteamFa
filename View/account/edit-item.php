<?php
/* Created By Evan ( Sajad Gholami ) */
include "__php__.php";

if (!Authorization::check("ProductEdit")){
    Alert::alerts("متاسفانه شما مجوز ویرایش محصولات خود را ندارید!","ابتدا باید لینک پروفایل استیم خود در قسمت پروفایل پنل کاربری وارد کنید","warning");
    redirect(account("dashboard.php"));
}

$title = "پنل مدیریت | ویرایش محصول";
get_template("master", "panel", $title);
function main(){
    get_controller("do-edit", "item");
    $alerts = Alert::alerts();
    ?> <main><?php if ($alerts) echo $alerts; ?></main><?php
}