<?php
/* Created By Evan ( Sajad Gholami ) */
include "__php__.php";

// get values from html
if (isset($_POST['submit'])){
    $db = new DB();
    $params = SafeScript($_POST);
    $params = BlockSqlInjection($params);
    $table = User::find("email = '{$params['email']}'");
    if ( !isset($table[0]) ){ // if not find inserted email
        if ($params['password'] === $params['re-password']){ // password and re-password is true
            $params['password'] = password_hash($params['password'],PASSWORD_DEFAULT);
            unset($params['submit']);
            unset($params['re-password']);
            $uid = User::add($params);
            Authentication::login( $uid );
            Alert::alerts("{$params['fname']} {$params['lname']} عزیز ، خوش آمدید!","","success");
            if (isset($_SESSION['redirect'])){
                $redirect = $_SESSION['redirect'];
                unset($_SESSION['redirect']);
                if ($redirect == view("home")){
                    redirect(account("dashboard.php"));
                }
                else
                    redirect($redirect);
            }
            else
                redirect(account("dashboard.php"));
        }
        else{
            Alert::alerts("گذرواژه با تکرار آن برابر نیست !");
            $_SESSION['ins-params'] = $params;
            redirect(account("sign-up.php"));
        }
    }
    else{
        Alert::alerts("ایمیل وارد شده در سیستم وجود دارد!","<a href='".account("sign-in.php")."'>وارد شوید</a>","info");
        $_SESSION['ins-params'] = $params;
        redirect(account("sign-up.php"));
    }
    unset($db);
}
else{
    Alert::alerts("دسترسی غیرمجاز!");
    redirect(account("sign-up.php"));
}