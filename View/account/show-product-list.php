<?php
/* Created By Evan ( Sajad Gholami ) */
include "__php__.php";
$title = "پنل مدیریت | مشاهده محصولات";
get_template("master", "panel", $title);
function main(){
    get_controller("get", "product-list");
}