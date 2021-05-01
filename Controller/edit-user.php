<?php

include "__php__.php";
include  $Model . "initializer.php";

if ( isset($_GET['id']) ){
    $db = new DB();

    if ( isset($_POST['submit']) ){
        $parameters = $_POST;
        $parameters['id'] = $_GET['id'];
        unset($parameters['submit']);
        Users::update( $parameters );
        redirect("../View/account/show-users.php");
    }

    $table = Users::find("ID = {$_GET['id']}");
    if (isset($table[0])){
        $row = $table[0];
    }
    else{
        alerts("شناسه کاربری وارد شده یافت نشد!","","danger");
    }

    unset($db);
}
else{
    alerts("شناسه کاربری نامعتبر!","","danger");
}
$alerts = alerts();