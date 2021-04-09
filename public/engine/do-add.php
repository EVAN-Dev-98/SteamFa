<?php

$path = "../";
$title = "پنل مدیریت | افزودن محصول";
include $path . '../includes/settings.php';
include $path . '../includes/functions.php';
include $path . 'theme/PanelHeader.php';
include $path . 'theme/PanelSidebar.php';

// get values from html
if (isset($_POST['submit'])){

    $_POST['img'] = 'images/ak-47-bloodsport.png';

    Product::add($_POST);

    $panel_location = $path . 'manager/';
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
