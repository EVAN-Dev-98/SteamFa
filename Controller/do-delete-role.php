<?php
/* Created By Evan ( Sajad Gholami ) */
include "__php__.php";

if (!Authorization::check("RoleMaster")){
    Alert::alerts("متاسفانه شما مجوز حذف مجوز را ندارید!");
    redirect(account("dashboard.php"));
}

if (isset($_GET['id'])){
    $id = $_GET['id'];
    if (real_number($id)){
        $db = new DB();
        $table = Role::find("id = {$id}");
        if (isset($table[0])){
            Role::delete( $id );
            Alert::alerts("مجوز مورد نظر با موفقیت حذف شد.",null,"success");
        }
        else
            Alert::alerts("مجوزی با این شناسه وجود ندارد!");
        unset($db);
    }
    else
        Alert::alerts("شناسه نامعتبر!");
}
else
    Alert::alerts("شناسه دریافت نشد!");
redirect(account("role-manager.php"));