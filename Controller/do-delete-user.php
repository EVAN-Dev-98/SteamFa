<?php
/* Created By Evan ( Sajad Gholami ) */
include "__php__.php";

if ( isset( $_GET['self'] ) ) {
    if ( Authorization::check("UserDelete") ) {
        if ( $_GET['self'] === '' ) {
            $id = Authentication::uid();
            $db = new DB();
            Authentication::logout();
            User::delete($id);
            Alert::alerts("حساب کاربری شما با موفقیت حذف شد.", null, "success");
            redirect(view("home.php"));
            unset($db);
        }
        else
            Alert::alerts("شناسه نامعتبر!");
    }
    else
        Alert::alerts("متاسفانه شما مجوز حذف حساب خود را ندارید!");
}
elseif ( isset( $_GET['id'] ) ) {
    if ( Authorization::check("UserDeleteOther") ) {
        $id = $_GET['id'];
        if (real_number($id)) {
            $db = new DB();
            $table = User::find("id = {$id}");
            if (isset($table[0])) {
                User::delete($id);
                Alert::alerts("کاربر مورد نظر با موفقیت حذف شد.", null, "success");
                redirect(account("dashboard.php"));
            }
            else
                Alert::alerts("کاربری با این شناسه وجود ندارد!");
            unset($db);
        }
        else
            Alert::alerts("شناسه نامعتبر!");
    }
    else
        Alert::alerts("متاسفانه شما مجوز حذف حساب دیگران را ندارید!");
}
else
    Alert::alerts("دسترسی غیرمجاز!");
redirect(account("dashboard.php"));