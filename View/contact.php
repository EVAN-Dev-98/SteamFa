<?php
/* Created By Evan ( Sajad Gholami ) */
include "__php__.php";
$title = "تماس با ما | استیم فارسی";
get_template("master", null, $title);
function main(){
    $form = new Contact(controller("do-contact.php"),"ارسال");
    echo $form;
}