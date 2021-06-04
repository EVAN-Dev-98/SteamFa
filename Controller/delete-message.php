<?php
/* Created By Evan ( Sajad Gholami ) */
include "__php__.php";

if (isset($_GET['id'])){
    $id = $_GET['id'];
    if (is_numeric($id) && $id > 0){
        $db = new DB();
        $table = Messages::find("id = {$id} ");
        if (isset($table[0])){
            Messages::delete( $id );
            Alert::alerts("پیام مورد نظر با موفقیت حذف شد.",null,"success");
        }
        else
            Alert::alerts("پیامی با این شناسه وجود ندارد!");
        unset($db);
    }
    else
        Alert::alerts("شناسه نامعتبر!");
}
else
    Alert::alerts("شناسه دریافت نشد!");
redirect(account("show-messages.php"));