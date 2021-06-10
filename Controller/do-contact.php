<?php
/* Created By Evan ( Sajad Gholami ) */
include "__php__.php";

$title = "تماس با ما | استیم فارسی";
if (isset($_POST['submit'])) {
    $db = new DB();
    $params = SafeScript($_POST);
    unset($params['submit']);
    Messages::add($params);
}
else
    Alert::alerts("دسترسی غیرمجاز!");
redirect(view("home.php"));