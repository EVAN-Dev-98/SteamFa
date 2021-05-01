<?php

include "__php__.php";
include  $Model . "initializer.php";

if ( isset($_GET['id']) ){
    $db = new DB();

    if ( isset($_POST['submit']) ){
        $parameters = $_POST;
        $parameters['id'] = $_GET['id'];
        unset($parameters['submit']);
        $parameters['img'] = "/SteamFa/View/assets/images/ak-47-bloodsport.png";
        Product::update( $parameters );
        redirect("../View/account/show-product-list.php");
    }

    $table = Product::find("ID = {$_GET['id']}");
    if (isset($table[0])){
        $row = $table[0];
    }
    else{
        alerts("شناسه آیتم وارد شده یافت نشد!","","danger");
    }

    unset($db);
}
else{
    alerts("شناسه آیتم نامعتبر!","","danger");
}
$alerts = alerts();