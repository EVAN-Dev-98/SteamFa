<?php
/* Created By Evan ( Sajad Gholami ) */

include "__php__.php";
include  $Model . "initializer.php";

$title = "پنل مدیریت | افزودن محصول";
get_template("header","account",$title);
get_template("sidebar","account");


// get values from html
if (isset($_POST['submit'])){
    $_POST['img'] = "/SteamFa/View/assets/images/ak-47-bloodsport.png";
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
