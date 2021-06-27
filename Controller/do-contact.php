<?php
/* Created By Evan ( Sajad Gholami ) */
include "__php__.php";

$title = "تماس با ما | استیم فارسی";
if (isset($_POST['submit'])) {
    if ( Validation::Token_Check( $_POST['csrf_token'] )){
        unset($_POST['csrf_token']);
        unset($_SESSION['CSRF_Token']);
        $db = new DB();
        $params = SafeScript($_POST);
        unset($params['submit']);
        Messages::add($params);
    }
    else
        Alert::alerts("توکن CSRF نامعتبر!");
}
else
    Alert::alerts("دسترسی غیرمجاز!");
redirect(view("home.php"));