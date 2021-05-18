<?php
/* Created By Evan ( Sajad Gholami ) */
include "__php__.php";

$title = "ثبت نام | استیم فارسی";

// get values from html
if (isset($_POST['submit'])){
    $password = $_POST['password'];
    $repassword = $_POST['repassword'];

    if ($password == $repassword){

        $_POST['password'] = md5($password);
        $db = new DB();
        $params = $_POST;
        unset($params['submit']);
        unset($params['repassword']);
        User::add($params);
        Alert::alerts("{$params['fname']} {$params['lname']} عزیز ، خوش آمدید!","","success");
        redirect(account("dashboard.php"));
    }
    else{
        Alert::alerts("گذرواژه با تکرار آن برابر نیست !!!");
        redirect(account("sign-up.php"));
    }
}
Alert::alerts("دسترسی غیرمجاز!");
redirect(view("home.php"));