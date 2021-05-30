<?php
/* Created By Evan ( Sajad Gholami ) */
include "__php__.php";
$title = "آیتم های دوتا 2 | استیم فارسی";
get_template("master", null, $title);
function main(){
    get_controller("get","hero");
}