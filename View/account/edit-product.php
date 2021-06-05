<?php
/* Created By Evan ( Sajad Gholami ) */
include "__php__.php";
$title = "پنل مدیریت | ویرایش محصول";
get_template("master", "panel", $title);
function main(){
    get_controller("edit", "product");
    $alerts = Alert::alerts();
    ?> <main><?php if ($alerts) echo $alerts; ?></main><?php
}