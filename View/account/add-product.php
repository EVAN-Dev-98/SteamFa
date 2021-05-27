<?php
/* Created By Evan ( Sajad Gholami ) */
include "__php__.php";
$title = "پنل مدیریت | افزودن آیتم";
get_template("master", "panel", $title);
function main(){
    get_template("add","product");
}