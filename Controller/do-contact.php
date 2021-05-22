<?php
/* Created By Evan ( Sajad Gholami ) */
include "__php__.php";
require "Authentication-Check.php";

$title = "تماس با ما | استیم فارسی";

$db = new DB();
$params = $_POST;
unset($params['submit']);
Messages::add( $params );
redirect(view("home.php"));