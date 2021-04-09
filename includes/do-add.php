<?php

$path = "../";
$title = "پنل مدیریت | افزودن محصول";
include 'settings.php';
include 'functions.php';
include $path . 'public/theme/PanelHeader.php';
include $path . 'public/theme/PanelSidebar.php';

// get values from html
if (isset($_POST['submit'])){
    $name = $_POST['name'];
    $game = $_POST['game'];
    $type = $_POST['type'];
    $quality = $_POST['quality'];
    $number = $_POST['number'];
    $img = /* $_POST['img']; */ 'images/ak-47-bloodsport.png';

    $query = "INSERT INTO products (name , game , type , quality , number , img) VALUES ('{$name}' ,'{$game}' , '{$type}' , '{$quality}' , '{$number}', '{$img}')";

    $db = new DB();
    $db->Execute($query);

    $panel_location = $path . 'public/manager/';
    $alert = alert("محصول مورد نظر با موفقیت افزوده شد!!!","<a href='$panel_location'>باگشت به صفحه اصلی پنل مدیریت</a>","success");
}
else{
    redirect($path);
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
