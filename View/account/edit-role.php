<?php
/* Created By Evan ( Sajad Gholami ) */
include "__php__.php";

if (!Authorization::check("RoleMaster")){
    Alert::alerts("متاسفانه شما مجوز ویرایش مجوز را ندارید!");
    redirect(account("dashboard.php"));
}

if ( isset($_GET['id']) ){
    $id = $_GET['id'];
    if (is_numeric($id) && $id > 0) {
        $db = new DB();
        $table = Role::find("id = {$id}");
        if (isset($table[0])) {
            $title = "پنل مدیریت | ویرایش مجوز";
            $row = $table[0];
            function main(){
                global $row;
                get_template("edit-role", "panel", null,$row);
            }
            get_template("master", "panel", $title);
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
redirect(account("dashboard.php"));