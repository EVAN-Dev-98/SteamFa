<?php
/* Created By Evan ( Sajad Gholami ) */
include "__php__.php";

$row = array();
if ( Authentication::check() ){
    global $db;
    $db = new DB();
    $table = User::find("id = {$_SESSION['uid']}");
    $row = $table[0];
}
else{
    Alert::alerts("ابتدا وارد سیستم شوید!");
    $_SESSION['redirect'] = $_SERVER['REQUEST_URI'];
    redirect(account("sign-in.php"));
}