<?php
/* Created By Evan ( Sajad Gholami ) */
include "__php__.php";
$title = "پنل مدیریت | ویرایش اطلاعات";
get_template("master", "panel", $title);
function main($row){
    get_template("profile","panel",null,$row);
}