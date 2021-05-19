<?php
/* Created By Evan ( Sajad Gholami ) */
include "__php__.php";

$row = array();
if ( Authentication::check() ){
    global $db;
    $db = new DB();
    $table = User::find("id = {$_SESSION['uid']}");
    $row = $table[0];
}
else{
    Alert::alerts("دسترسی غیرمجاز!");
    redirect(view("home.php"));
}

$title = "پنل مدیریت | افزودن آیتم";

get_template("header","panel",$title,$row);
get_template("sidebar","panel",null,$row);
get_template("add","product");