<?php
/* Created By Evan ( Sajad Gholami ) */
include "__php__.php";

// get values from html
if (isset($_POST['submit'])){
    $db = new DB();
    $params = $_POST;
    $params["password"] = md5($params["password"]);
    $table = User::find("email = '{$params['email']}' AND password = '{$params['password']}'");
    unset($db);
    if (isset($table[0])){ // email and password is true
        $row = $table[0];
        Authentication::login( $row["id"] );
        Alert::alerts("{$row['fname']} {$row['lname']} عزیز ، خوش آمدید!","","success");
        redirect(account("dashboard.php"));
    }
    else{
        Alert::alerts("نام کاربری یا کلمه عبور صحیح نمی باشد !!!");
        $_SESSION['ins-email'] = $params["email"];
        redirect(account("sign-in.php"));
    }
}
Alert::alerts("دسترسی غیرمجاز!");
redirect(view("home.php"));