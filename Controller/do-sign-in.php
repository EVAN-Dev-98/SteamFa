<?php
/* Created By Evan ( Sajad Gholami ) */
include "__php__.php";

// get values from html
if (isset($_POST['submit'])){
    $db = new DB();
    $params = $_POST;
    $table = User::find("email = '{$params['email']}'");
    unset($db);
    if (isset($table[0])){ // email and password is true
        $row = $table[0];
        if ( password_verify($params['password'],$row['password'])){
            Authentication::login( $row["id"] );
            Alert::alerts("{$row['fname']} {$row['lname']} عزیز ، خوش آمدید!","","success");
            if (isset($_SESSION['redirect'])){
                $redirect = $_SESSION['redirect'];
                unset($_SESSION['redirect']);
                redirect($redirect);
            }
            else
                redirect(account("dashboard.php"));
        }
        else
            Alert::alerts("نام کاربری یا کلمه عبور صحیح نمی باشد !");
    }
    else
        Alert::alerts("ایمیل وارد شده در سیستم وجود ندارد!","<a href='".account("sign-up.php")."'>ثبت نام کنید</a>","info");

    unset($db);
    $_SESSION['ins-email'] = $params["email"];
    redirect(account("sign-in.php"));
}
else{
    Alert::alerts("دسترسی غیرمجاز!");
    redirect(account("sign-in.php"));
}