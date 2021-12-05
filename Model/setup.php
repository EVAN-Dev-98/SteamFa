<?php
/* Created By Evan ( Sajad Gholami ) */
include "__php__.php";
include "settings.php";
include_once "functions.php";

$db = new DB(false);

Authentication::logout();

if (!$SoftSetup){
    $Query = "DROP DATABASE IF EXISTS {$dbName}";
    $result = $db->Execute($Query);
    if ($result ==0){
        Alert::alerts('دیتابیس با موفقیت حذف شد','','success');
    }
}

$Query = "CREATE DATABASE {$dbName} CHARSET {$dbCharset} COLLATE {$dbCollate}";
$result = $db->Execute($Query);
if ($result == 0){
    Alert::alerts('دیتابیس با موفقیت ایجاد شد','','success');
}
elseif ($result == 1007){
    Alert::alerts("دیتابیس از قبل ساخته شده است","","info");
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
    Alert::alerts('جدول تماس باما با موفقیت ایجاد شد','','success');
}
elseif ($result == 1050){
    Alert::alerts("جدول تماس باما در پایگاه داده وجود دارد","","info");
}

$Query = "CREATE TABLE Product (
    id INT NOT NULL AUTO_INCREMENT,
    name VARCHAR(100),
    attr_name VARCHAR(100),
    number INT,
    img VARCHAR(255),
    owner_id INT,
    status VARCHAR (20) DEFAULT 'normal',
    PRIMARY KEY (id)
    )ENGINE = INNODB";
$result = $db->Execute($Query);
if ($result == 0){
    Alert::alerts('جدول محصولات با موفقیت ایجاد شد','','success');
}
elseif ($result == 1050){
    Alert::alerts("جدول محصولات در پایگاه داده وجود دارد","","info");
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
    Alert::alerts('جدول ویژگی های آیتم های کانتر با موفقیت ایجاد شد','','success');
}
elseif ($result == 1050){
    Alert::alerts("جدول ویژگی های آیتم های کانتر در پایگاه داده وجود دارد","","info");
}

$Query = "CREATE TABLE attr_dota2 (
    product_id INT NOT NULL,
    hero_id INT,
    rarity VARCHAR(100),
    quality VARCHAR(100),
    status VARCHAR (20) DEFAULT 'normal',
    PRIMARY KEY (product_id)
    )ENGINE = INNODB";
$result = $db->Execute($Query);
if ($result == 0){
    Alert::alerts('جدول ویژگی های آیتم های دوتا 2 با موفقیت ایجاد شد','','success');
}
elseif ($result == 1050){
    Alert::alerts("جدول ویژگی های آیتم های دوتا 2 در پایگاه داده وجود دارد","","info");
}

$Query = "CREATE TABLE Hero (
    id INT NOT NULL AUTO_INCREMENT,
    name VARCHAR(100),
    category VARCHAR(100),
    complexity INT,
    img VARCHAR(255),
    status VARCHAR (20) DEFAULT 'normal',
    PRIMARY KEY (id)
    )ENGINE = INNODB";
$result = $db->Execute($Query);
if ($result == 0){
    Alert::alerts('جدول هیرو های دوتا 2 با موفقیت ایجاد شد','','success');
}
elseif ($result == 1050){
    Alert::alerts("جدول هیرو های دوتا 2 در پایگاه داده وجود دارد","","info");
}

$Query = "CREATE TABLE User (
    id INT NOT NULL AUTO_INCREMENT,
    role_id INT DEFAULT 4,
    fname VARCHAR(100),
    lname VARCHAR(255),
    email VARCHAR(255),
    password VARCHAR(255),
    gender VARCHAR (6),
    steamid VARCHAR (255),
    img VARCHAR(255),
    status VARCHAR (20) DEFAULT 'normal',
    PRIMARY KEY (id)
    )ENGINE = INNODB";
$result = $db->Execute($Query);
if ($result == 0){
    Alert::alerts('جدول کاربران با موفقیت ایجاد شد','','success');
}
elseif ($result == 1050){
    Alert::alerts("جدول کاربران در پایگاه داده وجود دارد","","info");
}

$Query = "CREATE TABLE Product_Like (
    id INT NOT NULL AUTO_INCREMENT,
    user_id INT,
    product_id INT,
    status VARCHAR (20) DEFAULT 'normal',
    PRIMARY KEY (id)
    )ENGINE = INNODB";
$result = $db->Execute($Query);
if ($result == 0){
    Alert::alerts('جدول لایک محصولات با موفقیت ایجاد شد','','success');
}
elseif ($result == 1050){
    Alert::alerts("جدول لایک محصولات در پایگاه داده وجود دارد","","info");
}

$Query = "CREATE TABLE Product_Bookmark (
    id INT NOT NULL AUTO_INCREMENT,
    user_id INT,
    product_id INT,
    status VARCHAR (20) DEFAULT 'normal',
    PRIMARY KEY (id)
    )ENGINE = INNODB";
$result = $db->Execute($Query);
if ($result == 0){
    Alert::alerts('جدول ذخیره محصولات با موفقیت ایجاد شد','','success');
}
elseif ($result == 1050){
    Alert::alerts("جدول ذخیره محصولات در پایگاه داده وجود دارد","","info");
}

$Query = "CREATE TABLE Role (
    id INT NOT NULL AUTO_INCREMENT,
    name VARCHAR (20),
    RoleMaster BOOLEAN DEFAULT 0,
    ItemAdd BOOLEAN DEFAULT 0,
    ItemEdit BOOLEAN DEFAULT 0,
    ItemDelete BOOLEAN DEFAULT 0,
    ItemViewOther BOOLEAN DEFAULT 0,
    ItemEditOther BOOLEAN DEFAULT 0,
    ItemDeleteOther BOOLEAN DEFAULT 0,
    ProductAdd BOOLEAN DEFAULT 0,
    ProductEdit BOOLEAN DEFAULT 0,
    ProductDelete BOOLEAN DEFAULT 0,
    ProductViewOther BOOLEAN DEFAULT 0,
    ProductEditOther BOOLEAN DEFAULT 0,
    ProductDeleteOther BOOLEAN DEFAULT 0,
    UserAdd BOOLEAN DEFAULT 0,
    UserEdit BOOLEAN DEFAULT 0,
    UserDelete BOOLEAN DEFAULT 0,
    UserViewOther BOOLEAN DEFAULT 0,
    UserEditOther BOOLEAN DEFAULT 0,
    UserDeleteOther BOOLEAN DEFAULT 0,
    MessageAdd BOOLEAN DEFAULT 0,
    MessageEdit BOOLEAN DEFAULT 0,
    MessageDelete BOOLEAN DEFAULT 0,
    MessageViewOther BOOLEAN DEFAULT 0,
    MessageEditOther BOOLEAN DEFAULT 0,
    MessageDeleteOther BOOLEAN DEFAULT 0,
    status VARCHAR (20) DEFAULT 'normal',
    PRIMARY KEY (id)
    )ENGINE = INNODB";
$result = $db->Execute($Query);
if ($result == 0){
    Alert::alerts('جدول نقش های کاربران با موفقیت ایجاد شد','','success');
}
elseif ($result == 1050){
    Alert::alerts("جدول نقش های کاربران در پایگاه داده وجود دارد","","info");
}

if (!$SoftSetup){

    global $db;
    $db = new DB();

    $AdminUser = array(
        "role_id" => 1,
        "fname" => "Admin",
        "email" => "Admin@{$SiteName}.ir",
        "password" => password_hash("Ev1273321103aN", PASSWORD_DEFAULT),
        "img" => "/SteamFa/View/assets/images/icons/user-1.png",
    );

    $Administrator = array(
        "id" => 1,
        "name" => "Administrator",
        "RoleMaster" => 1,
        "ItemAdd" => 1,
        "ItemEdit" => 1,
        "ItemDelete" => 1,
        "ItemViewOther" => 1,
        "ItemEditOther" => 1,
        "ItemDeleteOther" => 1,
        "ProductAdd" => 1,
        "ProductEdit" => 1,
        "ProductDelete" => 1,
        "ProductViewOther" => 1,
        "ProductEditOther" => 1,
        "ProductDeleteOther" => 1,
        "UserAdd" => 1,
        "UserEdit" => 1,
        "UserDelete" => 1,
        "UserViewOther" => 1,
        "UserEditOther" => 1,
        "UserDeleteOther" => 1,
        "MessageAdd" => 1,
        "MessageEdit" => 1,
        "MessageDelete" => 1,
        "MessageViewOther" => 1,
        "MessageEditOther" => 1,
        "MessageDeleteOther" => 1
    );

    $AdminHelper = array(
        "id" => 2,
        "name" => "AdminHelper",
        "RoleMaster" => 0,
        "ItemAdd" => 1,
        "ItemEdit" => 1,
        "ItemDelete" => 1,
        "ItemViewOther" => 1,
        "ItemEditOther" => 1,
        "ItemDeleteOther" => 1,
        "ProductAdd" => 1,
        "ProductEdit" => 1,
        "ProductDelete" => 1,
        "ProductViewOther" => 1,
        "ProductEditOther" => 1,
        "ProductDeleteOther" => 1,
        "UserAdd" => 1,
        "UserEdit" => 1,
        "UserDelete" => 1,
        "UserViewOther" => 1,
        "UserEditOther" => 0,
        "UserDeleteOther" => 1,
        "MessageAdd" => 1,
        "MessageEdit" => 1,
        "MessageDelete" => 1,
        "MessageViewOther" => 1,
        "MessageEditOther" => 0,
        "MessageDeleteOther" => 1
    );

    $Member = array(
        "id" => 3,
        "name" => "Member",
        "RoleMaster" => 0,
        "ItemAdd" => 1,
        "ItemEdit" => 1,
        "ItemDelete" => 1,
        "ItemViewOther" => 0,
        "ItemEditOther" => 0,
        "ItemDeleteOther" => 0,
        "ProductAdd" => 0,
        "ProductEdit" => 0,
        "ProductDelete" => 0,
        "ProductViewOther" => 0,
        "ProductEditOther" => 0,
        "ProductDeleteOther" => 0,
        "UserAdd" => 0,
        "UserEdit" => 1,
        "UserDelete" => 1,
        "UserViewOther" => 0,
        "UserEditOther" => 0,
        "UserDeleteOther" => 0,
        "MessageAdd" => 1,
        "MessageEdit" => 1,
        "MessageDelete" => 1,
        "MessageViewOther" => 0,
        "MessageEditOther" => 0,
        "MessageDeleteOther" => 0
    );

    $Normal = array(
        "id" => 4,
        "name" => "Normal",
        "RoleMaster" => 0,
        "ItemAdd" => 0,
        "ItemEdit" => 0,
        "ItemDelete" => 0,
        "ItemViewOther" => 0,
        "ItemEditOther" => 0,
        "ItemDeleteOther" => 0,
        "ProductAdd" => 0,
        "ProductEdit" => 0,
        "ProductDelete" => 0,
        "ProductViewOther" => 0,
        "ProductEditOther" => 0,
        "ProductDeleteOther" => 0,
        "UserAdd" => 0,
        "UserEdit" => 1,
        "UserDelete" => 1,
        "UserViewOther" => 0,
        "UserEditOther" => 0,
        "UserDeleteOther" => 0,
        "MessageAdd" => 1,
        "MessageEdit" => 1,
        "MessageDelete" => 1,
        "MessageViewOther" => 0,
        "MessageEditOther" => 0,
        "MessageDeleteOther" => 0
    );

    include "DB/Hero-List.php";

    $product_awp_assimow = array(
        "id" => 1,
        "name" => "AWP | Asiimov",
        "attr_name" => "attr_csgo",
        "number" => "1",
        "img" => assets("images/awp-asiimov.jpg"),
        "owner_id" => 1
    );
    $attr_item_1 = array(
        "product_id" => 1,
        "type" => "Sniper Rifle",
        "weapon" => "AWP",
        "quality" => "Field Tested",
        "category" => "Normal"
    );
    $product_arcana_juggernaut = array(
        "id" => "2",
        "name" => "Bladeform Legacy",
        "attr_name" => "attr_dota2",
        "number" => "1",
        "img" => assets("images/arcana-juggernaut.jpg"),
        "owner_id" => 1
    );
    $attr_item_2 = array(
        "product_id" => 2,
        "hero_id" => 44,
        "rarity" => "Arcana",
        "quality" => "Standard"
    );

    User::add($AdminUser);
    Role::add($Administrator);
    Role::add($AdminHelper);
    Role::add($Member);
    Role::add($Normal);
    Product::add($product_awp_assimow);
    attr_csgo::add($attr_item_1);
    Product::add($product_arcana_juggernaut);
    attr_dota2::add($attr_item_2);

    foreach ($hero as $params){
        $result = Hero::add($params);
    }

    if ($result == count($hero)){
        Alert::alerts("تعداد " . $result . " هیرو ، در جدول هیرو های دوتا 2 درج شد.",null,"success");
    }
}

$title = "پنل مدیریت | نصب و راه اندازی";
get_template("head",null,$title);
get_template("header");
?>
<section class="container mt-4">
    <?php $alerts = Alert::alerts(); if ($alerts) echo $alerts; ?>
</section>