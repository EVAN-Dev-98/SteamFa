<?php

$path = '../';
$title = "ثبت نام | استیم فارسی";
include '../information/settings.php';
include '../information/functions.php';


// get values from html
if (isset($_POST['submit'])){
    $type = 1;
    $name = $_POST['name'];
    $email = $_POST['email'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $repassword = $_POST['repassword'];

    if ($password == $repassword){

        $password = md5($password);

        $query = "INSERT INTO users (type , name , email , username , password) VALUES ('{$type}' ,'{$name}' , '{$email}' , '{$username}' , '{$password}')";

        $db = new DB();
        $db->Execute($query);

        $panel_location = $path . 'manager/';
        redirect($panel_location);
    }

    else{
        include $path . 'theme/header.php';

        $alert = alert("گذرواژه با تکرار آن برابر نیست !!!","<a href='../manager/register.php'>بازگشت به صفحه ثبت نام</a>","danger");
    }

}
else{
    redirect($path);
}
?>
<section class="container fix-header">
    <?php if (isset($alert)) echo $alert; ?>
</section>
