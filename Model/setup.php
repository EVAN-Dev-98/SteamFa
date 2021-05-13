<?php

include "__php__.php";
include "settings.php";
include "functions.php";

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
    id INT NOT NULL AUTO_INCREMENT,
    name VARCHAR(100),
    subject VARCHAR(100),
    email VARCHAR(100),
    message TEXT,
    status VARCHAR (20) DEFAULT 'normal',
    PRIMARY KEY (id)
    )ENGINE = INNODB";
$result = $db->Execute($Query);
if ($result == 0){
    alerts('جدول تماس باما با موفقیت ایجاد شد','','success');
}
elseif ($result == 1050){
    alerts("جدول تماس باما در پایگاه داده وجود دارد","","info");
}

$Query = "CREATE TABLE Product (
    id INT NOT NULL AUTO_INCREMENT,
    name VARCHAR(100),
    attr_name VARCHAR(100),
    number INT,
    img VARCHAR(255),
    status VARCHAR (20) DEFAULT 'normal',
    PRIMARY KEY (id)
    )ENGINE = INNODB";
$result = $db->Execute($Query);
if ($result == 0){
    alerts('جدول محصولات با موفقیت ایجاد شد','','success');
}
elseif ($result == 1050){
    alerts("جدول محصولات در پایگاه داده وجود دارد","","info");
}

$Query = "CREATE TABLE attr_csgo (
    product_id INT NOT NULL,
    type VARCHAR(100),
    weapon VARCHAR(100),
    quality VARCHAR(100),
    category VARCHAR(100),
    status VARCHAR (20) DEFAULT 'normal',
    PRIMARY KEY (product_id)
    )ENGINE = INNODB";
$result = $db->Execute($Query);
if ($result == 0){
    alerts('جدول ویژگی های آیتم های کانتر با موفقیت ایجاد شد','','success');
}
elseif ($result == 1050){
    alerts("جدول ویژگی های آیتم های کانتر در پایگاه داده وجود دارد","","info");
}

$Query = "CREATE TABLE attr_dota2 (
    product_id INT NOT NULL,
    hero_id INT,
    type VARCHAR(100),
    quality VARCHAR(100),
    status VARCHAR (20) DEFAULT 'normal',
    PRIMARY KEY (product_id)
    )ENGINE = INNODB";
$result = $db->Execute($Query);
if ($result == 0){
    alerts('جدول ویژگی های آیتم های دوتا 2 با موفقیت ایجاد شد','','success');
}
elseif ($result == 1050){
    alerts("جدول ویژگی های آیتم های دوتا 2 در پایگاه داده وجود دارد","","info");
}

$Query = "CREATE TABLE Hero (
    id INT NOT NULL AUTO_INCREMENT,
    name VARCHAR(100),
    category VARCHAR(100),
    img VARCHAR(255),
    status VARCHAR (20) DEFAULT 'normal',
    PRIMARY KEY (id)
    )ENGINE = INNODB";
$result = $db->Execute($Query);
if ($result == 0){
    alerts('جدول هیرو های دوتا 2 با موفقیت ایجاد شد','','success');
}
elseif ($result == 1050){
    alerts("جدول هیرو های دوتا 2 در پایگاه داده وجود دارد","","info");
}

$Query = "CREATE TABLE User (
    id INT NOT NULL AUTO_INCREMENT,
    role_id INT DEFAULT 2,
    fname VARCHAR(100),
    lname VARCHAR(255),
    email VARCHAR(255),
    password VARCHAR(255),
    gender VARCHAR (6),
    steam_url VARCHAR (255),
    img VARCHAR(255),
    status VARCHAR (20) DEFAULT 'normal',
    PRIMARY KEY (id)
    )ENGINE = INNODB";
$result = $db->Execute($Query);
if ($result == 0){
    alerts('جدول کاربران با موفقیت ایجاد شد','','success');
}
elseif ($result == 1050){
    alerts("جدول کاربران در پایگاه داده وجود دارد","","info");
}

$Query = "CREATE TABLE Role (
    id INT NOT NULL AUTO_INCREMENT,
    name VARCHAR (20),
    UserAdd BOOLEAN DEFAULT 0,
    UserEdit BOOLEAN DEFAULT 0,
    UserOtherEdit BOOLEAN DEFAULT 0,
    ProductAdd BOOLEAN DEFAULT 0,
    ProductEdit BOOLEAN DEFAULT 0,
    ProductOtherEdit BOOLEAN DEFAULT 0,
    status VARCHAR (20) DEFAULT 'normal',
    PRIMARY KEY (id)
    )ENGINE = INNODB";
$result = $db->Execute($Query);
if ($result == 0){
    alerts('جدول نقش های کاربران با موفقیت ایجاد شد','','success');
}
elseif ($result == 1050){
    alerts("جدول نقش های کاربران در پایگاه داده وجود دارد","","info");
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
        "id" => 1,
        "name" => "Administrator",
        "UserAdd" => 1,
        "UserEdit" => 1,
        "UserOtherEdit" => 1,
        "ProductAdd" => 1,
        "ProductEdit" => 1,
        "ProductOtherEdit" => 1,
    );

    $Normal = array(
        "id" => 2,
        "name" => "Normal",
        "UserAdd" => 1,
        "UserEdit" => 1,
        "UserOtherEdit" => 0,
        "ProductAdd" => 0,
        "ProductEdit" => 0,
        "ProductOtherEdit" => 0,
    );

    include "DB/Hero-List.php";

    User::add($AdminUser);
    Role::add($Administrator);
    Role::add($Normal);

    $product_awp_assimow = array(
        "id" => 1,
        "name" => "awp | asiimov",
        "attr_name" => "csgo",
        "number" => "1",
        "img" => assets("images/awp-asiimov.jpg"),
    );
    $attr_item_1 = array(
        "product_id" => 1,
        "type" => "Sniper Rifle",
        "weapon" => "awp",
        "quality" => "Field Tested",
        "category" => "Normal"
    );
    Product::add($product_awp_assimow);
    attr_csgo::add($attr_item_1);

    foreach ($hero as $params){
        $result = Hero::add($params);
    }

    if ($result == count($hero)){
        alerts("تعداد " . $result . " هیرو ، در جدول هیرو های دوتا 2 درج شد.",null,"success");
    }
}
$alerts = alerts();

$title = "پنل مدیریت | نصب و راه اندازی";

get_template("header","panel",$title);
?>
<section class="container fix-header">
    <?php if (isset($alerts)) echo $alerts; ?>
</section>
