<?php
/* Created By Evan ( Sajad Gholami ) */

include "__php__.php";

$title = "تماس با ما | استیم فارسی";


// get values from html
if (isset($_POST['submit'])){
    get_template("header","",$title);
    $db = new DB();
    $params = $_POST;
    unset($params['submit']);
    Messages::add($params);
    $alerts = Alert::alerts();
    get_template("showcase");
    if (isset($alerts)) echo $alerts;
    get_template("footer");
}
else{
    redirect(view("home.php"));
}