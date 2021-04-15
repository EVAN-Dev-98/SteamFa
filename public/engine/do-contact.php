<?php
/* Created By Evan ( Sajad Gholami ) */

include "__php__.php";

$title = "تماس با ما | استیم فارسی";
include $inc . "settings.php";
include $inc . "functions.php";
get_view("header","",$title);

// get values from html
if (isset($_POST['submit'])){

    Messages::add($_POST);

    $alert = alert("درخواست شما با موفقیت ثبت شد!!!", "<a href='../'>باگشت به صفحه اصلی</a>","success");
}
else{
    redirect("../");
}

get_view("showcase");

if (isset($alert)) echo $alert;

get_view("footer");