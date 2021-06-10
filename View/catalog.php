<?php
/* Created By Evan ( Sajad Gholami ) */
include "__php__.php";
$title = "فروشگاه | استیم فارسی";
get_template("master", null, $title);
function main(){
    get_controller("get-item");
}