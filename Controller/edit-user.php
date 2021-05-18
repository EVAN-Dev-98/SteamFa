<?php

include "__php__.php";

if ( isset($_GET['id']) ){
    $db = new DB();

    if ( isset($_POST['submit']) ){
        $parameters = $_POST;
        $parameters['id'] = $_GET['id'];
        unset($parameters['submit']);
        User::update( $parameters );
        redirect(account("show-users.php"));
    }

    $table = User::find("ID = {$_GET['id']}");
    if (isset($table[0])){
        $row = $table[0];
    }
    else{
        Alert::alerts("شناسه کاربری وارد شده یافت نشد!","","danger");
    }

    unset($db);
}
else{
    Alert::alerts("شناسه کاربری نامعتبر!","","danger");
}
$alerts = Alert::alerts();