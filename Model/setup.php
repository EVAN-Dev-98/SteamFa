<?php

include "__php__.php";
include  $Model . "initializer.php";

$db = new DB(false);

if (!$SoftSetup){
    $Query = "DROP DATABASE IF EXISTS {$dbName}";
    $result = $db->Execute($Query);
    if ($result ==0){
        alerts('دیتابیس با موفقیت حذف شد','','success');
    }
}

$Query = "CREATE DATABASE IF NOT EXISTS {$dbName} CHARSET {$dbCharset} COLLATE {$dbCollate}";
$result = $db->Execute($Query);
if ($result == 0){
    alerts('دیتابیس با موفقیت ایجاد شد','','success');
}

$db->SelectDB();

$Query = "CREATE TABLE IF NOT EXISTS Messages (
    ID INT NOT NULL AUTO_INCREMENT,
    name VARCHAR(100),
    subject VARCHAR(100),
    email VARCHAR(100),
    message TEXT,
    PRIMARY KEY (ID)
    )ENGINE = INNODB";
$result = $db->Execute($Query);
if ($result == 0){
    alerts('جدول تماس باما با موفقیت ایجاد شد','','success');
}

$Query = "CREATE TABLE IF NOT EXISTS Product (
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
if ($result == 0){
    alerts('جدول محصولات با موفقیت ایجاد شد','','success');
}

$Query = "CREATE TABLE IF NOT EXISTS Users (
    ID INT NOT NULL AUTO_INCREMENT,
    type INT,
    name VARCHAR(100),
    family VARCHAR(255),
    email VARCHAR(255),
    password VARCHAR(255),
    gender VARCHAR (6),
    steam_url VARCHAR (255),
    img VARCHAR(255),
    PRIMARY KEY (ID)
    )ENGINE = INNODB";
$result = $db->Execute($Query);
if ($result == 0){
    alerts('جدول کاربران با موفقیت ایجاد شد','','success');
}

$alerts = alerts();

$title = "پنل مدیریت | نصب و راه اندازی";

get_template("header","panel",$title);
?>
<section class="container fix-header">
    <?php if (isset($alerts)) echo $alerts; ?>
</section>
