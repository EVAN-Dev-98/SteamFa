<?php
/* Created By Evan ( Sajad Gholami ) */
include "__php__.php";
$title = "فروشگاه | استیم فارسی";
get_template("master", null, $title);
function main(){
    $_SESSION['redirect'] = $_SERVER['REQUEST_URI'];
    get_controller("get-item");
}