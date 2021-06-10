<?php
/* Created By Evan ( Sajad Gholami ) */
include "__php__.php";

if (!Authorization::check("ProductAdd")){
    Alert::alerts("متاسفانه شما مجوز افزودن گیفت کارت را ندارید!");
    redirect(account("dashboard.php"));
}

$title = "پنل مدیریت | افزودن گیفت کارت";
get_template("master", "panel", $title);
function main(){
    Alert::alerts("این قسمت بزودی اضافه میشود!",null,"info");
    $alerts = Alert::alerts();
    ?><main><?php echo $alerts;?></main><?php
}