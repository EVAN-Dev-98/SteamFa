<?php

include "__php__.php";

$db = new DB(false);

if (!$SoftSetup){
    $Query = "DROP DATABASE IF EXISTS {$dbName}";
    $result = $db->Execute($Query);
    if ($result ==0){
        alerts('دیتابیس با موفقیت حذف شد','','success');
    }
}

$Query = "CREATE DATABASE {$dbName} CHARSET {$dbCharset} COLLATE {$dbCollate}";
$result = $db->Execute($Query);
if ($result == 0){
    alerts('دیتابیس با موفقیت ایجاد شد','','success');
}
elseif ($result == 1007){
    alerts("دیتابیس از قبل ساخته شده است","","info");
}

$db -> SelectDB();

$Query = "CREATE TABLE Messages (
    ID INT NOT NULL AUTO_INCREMENT,
    name VARCHAR(100),
    subject VARCHAR(100),
    email VARCHAR(100),
    message TEXT,
    status VARCHAR (20) DEFAULT 'normal',
    PRIMARY KEY (ID)
    )ENGINE = INNODB";
$result = $db->Execute($Query);
if ($result == 0){
    alerts('جدول تماس باما با موفقیت ایجاد شد','','success');
}
elseif ($result == 1050){
    alerts("جدول تماس باما در پایگاه داده وجود دارد","","info");
}

$Query = "CREATE TABLE Product (
    ID INT NOT NULL AUTO_INCREMENT,
    name VARCHAR(100),
    game VARCHAR(100),
    type VARCHAR(100),
    quality VARCHAR(100),
    number INT,
    img VARCHAR(255),
    status VARCHAR (20) DEFAULT 'normal',
    PRIMARY KEY (ID)
    )ENGINE = INNODB";
$result = $db->Execute($Query);
if ($result == 0){
    alerts('جدول محصولات با موفقیت ایجاد شد','','success');
}
elseif ($result == 1050){
    alerts("جدول محصولات در پایگاه داده وجود دارد","","info");
}

$Query = "CREATE TABLE User (
    ID INT NOT NULL AUTO_INCREMENT,
    role_id INT DEFAULT 2,
    fname VARCHAR(100),
    lname VARCHAR(255),
    email VARCHAR(255),
    password VARCHAR(255),
    gender VARCHAR (6),
    steam_url VARCHAR (255),
    img VARCHAR(255),
    status VARCHAR (20) DEFAULT 'normal',
    PRIMARY KEY (ID)
    )ENGINE = INNODB";
$result = $db->Execute($Query);
if ($result == 0){
    alerts('جدول کاربران با موفقیت ایجاد شد','','success');
}
elseif ($result == 1050){
    alerts("جدول کاربران در پایگاه داده وجود دارد","","info");
}

$Query = "CREATE TABLE Role (
    ID INT NOT NULL AUTO_INCREMENT,
    name VARCHAR (20),
    UserAdd BOOLEAN DEFAULT 0,
    UserEdit BOOLEAN DEFAULT 0,
    UserOtherEdit BOOLEAN DEFAULT 0,
    ProductAdd BOOLEAN DEFAULT 0,
    ProductEdit BOOLEAN DEFAULT 0,
    ProductOtherEdit BOOLEAN DEFAULT 0,
    status VARCHAR (20) DEFAULT 'normal',
    PRIMARY KEY (ID)
    )ENGINE = INNODB";
$result = $db->Execute($Query);
if ($result == 0){
    alerts('جدول نقش ها با موفقیت ایجاد شد','','success');
}
elseif ($result == 1050){
    alerts("جدول نقش ها در پایگاه داده وجود دارد","","info");
}

if (!$SoftSetup){

    global $db;
    $db = new DB();

    $AdminUser = array(
        "role_id" => 1,
        "fname" => "Admin",
        "email" => "Admin@{$SiteName}.ir",
        "password" => password_hash("1234", PASSWORD_DEFAULT),
        "img" => "/SteamFa/View/assets/images/icons/user-1.png",
    );

    $Administrator = array(
        "ID" => 1,
        "name" => "Administrator",
        "UserAdd" => 1,
        "UserEdit" => 1,
        "UserOtherEdit" => 1,
        "ProductAdd" => 1,
        "ProductEdit" => 1,
        "ProductOtherEdit" => 1,
    );

    $Normal = array(
        "ID" => 2,
        "name" => "Normal",
        "UserAdd" => 1,
        "UserEdit" => 1,
        "UserOtherEdit" => 0,
        "ProductAdd" => 0,
        "ProductEdit" => 0,
        "ProductOtherEdit" => 0,
    );

    User::add($AdminUser);
    Role::add($Administrator);
    Role::add($Normal);
}

$alerts = alerts();

$title = "پنل مدیریت | نصب و راه اندازی";

get_template("header","panel",$title);
?>
<section class="container fix-header">
    <?php if (isset($alerts)) echo $alerts; ?>
</section>
