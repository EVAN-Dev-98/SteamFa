<?php

include "__php__.php";

if ( isset($_GET['id']) ){
    $db = new DB();
    User::delete( $_GET['id'] );
    redirect(account("show-users.php"));
    unset($db);
}
else{
    Alert::alerts("شناسه کاربری نامعتبر!","","danger");
}
$alerts = Alert::alerts();