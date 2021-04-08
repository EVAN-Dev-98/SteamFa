<?php
if (isset($path)){
    $settings = $path.'../includes/settings.php';
}
else{
    $settings = '../includes/settings.php';
}
include $settings;
?>
<!DOCTYPE html>
<html lang="fa">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.rtl.min.css" integrity="sha384-4dNpRvNX0c/TdYEbYup8qbjvjaMrgUPh+g4I03CnNtANuv+VAvPL6LqdwzZKV38G" crossorigin="anonymous">
    <link rel="icon" href='<?php if (isset($path)) echo $path ?>assets/images/steam-icon.png' type="images/png" sizes="16*16">
    <link rel="stylesheet" href="<?php if (isset($path)) echo $path; ?>assets/css/styles-V3.9.css<?php /*echo $style;*/ ?>">
    <link rel="stylesheet" href="<?php if (isset($path)) echo $path; ?>assets/css/responsive-V3.9.css<?php /*echo $responsive;*/ ?>">
    <title><?php if (isset($title)) echo $title; else echo "استیم فارسی | عنوان ندارد"; ?></title>
</head>
<body>
<!-- Header -->
<header id="header">
    <section class="top-header">
        <nav class="right">
            <ul>
                <li><a href="">عنوان یک</a></li>
                <li><a href="">عنوان دو</a></li>
                <li><a href="">عنوان سه</a></li>
            </ul>
        </nav>
        <nav class="left">
            <ul>
                <li><a href="">نام شما</a></li>
                <li><a href="<?php if (isset($path)) echo $path; ?>index.php" target="_steamfa">مشاهده سایت</a></li>
            </ul>
        </nav>
    </section>
</header>
