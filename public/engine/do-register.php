<?php

$path = '../';
$title = "ثبت نام | استیم فارسی";
include $path . '../includes/settings.php';
include $path . '../includes/functions.php';


// get values from html
if (isset($_POST['submit'])){
    $_POST['type'] = 1;
    $password = $_POST['password'];
    $repassword = $_POST['repassword'];

    if ($password == $repassword){

        $_POST['password'] = md5($password);

        Users::add($_POST);

        $panel_location = $path . 'manager/';
        redirect($panel_location);
    }

    else{
        include $path . 'theme/header.php';

        $alert = alert("گذرواژه با تکرار آن برابر نیست !!!", "<a href='../manager/register.php'>بازگشت به صفحه ثبت نام</a>","danger");
    }

}
else{
    redirect($path);
}
?>
<section class="container fix-header">
    <?php if (isset($alert)) echo $alert; ?>
</section>
