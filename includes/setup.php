<?php

$path = "../";
include 'settings.php';
include 'functions.php';

$db = new DB(false);

if (!$SoftSetup){
    $Query = "DROP DATABASE IF EXISTS {$dbName}";
    $result = $db->Execute($Query);
    if ($result){
        alerts('دیتابیس با موفقیت حذف شد','','success');
    }
}

$Query = "CREATE DATABASE IF NOT EXISTS {$dbName} CHARSET {$dbCharset} COLLATE {$dbCollate}";
$result = $db->Execute($Query);
if ($result){
    alerts('دیتابیس با موفقیت ایجاد شد','','success');
}

$db->SelectDB();

$Query = "CREATE TABLE IF NOT EXISTS contact (
    ID INT NOT NULL AUTO_INCREMENT,
    name VARCHAR(100),
    subject VARCHAR(100),
    email VARCHAR(100),
    message TEXT,
    PRIMARY KEY (ID)
    )ENGINE = INNODB";
$result = $db->Execute($Query);
if ($result){
    alerts('جدول تماس باما با موفقیت ایجاد شد','','success');
}

$Query = "CREATE TABLE IF NOT EXISTS product (
    ID INT NOT NULL AUTO_INCREMENT,
    name VARCHAR(100),
    game VARCHAR(100),
    type VARCHAR(100),
    quality VARCHAR(100),
    number INT,
    img VARCHAR(255),
    PRIMARY KEY (ID)
    )ENGINE = INNODB";
$result = $db->Execute($Query);
if ($result){
    alerts('جدول محصولات با موفقیت ایجاد شد','','success');
}

$Query = "CREATE TABLE IF NOT EXISTS users (
    ID INT NOT NULL AUTO_INCREMENT,
    type INT,
    name VARCHAR(100),
    email VARCHAR(255),
    username VARCHAR(150),
    password VARCHAR(255),
    img VARCHAR(255),
    PRIMARY KEY (ID)
    )ENGINE = INNODB";
$result = $db->Execute($Query);
if ($result){
    alerts('جدول کاربران با موفقیت ایجاد شد','','success');
}

$alerts = alerts();

$title = "پنل مدیریت | نصب و راه اندازی";
include $path . 'public/theme/PanelHeader.php';
?>
<section class="container fix-header">
    <?php if (isset($alerts)) echo $alerts; ?>
</section>
