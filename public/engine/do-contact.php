<?php

$path = "../";
$title = "تماس با ما | استیم فارسی";
include $path . '../includes/settings.php';
include $path . '../includes/functions.php';
include $path . 'theme/header.php';

// get values from html
if (isset($_POST['submit'])){

    Messages::add($_POST);

    $alert = alert("درخواست شما با موفقیت ثبت شد!!!", "<a href='..'>باگشت به صفحه اصلی</a>","success");
}
else{
    redirect($path . 'public');
}

include $path . 'theme/showcase.php';

if (isset($alert)) echo $alert;

include $path . 'theme/footer.php';