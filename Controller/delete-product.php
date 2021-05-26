<?php

include "__php__.php";

if (isset($_GET['id'])){
    $db = new DB();
    $table = Product::find( "id = {$_GET['id']}" );
    if (isset($table[0])){
        $row = $table[0];
        Product::delete( $row['id'] );
        if ($row['attr_name'] === "attr_dota2"){
            attr_dota2::delete($row['id']);
        }
        Alert::alerts("محصول مورد نظر با موفقیت حذف شد.",null,"success");
    }
    unset($db);
}
else{
    Alert::alerts("شناسه پیام نامعتبر!");
}
redirect(account("show-product-list.php"));