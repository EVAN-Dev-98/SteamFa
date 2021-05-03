<?php

include "__php__.php";
include  $Model . "initializer.php";

if ( isset($_GET['id']) ){
    $db = new DB();
    Messages::delete( $_GET['id'] );
    redirect("../View/account/show-messages.php");
    unset($db);
}
else{
    alerts("شناسه کاربری نامعتبر!","","danger");
}
$alerts = alerts();