<?php
/* Created By Evan ( Sajad Gholami ) */
include "__php__.php";
$title = "پنل مدیریت | ویرایش اطلاعات";
get_template("master", "panel", $title);
function main($row){
    if (isset($_GET['id'])) {
        $id = $_GET['id'];
        if (is_numeric($id) && $id > 0) {
            $table = User::find("id = {$id}");
            if (isset($table[0])) {
                $row = $table[0];
            } else
                Alert::alerts("کاربری با این شناسه وجود ندارد!");
        } else
            Alert::alerts("شناسه نامعتبر!");
    }
    get_template("profile", "panel", null, $row);
}