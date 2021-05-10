<?php
/* Created By Evan ( Sajad Gholami ) */

include "__php__.php";

$title = "پنل مدیریت | افزودن محصول";
get_template("header","panel",$title);
get_template("sidebar","panel");


// get values from html
if (isset($_POST['submit'])){
    $_POST['img'] = assets("images/ak-47-bloodsport.png");
    $db = new DB();
    $params = $_POST;
    unset($params['submit']);/*
    Product::add($params);*/
    redirect(account("show-product-list.php"));
}
else{
    redirect(view("home.php"));
}
