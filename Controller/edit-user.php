<?php
/* Created By Evan ( Sajad Gholami ) */
include "__php__.php";

if ( isset($_POST['submit']) ){
    $db = new DB();
    $params = $_POST;
    unset($params['submit']);
    $params['id'] = $_SESSION['uid'];
    $table = User::find("id = {$params['id']}");
    if (isset($table[0])){
        $row = $table[0];
        if (password_verify($params['password'],$row['password'])){
            unset($params['password']);
            User::update( $params );
            Alert::alerts("پروفایل شما با موفقیت ویرایش شد.",null,"success");
            redirect(account("show-users.php"));
        }
        else{
            Alert::alerts("گذرواژه وارد شده اشتباه است!!!","لطفا از صحت گذرواژه خود اطمینان حاصل بفرمایید.");
        }
    }
    $_SESSION['ins-params'] = $params;
    redirect(account("profile-user.php"));
}
else{
    Alert::alerts("دسترسی غیرمجاز!");
    redirect(view("home.php"));
}