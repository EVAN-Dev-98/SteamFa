<?php

include "__php__.php";
include  $Model . "initializer.php";

if ( isset($_GET['id']) ){
    $db = new DB();
    Product::delete( $_GET['id'] );
    redirect("../View/account/show-product-list.php");
    unset($db);
}
else{
    alerts("شناسه کاربری نامعتبر!","","danger");
}
$alerts = alerts();