<?php
/* Created By Evan ( Sajad Gholami ) */

include "__php__.php";
include  $Model . "initializer.php";

$title = "تماس با ما | استیم فارسی";

get_template("header","",$title);

// get values from html
if (isset($_POST['submit'])){
    $db = new DB();
    $params = $_POST;
    unset($params['submit']);
    Messages::add($params);
    $alert = alertS();
}
else{
    redirect("../");
}

get_template("showcase");

if (isset($alert)) echo $alert;

get_template("footer");