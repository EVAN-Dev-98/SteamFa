<?php
/* Created By Evan ( Sajad Gholami ) */

$SiteName = "SteamFa";
$SiteDir = "/SteamFa";
$SiteAbout = "فروشگاه استیم فارسی، ما در این فروشگاه امکان خرید و فروش آیتم های استیم را فراهم کرده ایم، شما میتوانید آیتم های خود را به قیمت روز که به صورت خودکار توسط سیستم استیم فارسی و بر اساس قیمت لحظه ای آیتم داخل استیم و نرخ لحظه ای دلار حساب میشود داخل سایت برای فروش قرار داده و مبلغ آنرا دریافت کرده و یا آیتم دیگری در فروشگاه انتخاب کنید، همچنین در استیم فارسی امکان شارژ استیم ولت شما به میزان دلخواه شما نیز وجود دارد.";

if (! defined('DBHOST') ) define('DBHOST','localhost');
if (! defined('DBUSER') ) define('DBUSER','root');
if (! defined('DBPASS') ) define('DBPASS','');
if (! defined('DBNAME') ) define('DBNAME','steamfa');
if (! defined('CHARSET')) define('CHARSET','utf8mb4');
if (! defined('COLLATE')) define('COLLATE','utf8mb4_unicode_ci');

$dbHost = DBHOST;
$dbUser = DBUSER;
$dbPass = DBPASS;
$dbName = DBNAME;
$dbCharset = CHARSET;
$dbCollate = COLLATE;

$SiteVersion = 9;

$SoftSetup = true;
$FirstTime = false;