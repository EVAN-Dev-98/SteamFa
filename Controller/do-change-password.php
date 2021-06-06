<?php
/* Created By Evan ( Sajad Gholami ) */
include "__php__.php";
require "Panel-Authentication-Check.php";

if (isset($_POST['submit'])){
    $db = new DB();
    $params = SafeScript($_POST);
    $params = BlockSqlInjection($params);

    if (password_verify($params['password-now'],$row['password'])){
        if ($params['password-new'] === $params['re-password-new']){
            $p['id'] = $row['id'];
            $p['password'] = password_hash($params['password-new'],PASSWORD_DEFAULT);
            User::update($p);
            Alert::alerts("گذرواژه شما با موفقیت ویرایش شد","","success");
            redirect(account("dashboard.php"));
        }
        else
            Alert::alerts("گذرواژه وارد شده با تکرار آن برابر نیست!");
    }
    else
        Alert::alerts("گذرواژه فعلی وارد شده اشتباه است!","لطفا از صحت گذرواژه خود اطمینان حاصل بفرمایید.");
}
else
    Alert::alerts("دسترسی غیرمجاز!");
redirect(account("change-password.php"));