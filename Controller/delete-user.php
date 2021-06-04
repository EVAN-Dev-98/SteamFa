<?php
/* Created By Evan ( Sajad Gholami ) */
include "__php__.php";

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    if (is_numeric($id) && $id > 0) {
        $db = new DB();
        $table = User::find("id = {$id} ");
        if (isset($table[0])) {
            User::delete( $id );
            Alert::alerts("کاربر مورد نظر با موفقیت حذف شد.",null,"success");
        }
        else
            Alert::alerts("کاربری با این شناسه وجود ندارد!");
        unset($db);
    }
    else
        Alert::alerts("شناسه نامعتبر!");
}
else
    Alert::alerts("شناسه دریافت نشد!");
redirect(account("show-users.php"));