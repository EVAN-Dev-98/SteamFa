<?php
/* Created By Evan ( Sajad Gholami ) */
include "__php__.php";

// get values from html
if (isset($_POST['submit'])){
    $db = new DB();
    $params = $_POST;
    $table = User::find("email = '{$params['email']}'");
    if ( !isset($table[0]) ){ // if not find inserted email
        if ($params['password'] === $params['re-password']){ // password and re-password is true
            $params['password'] = md5($params['password']);
            unset($params['submit']);
            unset($params['re-password']);
            User::add($params);
            $table = User::find("email = '{$params['email']}'");
            $row = $table[0];
            Authentication::login( $row['id'] );
            Alert::alerts("{$params['fname']} {$params['lname']} عزیز ، خوش آمدید!","","success");
            redirect(account("dashboard.php"));
        }
        else{
            Alert::alerts("گذرواژه با تکرار آن برابر نیست !!!");
            $_SESSION['ins-params'] = $params;
            redirect(account("sign-up.php"));
        }
    }
    else{
        Alert::alerts("ایمیل وارد شده در سیستم وجود دارد!!!","<a href='".account("sign-in.php")."'>وارد شوید</a>","info");
        $_SESSION['ins-params'] = $params;
        redirect(account("sign-up.php"));
    }
}
Alert::alerts("دسترسی غیرمجاز!");
redirect(view("home.php"));