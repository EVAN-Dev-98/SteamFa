<?php
/* Created By Evan ( Sajad Gholami ) */
include "__php__.php";

if (!Authorization::check("ProductAdd")){
    Alert::alerts("متاسفانه شما مجوز افزودن بازی را ندارید!");
    redirect(account("dashboard.php"));
}

$title = "پنل مدیریت | افزودن بازی";
get_template("master", "panel", $title);
function main(){
    Alert::alerts("این قسمت بزودی اضافه میشود!",null,"info");
    $alerts = Alert::alerts();
    ?><main><?php echo $alerts;?></main><?php
}