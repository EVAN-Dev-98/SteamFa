<?php
/* Created By Evan ( Sajad Gholami ) */
include "__php__.php";

$title = "تماس با ما | استیم فارسی";
if (isset($_POST['submit'])) {
    if ( Validation::Token_Check( $_POST['csrf_token'] )){
        unset($_POST['csrf_token']);
        unset($_SESSION['CSRF_Token']);
        $params = SafeScript($_POST);
        unset($params['submit']);

        $form = new Contact(controller("do-contact.php"),"ارسال",$params);
        if ( $form -> valid ){
            $db = new DB();
            Messages::add($params);
        }
        else{
            $_SESSION['params'] = $params;
            redirect(view("contact.php"));
        }
    }
    else
        Alert::alerts("توکن CSRF نامعتبر!");
}
else
    Alert::alerts("دسترسی غیرمجاز!");
redirect(view("home.php"));