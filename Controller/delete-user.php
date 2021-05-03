<?php

include "__php__.php";
include  $Model . "initializer.php";

if ( isset($_GET['id']) ){
    $db = new DB();
    User::delete( $_GET['id'] );
    redirect("../View/account/show-users.php");
    unset($db);
}
else{
    alerts("شناسه کاربری نامعتبر!","","danger");
}
$alerts = alerts();