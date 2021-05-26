<?php

include "__php__.php";

if ( isset($_GET['id']) ){
    $db = new DB();
    User::delete( $_GET['id'] );
    Alert::alerts("کاربر مورد نظر با موفقیت حذف شد.",null,"success");
    unset($db);
}
else{
    Alert::alerts("شناسه کاربری نامعتبر!");
}
redirect(account("show-users.php"));