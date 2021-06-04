<?php
/* Created By Evan ( Sajad Gholami ) */
include "__php__.php";

if (isset($_GET['id'])){
    $id = $_GET['id'];
    if (is_numeric($id) && $id > 0){
        $db = new DB();
        $table = Product::find( "id = {$id}" );
        if (isset($table[0])){
            $row = $table[0];
            Product::delete( $id );
            if ($row['attr_name'] === "attr_dota2")
                attr_dota2::delete($id);
            if ($row['attr_name'] === "attr_csgo")
                attr_csgo::delete($id);
            Alert::alerts("محصول مورد نظر با موفقیت حذف شد.",null,"success");
        }
        else
            Alert::alerts("محصولی با این شناسه وجود ندارد!");
        unset($db);
    }
    else
        Alert::alerts("شناسه نامعتبر!");
}
else
    Alert::alerts("شناسه دریافت نشد!");
redirect(account("show-product-list.php"));