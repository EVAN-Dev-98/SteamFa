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

$alerts = Alert::alerts();

$title = "پنل مدیریت | ویرایش اطلاعات";

get_template("header","panel",$title,$row);
get_template("sidebar","panel",null,$row);
include $Controller . "edit-user.php";
get_template("profile","panel");