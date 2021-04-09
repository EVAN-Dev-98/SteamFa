<?php

$path = "../";
$title = "تماس با ما | استیم فارسی";
include $path . '../includes/settings.php';
include $path . '../includes/functions.php';
include $path . 'theme/header.php';

// get values from html
if (isset($_POST['submit'])){
    $name = $_POST['name'];
    $subject = $_POST['subject'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    $query = "INSERT INTO contact (name , subject , email , message) VALUES ('{$name}' ,'{$subject}' , '{$email}' , '{$message}')";

    $db = new DB();
    $db->Execute($query);


    $alert = alert("درخواست شما با موفقیت ثبت شد!!!", "<a href='..'>باگشت به صفحه اصلی</a>","success");
}
else{
    redirect($path . 'public');
}

include $path . 'theme/showcase.php';

if (isset($alert)) echo $alert;

include $path . 'theme/footer.php';