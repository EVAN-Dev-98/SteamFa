<?php
/* Created By Evan ( Sajad Gholami ) */
include "__php__.php";

if (!Authorization::check("UserEditOther")){
    Alert::alerts("متاسفانه شما مجوز ویرایش حساب کاربران را ندارید!");
    redirect(account("dashboard.php"));
}

if ( isset($_POST['submit']) ){
    $db = new DB();
    $params = SafeScript($_POST);
    $params = BlockSqlInjection($params);
    unset($params['submit']);
    $table = User::find("id = {$params['id']}");
    $row = $table[0];
    $admin_id = Authentication::uid();
    $table_admin = User::find("id = {$admin_id}");
    $admin = $table_admin[0];
    if (password_verify($params['password'],$admin['password'])){
        unset($params['password']);
        User::update( $params );
        Alert::alerts("حساب کاربری مورد نظر با موفقیت ویرایش شد.",null,"success");
        redirect(account("dashboard.php"));
    }
    else{
        Alert::alerts("گذرواژه وارد شده اشتباه است!!!","لطفا از صحت گذرواژه خود اطمینان حاصل بفرمایید.");
    }
    $_SESSION['ins-params'] = $params;
    redirect(account("edit-user.php"));
}
else{
    Alert::alerts("دسترسی غیرمجاز!");
    redirect(view("home.php"));
}