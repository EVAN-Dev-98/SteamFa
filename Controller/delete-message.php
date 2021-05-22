<?php

include "__php__.php";

if (isset($_GET['id'])){
    $db = new DB();
    Messages::delete( $_GET['id'] );
    Alert::alerts("پیام مورد نظر با موفقیت حذف شد.",null,"success");
    redirect(account("show-messages.php"));
    unset($db);
}