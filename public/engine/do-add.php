<?php
/* Created By Evan ( Sajad Gholami ) */

include "__php__.php";

$title = "پنل مدیریت | افزودن محصول";
include $inc . "settings.php";
include $inc . "functions.php";
get_view("header","panel",$title);
get_view("sidebar","panel");


// get values from html
if (isset($_POST['submit'])){
    $_POST['img'] = "/SteamFa/public/assets/images/ak-47-bloodsport.png";
    $db = new DB();
    $params = $_POST;
    unset($params['submit']);
    Product::add($params);
    $alert = alerts();
}
else{
    redirect("../");
}
?>
<section class="panel">
    <header>
        <h2>افزودن محصول</h2>
    </header>
    <main>
        <?php if (isset($alert)) echo $alert; ?>
    </main>
</section>
