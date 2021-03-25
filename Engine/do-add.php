<?php

$path = "../";
$title = "پنل مدیریت | افزودن محصول";
include '../information/settings.php';
include '../information/functions.php';
include $path . 'theme/PanelHeader.php';
include $path . 'theme/PanelSidebar.php';

// get values from html
if (isset($_POST['submit'])){
    $name = $_POST['name'];
    $game = $_POST['game'];
    $type = $_POST['type'];
    $quality = $_POST['quality'];
    $number = $_POST['number'];
    $img = /* $_POST['img']; */ $path . 'images/ak-47-bloodsport.png';

    $query = "INSERT INTO product (name , game , type , quality , number , img) VALUES ('{$name}' ,'{$game}' , '{$type}' , '{$quality}' , '{$number}', '{$img}')";

    $db = new DB();
    $db->Execute($query);


    $alert = alert("محصول مورد نظر با موفقیت افزوده شد!!!","<a href='../'>باگشت به صفحه اصلی</a>","success");
}
else{
    redirect($path);
}

?>
    <html lang="fa">
    <body>
    <?php if (isset($alert)) echo $alert; ?>
    </body>
    </html>