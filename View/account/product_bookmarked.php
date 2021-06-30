<?php
/* Created By Evan ( Sajad Gholami ) */
include "__php__.php";

$title = "پنل مدیریت | بوکمارک ها";
get_template("master", "panel", $title);
function main(){
    $_SESSION['redirect'] = $_SERVER['REQUEST_URI'];
    get_controller("get-product","bookmarked");
}