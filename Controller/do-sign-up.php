<?php
/* Created By Evan ( Sajad Gholami ) */

include "__php__.php";

$title = "ثبت نام | استیم فارسی";

// get values from html
if (isset($_POST['submit'])){
    $password = $_POST['password'];
    $repassword = $_POST['repassword'];

    if ($password == $repassword){

        $_POST['password'] = md5($password);
        $db = new DB();
        $params = $_POST;
        unset($params['submit']);
        unset($params['repassword']);
        User::add($params);
        redirect(account("dashboard.php"));
    }

    else{
        get_template("header","",$title);

        $alert = alert("گذرواژه با تکرار آن برابر نیست !!!", "<a href='../View/account/sign-up.php'>بازگشت به صفحه ثبت نام</a>","danger");
    }

}
else{
    redirect(view("home.php"));
}
?>
<section class="container fix-header">
    <?php if (isset($alert)) echo $alert; ?>
</section>
