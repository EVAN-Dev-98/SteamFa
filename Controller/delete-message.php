<?php

include "__php__.php";

if (isset($_GET['id'])){
    $db = new DB();
    Messages::delete( $_GET['id'] );
    Alert::alerts("پیام مورد نظر با موفقیت حذف شد.",null,"success");
    unset($db);
}
else{
    Alert::alerts("شناسه پیام نامعتبر!");
}
redirect(account("show-messages.php"));