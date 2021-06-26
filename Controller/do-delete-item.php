<?php
/* Created By Evan ( Sajad Gholami ) */
include "__php__.php";

if ( isset( $_GET['self'] ) ) {
    if ( Authorization::check("ItemDelete") ) {
        $id = $_GET['self'];
        if (real_number($id)) {
            $db = new DB();
            $table = Product::find("id = {$id}");
            if (isset($table[0])) {
                Product::delete($id);
                Alert::alerts("آیتم شما با موفقیت حذف شد.", null, "success");
                redirect(account("dashboard.php"));
            }
            else
                Alert::alerts("محصولی با این شناسه وجود ندارد!");
            unset($db);
        }
        else
            Alert::alerts("شناسه نامعتبر!");
    }
    else
        Alert::alerts("متاسفانه شما مجوز حذف آیتم خود را ندارید!");
}
elseif ( isset( $_GET['id'] ) ) {
    if ( Authorization::check("ItemDeleteOther") ) {
        $id = $_GET['id'];
        if (real_number($id)) {
            $db = new DB();
            $table = Product::find("id = {$id}");
            if (isset($table[0])) {
                $row = $table[0];
                Product::delete( $id );
                if ($row['attr_name'] === "attr_dota2")
                    attr_dota2::delete($id);
                if ($row['attr_name'] === "attr_csgo")
                    attr_csgo::delete($id);
                Alert::alerts("محصول مورد نظر با موفقیت حذف شد.",null,"success");
                redirect(account("dashboard.php"));
            }
            else
                Alert::alerts("محصولی با این شناسه وجود ندارد!");
            unset($db);
        }
        else
            Alert::alerts("شناسه نامعتبر!");
    }
    else
        Alert::alerts("متاسفانه شما مجوز حذف آیتم دیگران را ندارید!");
}
else
    Alert::alerts("دسترسی غیرمجاز!");
redirect(account("dashboard.php"));