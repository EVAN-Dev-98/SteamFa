<?php
/* Created By Evan ( Sajad Gholami ) */

include "__php__.php";

/*
$title = "پنل مدیریت | افزودن محصول";
get_template("header","panel",$title);
get_template("sidebar","panel");
*/

// get values from html
if (isset($_POST['submit'])){
    $db = new DB();

    if ($_POST['p_type'] == "csgo_item"){
        $_POST['img'] = assets("images/ak-47-bloodsport.png");
        $params = $_POST;
        unset($params['submit']);
        unset($params['p_type']);
        CSGO::add($params);
        alerts("ایتم کانتر " . $params['name'] . " با موفقیت درج شد.","","info");
        $alerts = alerts();
        redirect(account("show-product-list.php"));
    }
    if ($_POST['p_type'] == "dota2_item"){
        $_POST['img'] = assets("images/arcana-juggernaut.jpg");
        $params = $_POST;
        unset($params['submit']);
        unset($params['p_type']);
        DOTA2::add($params);
        alerts("ایتم دوتا 2 " . $params['name'] . " با موفقیت درج شد.","","info");
        $alerts = alerts();
        redirect(account("show-product-list.php"));
    }
    if ($_POST['p_type'] == "game"){
        alerts("بزودی افزوده میشود","","info");
        $alerts = alerts();
        redirect(account("show-product-list.php"));
    }
    if ($_POST['p_type'] == "giftcard"){
        alerts("بزودی افزوده میشود","","info");
        $alerts = alerts();
        redirect(account("show-product-list.php"));
    }
}
else{
    redirect(view("home.php"));
}
