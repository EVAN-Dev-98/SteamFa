<?php
/* Created By Evan ( Sajad Gholami ) */
include "__php__.php";

if (!Authorization::check("MessageDelete")){
    Alert::alerts("متاسفانه شما مجوز حذف پیام های خود را ندارید!");
    redirect(account("dashboard.php"));
}

if (isset($_GET['id'])){
    $id = $_GET['id'];
    if (real_number($id)){
        $db = new DB();
        $table = Messages::find("id = {$id}");
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